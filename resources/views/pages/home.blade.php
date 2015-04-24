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


@stop