@extends('layouts.main')

@section('content')
<style>
    .breadcumb-overlay {
        background: linear-gradient(to right, rgb(2, 16, 33) 40%, transparent);
        top: 0;
        width: 100%;
        left: 0;
        height: 100%;
        opacity: 0.995;
    }

    .background-color {
        background: rgb(2, 16, 33, 0.82);
    }

    .background-color-1 {
        background-color: rgb(2, 16, 33, 0.79);
    }

    #overlay,
    #cc {
        background-image: url('img/background/star.png');
        background-repeat: no-repeat;
        background-position: top left;
        background-attachment: scroll;
        z-index: -1;
        position: absolute;
        width: 100%;
        height: 1200px;
        margin-left: -20em;
    }

    .title-bg {
        font-weight: 900;
        text-transform: uppercase;
        font-size: 30px;
    }

    .title-sm {
        text-transform: uppercase;
        margin-top: -15px;
        font-size: 15px;
        color: #BA9256;
        font-weight: 500;
        letter-spacing: 2px;
    }

    .section-headline p {
        text-transform: none;
        font-size: 1.7rem;
        line-height: 2.06rem;
        letter-spacing: 1.5px;
        color: rgba(209, 228, 240);
    }

    /* .text-left {
        color: #D4D8E3;
        padding-right: 15px;
        padding-bottom: 5px;
    } */

    .bottom {
        display: inline-block;
        width: 2.5em;
        height: 2.5em;
        border: 0.11em solid rgb(157, 195, 218, 0.22);
        border-radius: 50%;
        margin-left: 0.75em;
    }

    .bottom:after {
        content: '';
        display: inline-block;
        margin-top: 0.3em;
        margin-left: 0.6em;
        margin-right: 0.7em;
        width: 1.1em;
        height: 1.1em;
        border-top: 0.13em solid #333;
        border-right: 0.13em solid #333;
        -moz-transform: rotate(135deg);
        -webkit-transform: rotate(135deg);
        transform: rotate(135deg);
    }

    span.title-bottom {
        text-transform: uppercase;
        letter-spacing: 2.2px;
        line-height: 2em;
        font-size: 30px;
        color: #fff;
        font-weight: 400;
    }

    .mt-5 {
        margin-top: 2em;
    }

    .fa-color {
        color: #BA9256;
        font-size: 45px;

    }

    .star-container i {
        align-content: center;
    }

    .fa-star:before {
        content: "\f005";
        position: relative;
        bottom: 1em;
    }

    .background-color1 {
        background: linear-gradient(rgb(0, 0, 0, 0.6) 50%, transparent);
    }

    .section-height {
        height: 100%;
    }

    .sub-title-sm {
        font-size: 2rem;
        color: #CCA177;
        float: right;
        width: 50%;
        text-align: left;
        margin-top: 10px;
        padding: 10px 10px;
    }
    .sub-text{
        font-size: 1.5rem;
        color: rgba(209, 228, 240);
        float: right;
        text-align: left; 
        width: 50%; 
        margin: 20px;
        position: relative;
        top: 10px;
    }

    .white {
        color: #fff;
    }

    .row-flex {
        display: flex;
        flex-wrap: wrap;
    }


    /* vertical spacing between columns */

    .col-pad {
        margin-bottom: 30px;
    }

    .content {
        height: 100%;
        padding: 20px 20px 10px;
        box-shadow: 0 5px 25px rgb(0 0 0 / 70%);
        border: 1px solid #CCA177;
    }

    .text-left {
        color: #D4D8E3;
        padding-right: 15px;
        padding-bottom: 5px;
    }

    .slide-content {
        margin-top: -80px;
    }

    .rev_slider .slotholder:after,
    .rev_slider .slotholder:before {
        width: 100%;
        height: 100%;
        content: "";
        position: absolute;
        top: 0;
        pointer-events: none;
        background: radial-gradient(circle at top right, rgb(0, 0, 0, 0.02), rgb(2, 16, 33, .7) 60%)
    }

    .title-1 {
        font-family: 'Califonia Bound';
    }

    .title-under:before {
        content: "";
        position: absolute;
        margin-left: 0.2em;
        top: 105.2%;
        left: 0;
        bottom: 0;
        height: 1px;
        width: 10%;
        border-bottom: 2px solid #CBA274;
    }

    .my-auto {
        margin-top: 40px;
        margin-bottom: 40px;
    }

    .parallelogram {
        -webkit-clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 0% 100%);
        clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 0% 100%);
    }

    .shape-outer {
        flex-shrink: 0;
        width: 100%;

        background-image: linear-gradient(to bottom right, rgb(2, 16, 33, 0.8), rgb(2, 16, 33, .82), #2b86c5);
    }

    .shape-inner {
        width: 100%;

    }

    .parallelogram-un {
        -webkit-clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 0% 100%);
        clip-path: polygon(25% 0%, 100% 0%, 100% 100%, 0% 100%);
    }

    .shape-outer-un {
        flex-shrink: 0;
        width: 100%;

        background-image: linear-gradient(to bottom right, rgb(2, 16, 33, 0.79), rgb(2, 16, 33, 0.56), rgb(2, 16, 33, 0.6));
    }

    .shape-inner-nu {
        width: 100%;

    }

    .the-arrow {
        width: 1px;
        transition: all 0.2s;
    }

    .the-arrow.-left {
        position: absolute;
        top: 60%;
        left: 0;
    }

    .the-arrow.-left>.shaft {
        width: 0;
        background-color: #4c4c4c;
    }

    .the-arrow.-left>.shaft:before,
    .the-arrow.-left>.shaft:after {
        width: 0;
        background-color: #4c4c4c;
    }

    .the-arrow.-left>.shaft:before {
        transform: rotate(0);
    }

    .the-arrow.-left>.shaft:after {
        transform: rotate(0);
    }

    .the-arrow.-right {
        top: 3px;
    }

    .the-arrow.-right>.shaft {
        width: 1px;
        transition-delay: 0.2s;
    }

    .the-arrow.-right>.shaft:before,
    .the-arrow.-right>.shaft:after {
        width: 8px;
        transition-delay: 0.3s;
        transition: all 0.5s;
    }

    .the-arrow.-right>.shaft:before {
        transform: rotate(40deg);
    }

    .the-arrow.-right>.shaft:after {
        transform: rotate(-40deg);
    }

    .the-arrow>.shaft {
        background-color: #CCA177;
        display: block;
        height: 1px;
        position: relative;
        transition: all 0.2s;
        transition-delay: 0;
        top: -3px;
        will-change: transform;
    }

    .the-arrow>.shaft:before,
    .the-arrow>.shaft:after {
        background-color: #CCA177;
        content: "";
        display: block;
        height: 1px;
        position: absolute;
        top: 0;
        right: 0;
        transition: all 0.2s;
        transition-delay: 0;
    }

    .the-arrow>.shaft:before {
        transform-origin: top right;
    }

    .the-arrow>.shaft:after {
        transform-origin: bottom right;
    }

    .animated-arrow {
        display: inline-block;
        color: #BF9256;
        font-size: 0.95em;
        font-style: normal;
        text-decoration: none;
        position: relative;
        transition: all 0.2s;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .animated-arrow:hover {
        color: #808080;
    }

    .animated-arrow:hover>.the-arrow.-left>.shaft {
        width: 64px;
        transition-delay: 0.1s;
        background-color: #808080;
    }

    .animated-arrow:hover>.the-arrow.-left>.shaft:before,
    .animated-arrow:hover>.the-arrow.-left>.shaft:after {
        width: 8px;
        transition-delay: 0.1s;
        background-color: #808080;
    }

    .animated-arrow:hover>.the-arrow.-left>.shaft:before {
        transform: rotate(40deg);
    }

    .animated-arrow:hover>.the-arrow.-left>.shaft:after {
        transform: rotate(-40deg);
    }

    .animated-arrow:hover>.main {
        transform: translateX(17px);
        transform: translateX(80px);
    }

    .animated-arrow:hover>.main>.the-arrow.-right>.shaft {
        width: 0;
        transform: translateX(200%);
        transition-delay: 0;
    }

    .animated-arrow:hover>.main>.the-arrow.-right>.shaft:before,
    .animated-arrow:hover>.main>.the-arrow.-right>.shaft:after {
        width: 0;
        transition-delay: 0;
        transition: all 0.1s;
    }

    .animated-arrow:hover>.main>.the-arrow.-right>.shaft:before {
        transform: rotate(0);
    }

    .animated-arrow:hover>.main>.the-arrow.-right>.shaft:after {
        transform: rotate(0);
    }

    .animated-arrow>.main {
        display: flex;
        align-items: center;
        transition: all 0.2s;
    }

    .animated-arrow>.main>.text {
        margin: 0 16px 0 0;
        line-height: 1;
    }

    .animated-arrow>.main>.the-arrow {
        position: relative;
    }

    .float-right {
        float: right;
    }
</style>
<!-- Start breadcumb Area -->
<div class="rev_slider_wrapper">
    <div class="rev_slider" data-version="5.0">
        <ul class="slotholder">
        <li data-transition="fade" data-thumb="{{asset('img/background/b17.jpg')}}">

<img src="{{asset('img/background/b17.jpg')}}" alt="">
<div class="tp-caption rectangle-text" data-x="left" data-y="215" data-speed="700" data-start="1200" data-transform_in="o:0;x:-100;s:300;" data-transform_out="o:0;x:-100;s:300;">
</div>

<div class="tp-caption title-1" data-x="left" data-y="255" data-speed="700" data-start="1200" data-transform_in="o:0;x:-100;s:300;" data-transform_out="o:0;x:-100;s:300;">
    Welcome To
</div>
<div class="tp-caption title-1" data-x="left" data-y="290" data-speed="700" data-start="1200" data-transform_in="o:0;x:-100;s:300;" data-transform_out="o:0;x:-100;s:300;">
    The Next Level
</div>
<div class="tp-caption title-1 title-under" data-x="left" data-y="330" data-speed="700" data-start="1200" data-transform_in="o:0;x:-100;s:300;" data-transform_out="o:0;x:-100;s:300;">
    In <span style="color: #CBA274;">Trading</span>
</div>
<div class="tp-caption text" data-x="left" data-y="370" data-speed="700" data-start="1200" data-transform_in="o:0;x:-100;s:300;" data-transform_out="o:0;x:-100;s:300;">
    Take your trading to the next level with
</div>
<div class="tp-caption text" data-x="left" data-y="390" data-speed="700" data-start="1200" data-transform_in="o:0;x:-100;s:300;" data-transform_out="o:0;x:-100;s:300;">
    the highest degree of automation for
</div>
<div class="tp-caption text" data-x="left" data-y="410" data-speed="700" data-start="1200" data-transform_in="o:0;x:-100;s:300;" data-transform_out="o:0;x:-100;s:300;">
    your charting.
</div>
<div class="tp-caption" data-x="left" data-y="450" data-speed="700" data-start="1350" data-transform_in="o:0;y:100;s:300;" data-transform_out="o:0;y:100;s:300;">
    <a class="btn btn-default btn-lg" href="{{url('/')}}">Home</a>
</div>
</li>
<li data-transition="fade" data-thumb="{{asset('img/background/b14.jpg')}}">

<img src="{{asset('img/background/b14.jpg')}}" alt="">
<div class="tp-caption rectangle-text" data-x="left" data-y="215" data-speed="700" data-start="1200" data-transform_in="o:0;x:-100;s:300;" data-transform_out="o:0;x:-100;s:300;">
</div>

<div class="tp-caption title-1" data-x="left" data-y="255" data-speed="700" data-start="1200" data-transform_in="o:0;x:-100;s:300;" data-transform_out="o:0;x:-100;s:300;">
    Welcome To
</div>
<div class="tp-caption title-1" data-x="left" data-y="290" data-speed="700" data-start="1200" data-transform_in="o:0;x:-100;s:300;" data-transform_out="o:0;x:-100;s:300;">
    The Next Level
</div>
<div class="tp-caption title-1 title-under" data-x="left" data-y="330" data-speed="700" data-start="1200" data-transform_in="o:0;x:-100;s:300;" data-transform_out="o:0;x:-100;s:300;">
    In <span style="color: #CBA274;">Trading</span>
</div>
<div class="tp-caption text" data-x="left" data-y="370" data-speed="700" data-start="1200" data-transform_in="o:0;x:-100;s:300;" data-transform_out="o:0;x:-100;s:300;">
    Take your trading to the next level with
</div>
<div class="tp-caption text" data-x="left" data-y="390" data-speed="700" data-start="1200" data-transform_in="o:0;x:-100;s:300;" data-transform_out="o:0;x:-100;s:300;">
    the highest degree of automation for
</div>
<div class="tp-caption text" data-x="left" data-y="410" data-speed="700" data-start="1200" data-transform_in="o:0;x:-100;s:300;" data-transform_out="o:0;x:-100;s:300;">
    your charting.
</div>
<div class="tp-caption" data-x="left" data-y="450" data-speed="700" data-start="1350" data-transform_in="o:0;y:100;s:300;" data-transform_out="o:0;y:100;s:300;">
    <a class="btn btn-default btn-lg" href="{{url('/')}}">Home</a>
</div>
</li>
        </ul>
    </div><!-- rev_slider -->
</div><!-- rev_slider_wrapper -->
<!-- End breadcumb Area -->
<!-- Start Invest area -->
<div class="overlay-color" id="overlay"></div>
<div class="background-color">
    <div class="background-color-1">
        <div class="invest-area  page-padding-2" style="background: rgb(2, 16, 33, 0.36);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h3>Asset   Management</h3>
                            <!-- <p>Help agencies to define their new business objectives and then create professional software.</p> -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="section-headline text-left my-auto">
                            <div class="trapezoid"></div>
                            <p>We deal in real estate investment through purchasing on
                                development projects and completed estates in different
                                locations with reputable and leading developers. we help
                                our investors to acquire real estates units as bonus through
                                investment packages as they invest their capital in trading.
                                Also we use proactive marketing and brokerage techniques that
                                are necessary to navigate todays` challenging real estate.
                                <br><br>
                                Our real estate projects under sales are oxford Bulverde and stela marris
                            </p>
                        </div>
                        <a class='animated-arrow' href="{{url('asset/under_management')}}">
                            <span class='the-arrow -left'>
                                <span class='shaft'></span>
                            </span>
                            <span class='main'>
                                <span class='text'>
                                    Read More
                                </span>
                                <span class='the-arrow -right'>
                                    <span class='shaft'></span>
                                </span>
                            </span>
                        </a>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="shape-outer parallelogram">
                            <div class="shape-inner parallelogram">
                                <div class="owl-carousel images-slider-vertical">
                                    <div class="item">
                                        <img src="{{asset('img/about/REAL_EASTATE_SLIDER1.png')}}" alt="">
                                    </div><!-- item -->
                                    <div class="item">
                                        <img src="{{asset('img/about/REAL_EASTATE_SLIDER2.png')}}" alt="">
                                    </div><!-- item -->
                                    <div class="item">
                                        <img src="{{asset('img/about/REAL_EASTATE_SLIDER3.png')}}" alt="">
                                    </div><!-- item -->
                                </div><!-- images-slider-horizontal -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                        <a href="#">
                            <span class="bottom"></span>
                        </a>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12 mt-6">
                        <div class="text-center">
                            <span class="title-bottom">Unclock The Power Of Analytics</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="background-img1">
            <div class="background-color1">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 float-right">
                        <div class="shape-outer-un parallelogram-un">
                            <div class="shape-inner-un parallelogram-un">
                                <div class="section-height">
                                    <div class="row">
                                    <span class="sub-title-sm">Fast, Simple, Powerful, SmartTrader.
                                    </span>
                                    </div>
                                    <div class="row">
                                    <span class="sub-text"><q>With automated Smart Tools, relevant data, widgets, abd more, SmartTrader validates your trading decisions and gives you all of the information you need so you can excute trades with Confidence.</q></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="invest-area  page-padding-2" style="background: rgb(2, 16, 33, 0.06);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h3>Traded products</h3>
                            <p>We diversify our portfolios with a range of financial products such as FOREX, Indices, Commodities, Equities CFDs, and Futures. We trade with financial markets with registered and regulated brokers.</p>
                        </div>
                    </div>
                </div>
                <div class="row row-flex">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-pad">
                        <div class="content">
                            <div class="top-price-inner">
                                <div class="rates">
                                    <span class="prices">Forex</span>
                                </div>
                                <span class="per-day">(Foreign Exchange)</span>
                            </div>
                            <p class="pricing-text">
                                We Buy and Sell currency pairs on the most popular trading market and exploit the results of world events. With the markets
                                reacting to geo-political and economic stimuli every day, it's a great way to speculate on world events.
                                Forex Traders buy and sell about $5trn of Forex daily, which creates liquid markets that offers opportunities for all types of traders.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 col-pad">
                        <div class="content">
                            <div class="top-price-inner">
                                <div class="rates">
                                    <span class="prices">Trading Indices CFDs</span>
                                </div>
                            </div>
                            <p class="pricing-text">
                                We speculate the major markets based on the effects of global trade and the performance of big businesses.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row row-flex">
                    <div class="col-md-4 col-sm-4 col-xs-12 col-pad">
                        <div class="content">
                            <div class="top-price-inner">
                                <div class="rates">
                                    <span class="prices">Commodities</span>
                                </div>
                            </div>
                            <p class="pricing-text">
                                We trade the world's raw materials including gold, silver, and energy products like crude oil.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 col-pad">
                        <div class="content">
                            <div class="top-price-inner">
                                <div class="rates">
                                    <span class="prices">Equities</span>
                                </div>
                            </div>
                            <p class="pricing-text">
                                Trade stocks and shares in some of the world's biggest companies and best-known brands.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 col-pad">
                        <div class="content">
                            <div class="top-price-inner">
                                <div class="rates">
                                    <span class="prices">Futures</span>
                                </div>
                            </div>
                            <p class="pricing-text">
                                Traders worldwide use us futures to control risk or seek opportunity on changing markets
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </di>
        </div> -->
    </div>
    <!-- End Invest area -->
    @endsection