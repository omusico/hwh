$(document).ready(function () {

    $('.subOpt').on('change', function(){
        $('#sub_init_box').removeClass('hide')
        var yearChecked = $('#sub_year').is(':checked');
//alert (yearChecked);
        if (yearChecked==true){
            $('#sub_base').text('$' + $('#cost_year').val());
            $('#sub_total').text('$' + $('#cost_year').val());
            $('#sub_init_box').hide();
        }else{
            $('#sub_base').text('$' + $('#cost_month').val());
            $('#sub_init_box').show();
            $('#sub_initiation').text('$' + $('#cost_initiation').val());
            var total=(parseInt($('#cost_month').val()) + parseInt($('#cost_initiation').val()));

            $('#sub_total').text('$' + total);
        }
    });


    $('#lastname').on('change', function(){
        var fixedFirst = '';
        var fixedLast = '';

        if ($('#firstname').val() && $('#firstname').val()!='First Name (required)'){
            fixedFirst = $('#firstname').val();
        }

        if ($('#lastname').val() && $('#lastname').val()!='Last Name (required)'){
            fixedLast = $('#lastname').val();
        }

        $('#cardName').val(fixedFirst + ' ' + fixedLast);
    });




    jQuery.validator.messages.required = "";
        $("#payment-form").validate({onchange: true});
        $("#sidebar_contact").validate();


});


