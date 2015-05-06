@extends ('pages.master')

@section('header_declaration')
    <header id="header" class="parallax parallax-bg-1 middle_header bottom-indent">
@stop

@section('content')

    <div id="content">
        <div class="block-2 parallax parallax-bg-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h3 class="title title-2">Need to put something pithy here</h3>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div id="signup-form" class="row" >
                {!! Form::open(['url' => '/subscribe', 'class' => 'col-md-8 col-md-offset-2', 'role' => 'form', 'id' => 'subscription_form']) !!}
                    <div class="panel panel-default registration">
                        <div class="panel-heading">
                            <div class="row">
                                <h1 class="panel-title col-lg-7 col-md-5 col-sm-7">All the Health, none of the Hype!</h1>
                                <div class="cc-icons col-lg-5 col-md-4">
                                    <img alt="All Credit Cards Accepted" src="/images/icons/credit-card-icons.png">
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <fieldset>
                                <h3 class="signup-subheading">Pick a Level:</h3>
                                <div class="form-group row">
                                    {!! Form::label('subscription', 'Subscription Plan', [ 'class' => 'col-md-4 control-label' ]) !!}
                                    <div class="col-md-4">
                                        {!! Form::select( 'subscription' , [ 'tier1' => '(1 Call) $5 per month', 'tier2' => '(3 Calls) $15 per month', 'tier3' => '(5 Calls) $25 per month' ],
                                            $level,
                                            [ 'class' => 'form-control' ])
                                        !!}
                                    </div>
                                    <span class="help-block"><a href="/#plans" class="purple"><strong>Which Plan is right for me?</strong></a></span>
                                </div>
                                {!! Form::ltdcInput('coupon_code', 'text', Input::old('coupon_code'), 'Have a Coupon Code?', '', 'col-sm-4', 'form-control input-sm', 'coupon_code', $errors) !!}
                            </fieldset>
                            <fieldset>
                                <h3 class="signup-subheading">Your Profile:</h3>
                                @include ('pages.._form_parts.first_person')
                                @include ('pages.._form_parts.passwords')

                            </fieldset>
                            <fieldset>
                                <h3 class="signup-subheading">Billing Information:</h3>
                                @include ('pages.._form_parts.cc_info')
                                <p class="alert" style="margin-top: 30px"> Don't worry. This form is 100% secure. Your private credit card data will never touch our servers. </p>
                            </fieldset>

                        </div>
                        <div class="panel-footer clearfix">
                            <div class="pull-left col-md-7 terms" style="padding-left: 0;">
                                <p> So you want solid, science based health information without hype and sales pitches? Smart choice! Please note that, by signing up, you agree to enter a subscription, until you choose to cancel. </p>
                            </div>
                            <div class="pull-right sign-up-buttons">
                                <button class="btn btn-primary" data-single-click="" data-confirm="Are you positive that you want to sign up for Health Without Hype?" name="create-account" type="submit"> Join Health Without Hype </button>
                                <a class="btn" href="/login">Or Log In</a>
                            </div>
                            <div class="payment-errors col-md-8 text-danger" style="display:none"> </div>
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>



        <div class="block-6">
            <div role="tabpanel">

                <!-- Tab panes -->
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="first_categor">

                        <ul class="list list-7">
                            <li class="wrapper">
                                <div class="parallax parallax-bg-7 toggle_gallary_block">
                                    <h3 class="title title-2">5th Call</h3>
                                </div>
                            </li>
                            <li class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <a href="img/page4-img1_original.jpg" class="fancy_wrap">
                                                    <img src="img/page4-img1.jpg" alt="photo">
                                                </a>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <a href="img/page4-img2_original.jpg" class="fancy_wrap">
                                                    <img src="img/page4-img2.jpg" alt="photo">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <a href="img/page4-img3_original.jpg" class="fancy_wrap">
                                                    <img src="img/page4-img3.jpg" alt="photo">
                                                </a>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <a href="img/page4-img4_original.jpg" class="fancy_wrap">
                                                    <img src="img/page4-img4.jpg" alt="photo">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <a href="img/page4-img5_original.jpg" class="fancy_wrap">
                                                    <img src="img/page4-img5.jpg" alt="photo">
                                                </a>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <a href="img/page4-img6_original.jpg" class="fancy_wrap">
                                                    <img src="img/page4-img6.jpg" alt="photo">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <a href="img/page4-img7_original.jpg" class="fancy_wrap">
                                                    <img src="img/page4-img7.jpg" alt="photo">
                                                </a>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <a href="img/page4-img8_original.jpg" class="fancy_wrap">
                                                    <img src="img/page4-img8.jpg" alt="photo">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>




            <script src="https://js.stripe.com/v2/"></script>
            <script src="/js/billing.js"></script>
@stop