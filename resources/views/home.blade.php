@extends('layouts.main')

@section('content')
<style>
    .text-left {
        color: #D4D8E3;
        padding-right: 15px;
        padding-bottom: 5px;
    }

    .mouse_scroll {
        display: block;
        margin: 0 auto;
        width: 24px;
        height: 100px;
        /* border: 2px solid #BA9256; */
    }

    .mouse {
        height: 42px;
        width: 24px;
        border-radius: 14px;
        transform: none;
        border: 2px solid #BA9256;
        position: relative;
        top: 17em;
    }

    .wheel {
        height: 5px;
        width: 2px;
        display: block;
        margin: 5px auto;
        background: #BA9256;
        position: relative;
        height: 6px;
        width: 4px;
        border: 2px solid #BA9256;
        -webkit-border-radius: 8px;
        border-radius: 8px;
    }

    .wheel {
        -webkit-animation: mouse-wheel 0.6s linear infinite;
        -moz-animation: mouse-wheel 0.6s linear infinite;
        animation: mouse-wheel 0.6s linear infinite;
    }

    @-webkit-keyframes mouse-wheel {
        0% {
            opacity: 1;
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            transform: translateY(0);
        }

        100% {
            opacity: 0;
            -webkit-transform: translateY(6px);
            -ms-transform: translateY(6px);
            transform: translateY(6px);
        }
    }

    @-moz-keyframes mouse-wheel {
        0% {
            top: 1px;
        }

        25% {
            top: 2px;
        }

        50% {
            top: 3px;
        }

        75% {
            top: 2px;
        }

        100% {
            top: 1px;
        }
    }

    @-o-keyframes mouse-wheel {

        0% {
            top: 1px;
        }

        25% {
            top: 2px;
        }

        50% {
            top: 3px;
        }

        75% {
            top: 2px;
        }

        100% {
            top: 1px;
        }
    }

    @keyframes mouse-wheel {

        0% {
            top: 1px;
        }

        25% {
            top: 2px;
        }

        50% {
            top: 3px;
        }

        75% {
            top: 2px;
        }

        100% {
            top: 1px;
        }
    }

    @-webkit-keyframes mouse-scroll {

        0% {
            opacity: 0;
        }

        50% {
            opacity: .5;
        }

        100% {
            opacity: 1;
        }
    }

    @-moz-keyframes mouse-scroll {

        0% {
            opacity: 0;
        }

        50% {
            opacity: .5;
        }

        100% {
            opacity: 1;
        }
    }

    @-o-keyframes mouse-scroll {

        0% {
            opacity: 0;
        }

        50% {
            opacity: .5;
        }

        100% {
            opacity: 1;
        }
    }

    @keyframes mouse-scroll {

        0% {
            opacity: 0;
        }

        50% {
            opacity: .5;
        }

        100% {
            opacity: 1;
        }
    }

    .background-color {
        background: rgb(2, 16, 33);
        opacity: 0.949;
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

    /* #triangle-up {
      width: 0;
      height: 0;
      border-left: 200px solid transparent;
      border-right: 200px solid transparent;
      border-bottom: 400px solid #669DBF;
      position: absolute;
      bottom: -1em;
      left: 7em;
      z-index: -99999;
    } */
    .mt-2 {
        margin-top: 2rem;
        margin-bottom: 2rem;
    }

    .play-btn {
        width: 100px;
        height: 100px;
        background: radial-gradient(rgba(186, 146, 86, 0.8) 60%, rgba(255, 255, 255, 1) 62%);
        border-radius: 50%;
        position: relative;
        display: block;
        margin: 4px auto;
        box-shadow: 0px 0px 25px 3px rgba(186, 146, 86, 0.8);
    }

    /* triangle */
    .play-btn::after {
        content: "";
        position: absolute;
        left: 50%;
        top: 50%;
        -webkit-transform: translateX(-40%) translateY(-50%);
        transform: translateX(-40%) translateY(-50%);
        transform-origin: center center;
        width: 0;
        height: 0;
        border-top: 15px solid transparent;
        border-bottom: 15px solid transparent;
        border-left: 25px solid #fff;
        z-index: 100;
        -webkit-transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
        transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
    }

    /* pulse wave */
    .play-btn:before {
        content: "";
        position: absolute;
        width: 150%;
        height: 150%;
        -webkit-animation-delay: 0s;
        animation-delay: 0s;
        -webkit-animation: pulsate1 2s;
        animation: pulsate1 2s;
        -webkit-animation-direction: forwards;
        animation-direction: forwards;
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite;
        -webkit-animation-timing-function: steps;
        animation-timing-function: steps;
        opacity: 1;
        border-radius: 50%;
        border: 5px solid rgba(255, 255, 255, .75);
        top: -26%;
        left: -26%;
        background: rgba(198, 16, 0, 0);
    }

    @-webkit-keyframes pulsate1 {
        0% {
            -webkit-transform: scale(0.6);
            transform: scale(0.6);
            opacity: 1;
            box-shadow: inset 0px 0px 25px 3px rgba(255, 255, 255, 0.75), 0px 0px 25px 10px rgba(255, 255, 255, 0.75);
        }

        100% {
            -webkit-transform: scale(1);
            transform: scale(1);
            opacity: 0;
            box-shadow: none;

        }
    }

    @keyframes pulsate1 {
        0% {
            -webkit-transform: scale(0.6);
            transform: scale(0.6);
            opacity: 1;
            box-shadow: inset 0px 0px 25px 3px rgba(255, 255, 255, 0.75), 0px 0px 25px 10px rgba(255, 255, 255, 0.75);
        }

        100% {
            -webkit-transform: scale(1, 1);
            transform: scale(1);
            opacity: 0;
            box-shadow: none;

        }
    }

    .read-more {
        transform: translate(-50%, -50%);
        color: #BA9256;
        text-decoration: none;
        font-size: 20px;
        display: inline-block;
        padding: 0.4em 1.5em;
        border: 2px solid #BA9256;
        transition: 0.02s 0.2s cubic-bezier(0.1, 0, 0.1, 1);
        margin-top: 70px;
        margin-left: 90px;
    }

    .read-more::before {
        content: "";
        display: inline-block;
        position: absolute;
        top: 0;
        left: 0;
        right: 100%;
        bottom: 0;
        background: #BA9256;
        transition: 0.3s 0.2s cubic-bezier(0.1, 0, 0.1, 1), left 0.3s cubic-bezier(0.1, 0, 0.1, 1);
        z-index: -1;
    }

    .read-more::after {
        content: "";
        display: inline-block;
        background-image: url("https://image.flaticon.com/icons/png/128/109/109617.png");
        position: absolute;
        top: 0;
        left: calc(100% - 3em);
        right: 3em;
        bottom: 0;
        background-size: 1.5em;
        background-repeat: no-repeat;
        background-position: center;
        transition: right 0.3s cubic-bezier(0.1, 0, 0.1, 1);
    }

    .read-more:hover {
        padding: 0.5em 3.5em 0.5em 0.5em;
    }

    .read-more:hover::before {
        left: calc(100% - 3em);
        right: 0;
        transition: 0.3s cubic-bezier(0.1, 0, 0.1, 1), left 0.3s 0.2s cubic-bezier(0.1, 0, 0.1, 1);
    }

    .read-more:hover::after {
        right: 0;
        transition: right 0.3s 0.2s cubic-bezier(0.1, 0, 0.1, 1);
    }

    .white {
        color: #ffffff;
    }

    .font-weight-600 {
        font-weight: 500;
    }

    #videowrapper {
        position: relative;
        z-index: 1;
    }

    #videowrapper::after {
        background-color: red;
    }

    #fullScreenDiv {
        min-height: 100%;
        height: 90vh;
        width: 100vw;
        padding: 0;
        margin: 0;
        background: rgb(2, 16, 33);
        ;
        position: relative;
    }

    #video {
        width: 100%;
        height: auto;
        display: block;
        margin: auto;
        position: absolute;
        /* z-index: -1; */
    }

    .overlay-team {
        background: rgb(2, 16, 33);
        opacity: 0.9;
        height: auto;
        /* z-index: 1; */
    }

    .page-padding-team {
        padding: 20px 0px -3px;
        background: rgb(2, 16, 33);
        opacity: 0.9;
    }

    .owl-carousel .item {
        margin: 3px
    }

    .owl-carousel.owl-item {
        width: 325px;
    }

    .owl-carousel .item img {
        display: block;
        width: 100%;
        height: auto
    }

    .owl-carousel .item {
        margin: 3px
    }

    .owl-carousel {
        margin-bottom: 15px
    }

    .page-padding {
        padding: 70px 0px 110px;
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

    #circle-shape-example {
        text-align: left;
        /* margin: 2rem; */
    }

    #circle-shape-example p {
        line-height: 1.8;
    }

    #circle-shape-example .curve {
        width: 33%;
        height: auto;
        min-width: 150px;
        margin-right: 2rem;
        float: left;
        border-radius: 50%;
        -webkit-shape-outside: circle();
        shape-outside: circle();
    }

    .single-member-team {
        height: 100%;
        padding: 20px 10px;
        margin-bottom: 30px;
        background: rgb(2, 16, 33);
        box-shadow: 2px 3px 5px rgb(0 0 0 / 50%);
        /* box-shadow: 0 10px 25px 4px rgb(0 0 0 / 70%); */
        /* width: 325px; */
    }

    .single-member-team:before {
        position: absolute;
        content: '';
        left: 3px;
        top: -13px;
        width: 306px;
        height: 200px;
        border-width: 2px;
        border-bottom-style: none;
        border-top-style: solid;
        border-left-style: solid;
        border-image-slice: 1;
        border-image-source: linear-gradient(to bottom left, #0A3041, #23A6E0, rgba(0, 0, 0, 0));
    }

    .mb-3 {
        margin-bottom: 5rem;
    }

    .row-flex {
        display: flex;
        flex-wrap: wrap;
    }

    .mt-5 {
        margin-top: 55px;
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
        color: #CCA177;
        font-size: 1.05em;
        font-style: italic;
        text-decoration: none;
        position: relative;
        transition: all 0.2s;
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
    .bold-500{
        font-size: 1.9rem;
    }
    .support-all{
        color: rgb(196, 215, 228);
        text-align: center; 
    }
</style>
<!-- Start Intro Area -->
<div class="rev_slider_wrapper">
    <div class="rev_slider" data-version="5.0">
        <ul class="slotholder">
            <li data-transition="fade" data-thumb="{{asset('img/slider/h6.jpg')}}">

                <img src="{{asset('img/slider/h6.jpg')}}" alt="">
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
                    <!-- <a class="btn btn-default btn-lg" href="{{url('/')}}">Home</a> -->
                </div>
            </li>
        </ul>
    </div><!-- rev_slider -->
</div><!-- rev_slider_wrapper -->
<!-- End Intro Area -->
<div class="overlay-color" id="overlay"></div>
<div class="background-color">
    <div class="about-area page-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-content">
                        <h3>About Us</h3>
                        <p><b class="bold-500">Smart Traders</b> is a privately-owned capital management company incorporated in the
                            United Arab Emirates and licensed to trade financial instruments on regulated exchanges.
                            the company partner with large network of regulated trading brokers, financial advisers and
                            professional investment managers that are working from our trading floor centre in Dubai
                            and manage investment portfolio in different financial assets.
                            <br><br>
                            We plan to expand our trading centres globally in major cities such as United Kingdom,
                            U.S.A, Singapore and Canada. We choose to start with Dubai to establish our main
                            headquarter and trading Centre and create a hub of professional traders on the floor with a
                            pool of managed funds from different investors globally...
                        </p>
                        <div class="mt-3">
                            <a class="read-more white" href="{{url('about')}}">Read More</a>
                        </div>
                    </div>
                </div>
                <!-- column end -->
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-image">
                        <img src="img/about/ab2.jpg" alt="">
                        <div class="video-content">
                            <a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="play-btn video-play vid-zone">
                            </a>
                        </div>
                    </div>
                </div>
                <!-- column end -->
            </div>
        </div>
    </div>
    <!-- Start Invest area -->
    <div class="invest-area  area-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>The best investment plan</h3>
                        <!-- <p>Help agencies to define their new business objectives and then create professional software.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="pricing-content">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="pri_table_list">
                            <div class="top-price-inner">
                                <div class="rates">
                                    <span class="prices">5.01%</span><span class="users">3 years</span>
                                </div>
                                <span class="per-day">Quotery</span>
                            </div>
                            <ol class="pricing-text">
                                <li class="check">Annual Interest Rate : 20.04%</li>
                                <li class="check">Total Interest Return : 60.12%</li>
                            </ol>
                            <div class="price-btn blue">
                                <!-- <a class="blue" href="#">Deposite</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="pri_table_list">
                            <div class="top-price-inner">
                                <span class="base">Popular</span>
                                <div class="rates">
                                    <span class="prices">14.64%</span><span class="users">4 years</span>
                                </div>
                                <span class="per-day">Semi- Annualy</span>
                            </div>
                            <ol class="pricing-text">
                                <li class="check">Annual Interest Rate : 29.28%</li>
                                <li class="check">Total Interest Return : 117.12%</li>
                            </ol>
                            <div class="price-btn blue">
                                <!-- <a class="blue" href="#">Deposite</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="pri_table_list">
                            <span class="base">Best sale</span>
                            <div class="top-price-inner">
                                <div class="rates">
                                    <span class="prices">32.27%</span><span class="users">5 years</span>
                                </div>
                                <span class="per-day">Annualy</span>
                            </div>
                            <ol class="pricing-text">
                                <li class="check">Annual Interest Rate : 32.27%</li>
                                <li class="check">Total Interest Return : 161.35%</li>
                            </ol>
                            <div class="price-btn blue">
                                <!-- <a class="blue" href="#">Deposite</a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Invest area -->
    <!-- Start Support-service Area -->
    <div class="support-service-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Why Choose Us?</h3>
                        <!-- <p>Help agencies to define their new business objectives and then create professional software.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="support-all">
                    <!-- Start About -->
                    We use innovative approach in diversifying our portfolio and create sustainable income for
                    our investors. With our team of professional traders and financial analysts we help clients to
                    avoid risks of trading themselves and avoiding the risk of locking their capital in one asset
                    class, instead they gain both return from trading and estates as their principal remain intact
                    at the end of the contract.
                    We speculate on major markets based on the effects of global trades and the performance of
                    big businesses. When clients invest with us, they can rest assured that their Capital will
                    generate sustainable income in the long term to meet their goals.
                </div>
            </div>
        </div>
    </div>

    <!-- Start Banner Area -->
    <div class="banner-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="banner-all area-80 text-center">
                        <div class="banner-content">
                            <h3>Our investment plan world wide business relations for development</h3>
                            <a class="banner-btn" href="#">Learning More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->


    <!-- Start reviews Area -->
    <div class="reviews-area fix area-padding">
        <div class="container">
            <div class="row">
                <div class="reviews-top">
                    <div class="col-md-5 col-sm-5 col-xs-12">
                        <div class="testimonial-inner">
                            <div class="review-head">
                                <h3>Our customer say about our company work</h3>
                                <p>The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programmes can generate dummy. The phrasal sequence of the Lorem Ipsum text is now so widespread and commonplace that many DTP programmes can generate dummy</p>
                                <!-- <a class="reviews-btn" href="">More reviews</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-7 col-xs-12">
                        <div class="reviews-content">
                            <!-- start testimonial carousel -->
                            <div class="testimonial-carousel item-indicator">
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <div class="clients-text">
                                            <div class="client-rating">
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                            </div>
                                            <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                        </div>
                                        <div class="testi-img ">
                                            <img src="img/review/1.jpg" alt="">
                                            <div class="guest-details">
                                                <h4>Hamilton</h4>
                                                <span class="guest-rev">Clients - <a href="#">General customer</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <div class="clients-text">
                                            <div class="client-rating">
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                            </div>
                                            <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                        </div>
                                        <div class="testi-img ">
                                            <img src="img/review/2.jpg" alt="">
                                            <div class="guest-details">
                                                <h4>Angel lima</h4>
                                                <span class="guest-rev">Clients - <a href="#">General customer</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <div class="clients-text">
                                            <div class="client-rating">
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                            </div>
                                            <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                        </div>
                                        <div class="testi-img ">
                                            <img src="img/review/3.jpg" alt="">
                                            <div class="guest-details">
                                                <h4>Arthur Doil</h4>
                                                <span class="guest-rev">Clients - <a href="#">General customer</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End single item -->
                                <div class="single-testi">
                                    <div class="testi-text">
                                        <div class="clients-text">
                                            <div class="client-rating">
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                                <a href="#"><i class="ti-star"></i></a>
                                            </div>
                                            <p>When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection. help agencies.</p>
                                        </div>
                                        <div class="testi-img ">
                                            <img src="img/review/4.jpg" alt="">
                                            <div class="guest-details">
                                                <h4>Gabriel Hank</h4>
                                                <span class="guest-rev">Clients - <a href="#">General customer</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End single item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End reviews Area -->

    <!-- Start FAQ area -->
    <div class="faq-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>FAQ</h3>
                        <!-- <p>Help clients to define their new business objectives and then make professional trading.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Start Column Start -->
                <div class="col-md-12 col-sm-6 col-xs-12">
                    <div class="company-faq">
                        <div class="faq-full">
                            <div class="faq-details">
                                <div class="panel-group" id="accordion">
                                    <!-- Panel Default -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" class="active" data-parent="#accordion" href="#check1">
                                                    <span class="acc-icons"></span>How to successful our mission and vision
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check1" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <p>
                                                    <i class="fa fa-reply fa-rotate-180" aria-hidden="true"></i> &nbsp; When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                    <!-- Panel Default -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check2">
                                                    <span class="acc-icons"></span>Clients satisfaction make company Value.
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>
                                                    <i class="fa fa-reply fa-rotate-180" aria-hidden="true"></i> &nbsp; When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                    <!-- Panel Default -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check3">
                                                    <span class="acc-icons"></span>World class creative design and development firm.
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check3" class="panel-collapse collapse ">
                                            <div class="panel-body">
                                                <p>
                                                    <i class="fa fa-reply fa-rotate-180" aria-hidden="true"></i> &nbsp; When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                    <!-- Panel Default -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check4">
                                                    <span class="acc-icons"></span>We are the best online flatform
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check4" class="panel-collapse collapse ">
                                            <div class="panel-body">
                                                <p>
                                                    <i class="fa fa-reply fa-rotate-180" aria-hidden="true"></i> &nbsp; When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                    <!-- Panel Default -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check5">
                                                    <span class="acc-icons"></span>Clients satisfaction make company Value.
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check5" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>
                                                    <i class="fa fa-reply fa-rotate-180" aria-hidden="true"></i> &nbsp; When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                </div>
                            </div>
                            <!-- End FAQ -->
                        </div>
                    </div>
                </div>
                <!-- End Column -->
            </div>
        </div>
    </div>
    <!-- End FAQ area -->
    <!-- Our Team Area -->
    <div class="team-page-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center mt-5">
                        <h3>Our Board of Directors</h3>
                        <!-- <p>Help agencies to define their new business objectives and then create professional software.</p> -->
                    </div>
                </div>
            </div>
            <!-- <div id="videowrapper">
              <div id="fullScreenDiv"> -->
            <div class="row row-flex">
                <!-- Single team member -->
                <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                        <div class="single-member-team">
                            <div id="circle-shape-example">
                                <img src="{{asset('img/team/2.jpeg')}}" alt="A photograph of sliced kiwifruit on a while plate" class="curve">
                                <h3 class="titles-team">Steven Ndaula</h3>

                                <?php $descriction_3 = "Steven is the President and founder of the BCM Holdings. He is a professional master trader of online financial instruments with securities and investment accreditation from the Chartered Institute for Securities and Investment (CISI), and investments and trading certification from Knightsbridge Trading Academy and London Stock Exchange Group. He also trained in medicine and surgery with the International Medical and Technology University (IMTU) for 3 years. Steven has five (5) years of experience in trading online financial instruments such forex, stocks, indices, commodities, futures, and cryptocurrencies. He also has extensive experience in risk management, strategy, and long-term investments decision making. Steven is an astute entrepreneur who left medical profession to build a career in trading, and has established businesses in the UAE, Canada, South Africa, Tanzania, and Kenya. "; ?>
                                <p style="color: rgba(209, 228, 240);">
                                    {{ \Illuminate\Support\Str::limit($descriction_3, 200, '...') }}
                                </p>
                            </div>
                            <a class='animated-arrow' href="{{url('Steven/Ndaula')}}">
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
                    </div>
                <!-- Single team member -->
                <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                        <div class="single-member-team">
                            <div id="circle-shape-example">
                                <img src="{{asset('img/team/Picture5t.jpg')}}" alt="A photograph of sliced kiwifruit on a while plate" class="curve">
                                <h3 class="titles-team">Dr. Anthony Witherspoon </h3>

                                <?php $descriction_5 = "Anthony is a sought-after public speaker and owner of Sankofa Academy and Safeguard Insurance. In a historical accomplishment, he became Mayor of the City of Magnolia, Mississippi on July 1, 2014. He is a skilled administrative leader and consultant in both government and private sectors in the U.S. He previously served as the Vice President of the Mississippi State Conference of the NAACP, he was the President of the Mississippi Conference of Black Mayors, and the President of the Mississippi Black Caucus of Local Elected Officials. He was also a Board member of Beecham Memorial Hospital and Freedom Behavioral Health. He holds BSc in Business Administration and a Master’s degree in Public Administration from Belhaven University, and he has a Ph.D. from Jackson State University."; ?>
                                <p style="color: rgba(209, 228, 240);">
                                    {{ \Illuminate\Support\Str::limit($descriction_5, 200, '...') }}
                                </p>
                            </div>
                            <a class='animated-arrow' href="{{url('Anthnony/Witherspoon')}}">
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
                    </div>
                <!-- Single team member -->
                <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                        <div class="single-member-team">
                            <div id="circle-shape-example">
                                <img src="{{asset('img/team/1.jpeg')}}" alt="A photograph of sliced kiwifruit on a while plate" class="curve">
                                <h3 class="titles-team">Sylvanus Clemence.</h3>

                                <?php $descriction_4 = "Sylvanus is a co-founder and professional in finance
                                                        and accounting with postgraduate degree. Sylvanus also
                                                        trained in logistics for his masters degree and brings
                                                        experience in real estate and property management"; ?>
                                <p style="color: rgba(209, 228, 240);">
                                    {{ \Illuminate\Support\Str::limit($descriction_4, 200, '...') }}
                                </p>
                            </div>
                            <a class='animated-arrow' href="{{url('Ammer/Alhariri')}}">
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
                    </div>
            </div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="banner-all area-80 text-center">
                        <div class="banner-content">
                            <a class="banner-btn" href="{{url('team')}}">View All</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Our Team Area -->
</div>
<script>
    $(document).ready(function() {

        $(".owl-carousel").owlCarousel({

            autoPlay: 3000,
            items: 4,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 3],
            center: true,
            nav: true,
            loop: true,
            responsive: {
                600: {
                    items: 4
                }
            }

        });

    });
</script>
@endsection