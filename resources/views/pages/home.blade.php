@extends ('pages.master')

@section('header_declaration')
    <header id="header" class="parallax parallax-bg-1 large_header">
@stop

@section('header_extension')
    @include ('pages.sections.header_extension')
@stop

@section('content')

<div id="content">
    <div class="block-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="title title-1">What’s Happening?</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="thumb-pad-2 indent-1">
                                <div class="thumbnail">
                                    <img src="img/page1-img4.jpg" alt="photo">
                                    <div class="caption">
                                        <time datetime="2015-10-27">27/10/2015</time>
                                        <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="thumb-pad-2 indent-1">
                                <div class="thumbnail">
                                    <img src="img/page1-img5.jpg" alt="photo">
                                    <div class="caption">
                                        <time datetime="2015-10-22">22/10/2015</time>
                                        <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="thumb-pad-2 indent-1">
                                <div class="thumbnail">
                                    <img src="img/page1-img6.jpg" alt="photo">
                                    <div class="caption">
                                        <time datetime="2015-10-15">15/10/2015</time>
                                        <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="thumb-pad-2 indent-1">
                                <div class="thumbnail">
                                    <img src="img/page1-img7.jpg" alt="photo">
                                    <div class="caption">
                                        <time datetime="2015-10-11">11/10/2015</time>
                                        <p>Lorem ipsum dolor sit amet, consec tetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include ('pages.sections.price_matrix')

    <div class="block-2 parallax parallax-bg-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="title title-2">Contact us</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="block-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                    <form id="contact-form">
                        <div class="contact-form-loader"></div>
                        <fieldset>
                            <label class="name form-div-1">
                                <input type="text" name="name" placeholder="Your Name " value="" data-constraints="@Required @JustLetters" />
                                <span class="empty-message">*This field is required.</span>
                                <span class="error-message">*This is not a valid name.</span>
                            </label>
                            <label class="email form-div-2">
                                <input type="text" name="email" placeholder="Your Email " value="" data-constraints="@Required @Email" />
                                <span class="empty-message">*This field is required.</span>
                                <span class="error-message">*This is not a valid email.</span>
                            </label>
                            <label class="message form-div-4">
									<textarea name="message" placeholder="Your Message " data-constraints='@Length(min=20,max=999999)'>

									</textarea>
                                <span class="empty-message">*This field is required.</span>
                                <span class="error-message">*The message is too short.</span>
                            </label>
                            <!-- <label class="recaptcha"><span class="empty-message">*This field is required.</span></label> -->
                            <div class="btns">
                                <a href="#" data-type="submit" class="btn-default btn btn-2" data-text="send">send</a>
                            </div>
                        </fieldset>
                        <div class="modal fade response-message">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                            &times;
                                        </button>
                                        <h4 class="modal-title">Modal title</h4>
                                    </div>
                                    <div class="modal-body">
                                        You message has been sent! We will be in touch soon.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop