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
        background: white;
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
        bottom: -45.8em;
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
    .page-padding{
        padding: 120px 0px 110px;
    }
</style>
<!-- Start Intro Area -->
<div class="slide-area fix" data-stellar-background-ratio="0.6">
    <div class="display-table">
        <div class="display-table-cell">
            <div id="cc"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <!-- Start Slider content -->
                        <div class="slide-content text-left">
                            <h2 class="title2">Welcome to the next level in <span style="color: #CBA274;">Trading</span></h2>
                            <div class="layer-1-3">
                                <p class="text-left">Take your trading to the next level with the highest degree of automation for your charting.</p>
                            </div>
                            <div class="layer-1-3">
                                <a href="{{url('/')}}" class="ready-btn left-btn">Register Now</a>
                            </div>
                        </div>
                        <!-- End Slider content -->
                    </div>
                </div>
            </div>

            <div class="mouse_scroll">

                <div class="mouse">
                    <div class="wheel"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Intro Area -->
<div class="overlay-color" id="overlay"></div>
<div class="background-color">
    <div class="about-area page-padding" style="background: rgb(2, 16, 33, 0.36);">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="about-content">
                        <h3>About Us</h3>
                        <p>We are a private trading and investment company licensed to trade for proprietary account on regulated exchanges (DMCC),
                            by executing trades of different financial instruments such as FOREX, STOCKS, INDICES,
                            FUTURES AND COMODITIES as well as diversify its own capital in Real estates as one of asset management of the company.
                            <br><br>
                            We use innovative approach in diversifying our portfolio and create sustainable income for our clients.
                            With all the ongoing uncertainty in the world of finance brought about by different variables,
                            one must seek alternatives that provide assurance and ease of mind. To provide this to our clients ...
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
                        <p>Help agencies to define their new business objectives and then create professional software.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="pricing-content">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="pri_table_list">
                            <div class="top-price-inner">
                                <div class="rates">
                                    <span class="prices">5%</span><span class="users">Daily</span>
                                </div>
                                <span class="per-day">Monthly</span>
                            </div>
                            <ol class="pricing-text">
                                <li class="check">Minimam Invest : $100</li>
                                <li class="check">Maximam Invest : $1000</li>
                                <li class="check">Avarage Monthly : 50% </li>
                            </ol>
                            <div class="price-btn blue">
                                <a class="blue" href="#">Deposite</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="pri_table_list">
                            <div class="top-price-inner">
                                <div class="rates">
                                    <span class="prices">15%</span><span class="users">Daily</span>
                                </div>
                                <span class="per-day">Quotery</span>
                            </div>
                            <ol class="pricing-text">
                                <li class="check">Minimam Invest : $1000</li>
                                <li class="check">Maximam Invest : $10000</li>
                                <li class="check">Avarage Monthly :100% </li>
                            </ol>
                            <div class="price-btn blue">
                                <a class="blue" href="#">Deposite</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="pri_table_list">
                            <div class="top-price-inner">
                                <span class="base">Popular</span>
                                <div class="rates">
                                    <span class="prices">50%</span><span class="users">Daily</span>
                                </div>
                                <span class="per-day">Semi- Annualy</span>
                            </div>
                            <ol class="pricing-text">
                                <li class="check">Minimam Invest : $1000</li>
                                <li class="check">Maximam Invest : $50000</li>
                                <li class="check">Avarage Monthly : 200% </li>
                            </ol>
                            <div class="price-btn blue">
                                <a class="blue" href="#">Deposite</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="pri_table_list">
                            <span class="base">Best sale</span>
                            <div class="top-price-inner">
                                <div class="rates">
                                    <span class="prices">100%</span><span class="users">Daily</span>
                                </div>
                                <span class="per-day">Annualy</span>
                            </div>
                            <ol class="pricing-text">
                                <li class="check">Minimam Invest : $1000</li>
                                <li class="check">Maximam Invest : $50000</li>
                                <li class="check">Avarage Monthly : 250% </li>
                            </ol>
                            <div class="price-btn blue">
                                <a class="blue" href="#">Deposite</a>
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
                        <h3>Why choose investment plan</h3>
                        <p>Help agencies to define their new business objectives and then create professional software.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="support-all">
                    <!-- Start About -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="support-services wow ">
                            <a class="support-images" href="#"><i class="flaticon-023-management font-weight-600"></i></a>
                            <div class="support-content">
                                <h4>Expert management</h4>
                                <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start About -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="support-services ">
                            <a class="support-images" href="#"><i class="flaticon-036-security font-weight-600"></i></a>
                            <div class="support-content">
                                <h4>Secure investment</h4>
                                <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="support-services ">
                            <a class="support-images" href="#"><i class="flaticon-003-approve font-weight-600"></i></a>
                            <div class="support-content">
                                <h4>Registered company</h4>
                                <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="support-services">
                            <a class="support-images" href="#"><i class="flaticon-042-wallet font-weight-600"></i></a>
                            <div class="support-content">
                                <h4>Instant withdrawal</h4>
                                <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="support-services ">
                            <a class="support-images" href="#"><i class="flaticon-032-report font-weight-600"></i></a>
                            <div class="support-content">
                                <h4>Verified security</h4>
                                <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="support-services">
                            <a class="support-images" href="#"><i class="flaticon-024-megaphone font-weight-600"></i></a>
                            <div class="support-content">
                                <h4>Live customer support</h4>
                                <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Support-service Area -->
    <!-- Start Work proses Area -->
    <!-- <div class="work-proses fix  area-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Referral bonus level</h3>
                        <p>Help agencies to define their new business objectives and then create professional software.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="work-proses-inner text-center">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-proses">
                                    <div class="proses-content">
                                        <div class="proses-icon point-blue">
                                            <span class="point-view">01</span>
                                            <a href="#"><i class="ti-briefcase"></i></a>
                                        </div>
                                        <div class="proses-text">
                                            <h4>Level 01 instant 30% commission</h4>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
    <!-- End column -->
    <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-proses">
                                    <div class="proses-content">
                                        <div class="proses-icon point-orange">
                                            <span class="point-view">02</span>
                                            <a href="#"><i class="ti-layers"></i></a>
                                        </div>
                                        <div class="proses-text">
                                            <h4>Level 02 instant 20% commission</h4>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
    <!-- End column -->
    <!-- <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="single-proses last-item">
                                    <div class="proses-content">
                                        <div class="proses-icon point-green">
                                            <span class="point-view">03</span>
                                            <a href="#"><i class="ti-bar-chart-alt"></i></a>
                                        </div>
                                        <div class="proses-text">
                                            <h4>Level 03 instant 10% commission</h4>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
    <!-- End column -->
    <!-- </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End Work proses Area -->
    <!--Start payment-history area -->
    <!-- <div class="payment-history-area  fix area-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Deposite and withdrawals history</h3>
                        <p>Help agencies to define their new business objectives and then create professional software.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="deposite-content">
                        <div class="diposite-box">
                            <h4>Last deposite</h4>
                            <span><i class="flaticon-005-savings"></i></span>
                            <div class="deposite-table">
                                <table>
                                    <tr>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Currency</th>
                                    </tr>
                                    <tr>
                                        <td>Admond sayhel</td>
                                        <td>Jan 02, 2020</td>
                                        <td>$1000</td>
                                        <td>Bitcoin</td>
                                    </tr>
                                    <tr>
                                        <td>Jonshon</td>
                                        <td>Dec 12, 2019</td>
                                        <td>$5000</td>
                                        <td>USD</td>
                                    </tr>
                                    <tr>
                                        <td>Hopper</td>
                                        <td>Dec 22, 2019</td>
                                        <td>$4000</td>
                                        <td>Ripple</td>
                                    </tr>
                                    <tr>
                                        <td>Admond sayhel</td>
                                        <td>Jan 02, 2020</td>
                                        <td>$3000</td>
                                        <td>Bitcoin</td>
                                    </tr>
                                    <tr>
                                        <td>Anjel july</td>
                                        <td>Jan 05, 2020</td>
                                        <td>$500</td>
                                        <td>USD</td>
                                    </tr>
                                    <tr>
                                        <td>Lagisha</td>
                                        <td>Jan 12, 2020</td>
                                        <td>$5000</td>
                                        <td>Bitcoin</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="deposite-content">
                        <div class="diposite-box">
                            <h4>Last withdrawals</h4>
                            <span><i class="flaticon-042-wallet"></i></span>
                            <div class="deposite-table">
                                <table>
                                    <tr>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Currency</th>
                                    </tr>
                                    <tr>
                                        <td>Arnold</td>
                                        <td>Jan 04, 2020</td>
                                        <td>$1000</td>
                                        <td>USD</td>
                                    </tr>
                                    <tr>
                                        <td>Jhon Abra</td>
                                        <td>Jan 07, 2020</td>
                                        <td>$6000</td>
                                        <td>USD</td>
                                    </tr>
                                    <tr>
                                        <td>Lanisha</td>
                                        <td>Jan 13, 2020</td>
                                        <td>$5000</td>
                                        <td>USD</td>
                                    </tr>
                                    <tr>
                                        <td>Gongales</td>
                                        <td>Jan 12, 2020</td>
                                        <td>$2000</td>
                                        <td>USD</td>
                                    </tr>
                                    <tr>
                                        <td>Admond sayhel</td>
                                        <td>Jan 10, 2020</td>
                                        <td>$1000</td>
                                        <td>USD</td>
                                    </tr>
                                    <tr>
                                        <td>Remond</td>
                                        <td>Jan 02, 2020</td>
                                        <td>$3000</td>
                                        <td>USD</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End payment-history area -->
    <!-- Start Banner Area -->
    <div class="banner-area area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="banner-all area-80 text-center">
                        <div class="banner-content">
                            <h3>Our investment plan world wide business relations for development</h3>
                            <a class="banner-btn" href="#">Sign up now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area -->
    <!-- Start Blog Area-->
    <!-- <div class="blog-area fix  area-padding-2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Global investment plan news</h3>
                        <p>Dummy text is also used to demonstrate the appearance of different typefaces and layouts</p>
                    </div>
                </div>
            </div> -->
    <!-- <div class="row">
                <div class="blog-grid home-blog"> -->
    <!-- Start single blog -->
    <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a class="image-scale" href="#">
                                    <img src="img/blog/b1.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="admin-type">
                                        <i class="fa fa-user"></i>
                                        Admin
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>
                                        20 july, 2019
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        13
                                    </span>
                                </div>
                                <a href="#">
                                    <h4>Creative design clients response is better</h4>
                                </a>
                            </div>
                        </div>
                    </div> -->
    <!-- End single blog -->
    <!-- Start single blog -->
    <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="admin-type">
                                        <i class="fa fa-user"></i>
                                        Admin
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>
                                        13 may, 2018
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        16
                                    </span>
                                </div>
                                <a href="#">
                                    <h4>Web development is a best work in future world</h4>
                                </a>
                            </div>
                            <div class="blog-image">
                                <a class="image-scale" href="#">
                                    <img src="img/blog/b2.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a class="image-scale" href="#">
                                    <img src="img/blog/b3.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="admin-type">
                                        <i class="fa fa-user"></i>
                                        Admin
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>
                                        24 april, 2019
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        07
                                    </span>
                                </div>
                                <a href="#">
                                    <h4>You can trust me and business with together</h4>
                                </a>
                            </div>
                        </div>
                    </div> -->
    <!-- End single blog -->
    <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="admin-type">
                                        <i class="fa fa-user"></i>
                                        Admin
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>
                                        28 june, 2019
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        32
                                    </span>
                                </div>
                                <a href="#">
                                    <h4>business man want to be benifit any way</h4>
                                </a>
                            </div>
                            <div class="blog-image">
                                <a class="image-scale" href="#">
                                    <img src="img/blog/b4.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div> -->
    <!-- End single blog -->
    <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-image">
                                <a class="image-scale" href="#">
                                    <img src="img/blog/b5.jpg" alt="">
                                </a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="admin-type">
                                        <i class="fa fa-user"></i>
                                        Admin
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>
                                        28 june, 2019
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        32
                                    </span>
                                </div>
                                <a href="#">
                                    <h4>business man want to be benifit any way</h4>
                                </a>
                            </div>
                        </div>
                    </div> -->
    <!-- End single blog -->
    <!-- <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <span class="admin-type">
                                        <i class="fa fa-user"></i>
                                        Admin
                                    </span>
                                    <span class="date-type">
                                        <i class="fa fa-calendar"></i>
                                        28 june, 2019
                                    </span>
                                    <span class="comments-type">
                                        <i class="fa fa-comment-o"></i>
                                        32
                                    </span>
                                </div>
                                <a href="#">
                                    <h4>business man want to be benifit any way</h4>
                                </a>
                            </div>
                            <div class="blog-image">
                                <a class="image-scale" href="#">
                                    <img src="img/blog/b6.jpg" alt="">
                                </a>
                            </div>
                        </div>
                    </div> -->
    <!-- End single blog -->
    <!-- </div>
            </div> -->
    <!-- End row -->
    <!-- </div>
    </div> -->
    <!-- End Blog Area -->
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
                                <a class="reviews-btn" href="">More reviews</a>
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
                        <p>Help clients to define their new business objectives and then make professional trading.</p>
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
    <div class="team-page-area page-padding-team">
        <video id="video" role="presentation" preload="auto" playsinline="" crossorigin="anonymous" loop="true" muted="" autoplay="true" class="blur">
            <source src="img/background/board2.mp4" type="video/webm">
            <source src="/img/background/board2.mp4" type="video/mp4">
        </video>
        <div class="overlay-team">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="text-center">
                            <h3>Our Board Directors</h3>
                            <p>Help agencies to define their new business objectives and then create professional software.</p>
                        </div>
                    </div>
                </div>
                <!-- <div id="videowrapper">
           <div id="fullScreenDiv"> -->
                <div class="row" class="styling">
                    <div class="team-member text-center">
                        <div class="team-carousel item-indicator">
                            <!-- Single team member -->
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="img/team/t2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h5><a href="#">Benjamin Mokobane</a></h5>
                                    <p>Director Operations <br>South African</p>
                                    <ul class="team-hover">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Single team member -->
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="img/team/t3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h5><a href="#">Gration Kamugisha</a></h5>
                                    <p>Director Operations <br>Canada</p>
                                    <ul class="team-hover">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Single team member -->
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="img/team/t4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h5><a href="#">Martin Tairo</a></h5>
                                    <p>Director Operations <br>Kenya</p>
                                    <ul class="team-hover">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Single team member -->
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="img/team/t1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h5><a href="#">Emmanuel Magashi</a></h5>
                                    <p>Director:<br>Trade And Investments</p>
                                    <ul class="team-hover">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Single team member -->
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="img/team/t2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h5><a href="#">Tumpe Daudi</a></h5>
                                    <p>Director:<br>Sales And Marketing</p>
                                    <ul class="team-hover">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Single team member -->
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="img/team/t3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h5><a href="#">Rev.Joseph A. Maseght</a></h5>
                                    <p>Director:<br>Corporate Relations</p>
                                    <ul class="team-hover">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Single team member -->
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="img/team/t4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h5><a href="#">Sylvanus Clemence</a></h5>
                                    <p>Director:<br>asset Management</p>
                                    <ul class="team-hover">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Single team member -->
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="img/team/t4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h5><a href="#">Ahmed A.S Mkwawa</a></h5>
                                    <p>Director:<br>Operations</p>
                                    <ul class="team-hover">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Single team member -->
                            <div class="single-member">
                                <div class="team-img">
                                    <a href="#">
                                        <img src="img/team/t1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="team-content">
                                    <h5><a href="#">Steve Ndaula</a></h5>
                                    <p>Managing Director</p>
                                    <ul class="team-hover">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                            </div>
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