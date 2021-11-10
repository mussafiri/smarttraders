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
        bottom: -49.8em;
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
        text-transform: uppercase;
        font-size: 12px;
        line-height: 2.06rem;
        letter-spacing: 1.5px;
        color: rgb(157, 195, 218, 0.77);
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
        height: 70vh;
    }

    .sub-title-sm {
        font-size: 26px;
        color: #CCA177;
    }

    .white {
        color: #fff;
    }

    .row-flex {
        display: flex;
        flex-wrap: wrap;
    }


    /* vertical spacing between columns */

    .col-pad{
        margin-bottom: 30px;
    }

    .content {
        height: 100%;
        padding: 20px 20px 10px;
        box-shadow: 0 5px 25px rgb(0 0 0 / 70%);
        border: 1px solid #CCA177;
    }
  
    .slide-content {
        top: 15em;
    }
</style>
<!-- Start breadcumb Area -->
<div class="page-area">
    <div class="breadcumb-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <!-- Start Slider content -->
                    <div class="slide-content text-left">
                        <h2 class="title2">Welcome to the next level in <span style="color: #CBA274;">Trading</span></h2>
                        <div class="layer-1-3">
                            <p class="text-left">Take your trading to the next level with the highest degree of automation for your charting.</p>
                        </div>
                        <div class="layer-1-3">
                        <a href="{{url('signup')}}" class="ready-btn left-btn">Sign Up Now</a>
                        </div>
                    </div>

                    <!-- End Slider content -->
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb1 text-center">
        <ul class="breadcrumb-bg">
            <li class="home-bread"><a href="{{url('/')}}">Home</a></li>
            <li>Traded Products</li>
        </ul>
    </div>
</div>
<!-- End breadcumb Area -->
<!-- Start Invest area -->
<div class="overlay-color" id="overlay"></div>
<div class="background-color">
    <div class="background-color-1">
        <div class="invest-area  page-padding-2" style="background: rgb(2, 16, 33, 0.36);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="mission-about">
                            <div class="mission-icon">
                                <i class=""></i>
                            </div>
                            <div class="mission-text">
                                <h3 class="title-bg">Steve Ndaula</h3>
                                <h5 class="title-sm">Managing Director</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <p>WITH ALL THE UNCERTAINTY GOING ON IN THE WORLD OF FINANCE, ONE MUST SEEK BETTER ALTERNA - TIVES THAT ARE CAPABLE OF PROVIDING ASSURANCE AND EASE OF MIND. WE WORK WITH SEASONED FINANCIAL EXPERTS TO GROW OUR CLIENTELE'S INVESTMENTS IN A WAY THAT HARNESSES TRADITIONAL AND NEW AGE OPPORTUNITES THAT GENERATE CONSISTENT PROFITS.</p>
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
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 mt-5">
                            <div class="text-center">
                                <i class="fa fa-star fa-color te" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-11 col-sm-12 col-xs-12">
                            <div class="section-height">
                                <div class="text-left mt-6">
                                    <h6 class="sub-title-sm">Fast. Simple. Powerful. SmartTrader</h6>
                                    <p class="white">With automated Smart Tools, relevant data, widgets, and more. SmartTrader validates your trading decisions and gives you all of the information you need so you can execute trades with confidence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="invest-area  page-padding-2" style="background: rgb(2, 16, 33, 0.06);">
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
        </div>
    </div>
    <!-- End Invest area -->
    @endsection