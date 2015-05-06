!(function() {
    var StripeBilling = {
        init: function() {
            this.form = $('#subscription_form');
            this.submitButton = this.form.find('button[type=submit]');
            this.submitButtonText = this.submitButton.text();

            var stripeKey = $('meta[name="stripe-key"]').attr('content');

            Stripe.setPublishableKey(stripeKey);

            this.bindEvents();
        },

        bindEvents: function() {
            this.form.find('#subscription-plan').on('change', this.planChange);
            this.form.on('submit', $.proxy(this.sendToken, this));
        },

        planChange: function() {
            var subscriptionType = $(this).find('option:selected').val();
            var cost;

            if (subscriptionType == 'monthly') cost = 9;
            if (subscriptionType == 'yearly') cost = 86;
            if (subscriptionType == 'business-5') cost = 300;
            if (subscriptionType == 'business-10') cost = 575;
            if (subscriptionType == 'business-25') cost = 1400;
            if (subscriptionType == 'business-50') cost = 2500;

            $.publish('subscription.plan.change', {
                subscriptionType: subscriptionType,
                cost: cost
            });
        },

        sendToken: function(event) {
            var form = this.form;

            if (! Validator(
                    form,
                    function(input) {
                        input.closest('.form-group').removeClass('has-error');
                    },
                    function(input) {
                        input.closest('.form-group').addClass('has-error');
                    }
                )) return false;

            this.submitButton
                .attr('disabled', 'disabled')
                .html('<i class="icon-spinner icon-spin icon-large"></i>')

            Stripe.createToken(form, $.proxy(this.stripeResponseHandler, this));

            event.preventDefault();
        },

        stripeResponseHandler: function(status, response) {
            if (response.error) {
                this.submitButton.removeAttr('disabled').text(this.submitButtonText);
                this.form.find('.payment-errors').show().text(response.error.message);
            } else {
  alert('should be adding token');
                $('<input>', {
                    type: 'hidden',
                    name: 'stripeToken',
                    value: response.id // token
                }).appendTo(this.form);

                this.form.get(0).submit();
            }
        }
    };

    var Validator = (function() {
        var rules = {
            'card-number': 'validateCardNumber',
            'card-cvc': 'validateCVC'
        };

        var success;

        return function(form, cbSuccess, cbFail) {
            success = true;

            $.each(rules, function(id, validator) {
                var input = form.find('#' + id);
                var validated = Stripe.card[validator](input.val());

                if (validated) {
                    cbSuccess(input);
                } else {
                    cbFail(input);
                    success = false;
                }
            });

            return success;
        };
    })();

    StripeBilling.init();
})();