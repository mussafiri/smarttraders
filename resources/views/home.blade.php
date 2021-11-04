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

#overlay,#cc{
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
    
</style>
<!-- Start Intro Area -->
<div class="slide-area fix" data-stellar-background-ratio="0.6">
    <div class="display-table">
        <div class="display-table-cell">
            <div id="cc"></div>
            <div class="container">
                <div class="row" style="margin-top: 3em;">
                    <div class="col-md-4 col-sm-6 col-xs-12">
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
            <div class="d-sm-none d-md-none" id="triangle-up"></div>
        </div>
    </div>
</div>
<!-- End Intro Area -->
<div class="overlay-color" id="overlay"></div>
    <div class="background-color">
    <div class="counter-area fix area-padding-2">
        <div class="container">
            <!-- Start counter Area -->
            <div class="row">
                <div class="fun-content">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <!-- fun_text  -->
                        <div class="fun_text">
                            <span class="counter-icon"><i class="flaticon-034-reward"></i></span>
                            <span class="counter">2209</span>
                            <h4>Total Members</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <!-- fun_text  -->
                        <div class="fun_text">
                            <span class="counter-icon"><i class="flaticon-034-reward"></i></span>
                            <span class="counter">2209</span>
                            <h4>Total Members</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <!-- fun_text  -->
                        <div class="fun_text">
                            <span class="counter-icon"><i class="flaticon-016-graph"></i></span>
                            <span class="counter">$3974544</span>
                            <h4>Total Payments</h4>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <!-- fun_text  -->
                        <div class="fun_text">
                            <span class="counter-icon"><i class="flaticon-043-world"></i></span>
                            <span class="counter">80</span>
                            <h4>World Country</h4>
                        </div>
                    </div>
                </div>
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
                                <span class="per-day">10 days</span>
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
                                <span class="per-day">30 days</span>
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
                                <span class="per-day">45 days</span>
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
                                <span class="per-day">60 days</span>
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
    <div class="support-service-area fix area-padding-2">
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
                            <a class="support-images" href="#"><i class="flaticon-023-management"></i></a>
                            <div class="support-content">
                                <h4>Expert management</h4>
                                <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start About -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="support-services ">
                            <a class="support-images" href="#"><i class="flaticon-036-security"></i></a>
                            <div class="support-content">
                                <h4>Secure investment</h4>
                                <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="support-services ">
                            <a class="support-images" href="#"><i class="flaticon-003-approve"></i></a>
                            <div class="support-content">
                                <h4>Registered company</h4>
                                <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="support-services">
                            <a class="support-images" href="#"><i class="flaticon-042-wallet"></i></a>
                            <div class="support-content">
                                <h4>Instant withdrawal</h4>
                                <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="support-services ">
                            <a class="support-images" href="#"><i class="flaticon-032-report"></i></a>
                            <div class="support-content">
                                <h4>Verified security</h4>
                                <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start services -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="support-services">
                            <a class="support-images" href="#"><i class="flaticon-024-megaphone"></i></a>
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
    <div class="work-proses fix  area-padding-2">
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
                            </div>
                            <!-- End column -->
                            <div class="col-md-4 col-sm-4 col-xs-12">
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
                            </div>
                            <!-- End column -->
                            <div class="col-md-4 col-sm-4 col-xs-12">
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
                            </div>
                            <!-- End column -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Work proses Area -->
    <!--Start payment-history area -->
    <div class="payment-history-area  fix area-padding-2">
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
    </div>
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
    <div class="faq-area  area-padding">
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
                                                    When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
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
                                                    When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
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
                                                    When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
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
                                                    When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
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
                                                    When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
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
</div>
</div>
@endsection