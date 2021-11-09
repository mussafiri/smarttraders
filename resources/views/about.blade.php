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

    .mission-icon {
        display: block;
    }

    .mission-icon i {
        font-size: 40px;
        width: 110px;
        height: 110px;
        border: 1px solid #CCA177;
        display: inline-block;
        text-align: center;
        line-height: 80px;
        position: relative;
        top: -120px;
        background: #CCA177;
        color: #fff;
        border-radius: 50%;
        transition: 0.4s;
    }

    .mission-text {
        margin-top: -71px;
    }

    .about-feature-area {
        background-color: rgb(2, 16, 33, 0.89);
    }

    .titles-ab {
        font-size: 40px;
        font-weight: 700;
        color: #CCA177;
        padding-right: 10px;
        line-height: 40px;
    }

    .about-image .video-play.vid-zone {
        background: #BA9256;
        border-radius: 100%;
        display: inline-block;
        font-size: 34px;
        height: 100px;
        line-height: 96px;
        width: 100px;
        overflow: hidden;
        transition: 0.4s;
    }

    .about-image .video-play.vid-zone i {
        color: #fff;
        margin-left: 5px;
    }

    .about-image .video-play.vid-zone:hover {
        background: #fff;
        color: #BA9256;
        transition: 0.4s;
    }

    .row-flex {
        display: flex;
        flex-wrap: wrap;
    }


    /* vertical spacing between columns */

    .col-pad {
        margin-bottom: 90px;
    }

    .content {
        height: 100%;
        box-shadow: 0 5px 25px rgb(0 0 0 / 70%);
        border: 1px solid #ccc;
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
        top: 20em;
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
</style>
<!-- Start breadcumb Area -->
<div class="page-area">
    <div class="breadcumb-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb text-center">
                        <div class="row">
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
                </div>
            </div>
            <div class="mouse_scroll">
                <div class="mouse">
                    <div class="wheel"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb1 text-center">
        <ul class="breadcrumb-bg">
            <li class="home-bread"><a href="{{url('/')}}">Home</a></li>
            <li>About Us</li>
        </ul>
    </div>
</div>
<!-- End breadcumb Area -->
<!-- about-area start -->
<div class="overlay-color" id="overlay"></div>
<div class="background-color">
    <div class="background-color-1">
        <div class="about-area page-padding" style="background: rgb(2, 16, 33, 0.36);">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="about-image">
                            <img src="img/about/ab1.jpg" alt="">
                            <div class="video-content">
                                <a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play vid-zone">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- column end -->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="about-content">
                            <h3>About Us</h3>
                            <p>We are a private trading and investment company licensed to trade for proprietary account on regulated exchanges (DMCC),
                                by executing trades of different financial instruments such as FOREX, STOCKS, INDICES,
                                FUTURES AND COMODITIES as well as diversify its own capital in Real estates as one of asset management of the company.
                                <br><br>
                            </p>
                            <p id="read_more">
                                We use innovative approach in diversifying our portfolio and create sustainable income for our clients.
                                With all the ongoing uncertainty in the world of finance brought about by different variables,
                                one must seek alternatives that provide assurance and ease of mind. To provide this to our clients
                                We have professional traders in our floor dedicated to manage and trade company funds and generate sustainable income for the company. <br> <br>

                                We trade with regulated brokers with insurance of our trading accounts to avoid losses associated in in trading due to different environmental
                                factors. Investing can be time consuming and needs a lot of research and dedication, with our company, our clients have their
                                funds managed by our experts and professionals with minimal risk and safety.
                            </p>
                            <!-- <div class="about-details">
                                <ul class="marker-list">
									<li>The phrasal sequence of the Lorem Ipsum text.</li>
									<li>ducimus adipisci voluptas consectetur adipisicing.</li>
									<li>consectetur adipisicing elit praesentium maxime.</li>
									<li>programmes can generate dummy text using..</li>
								</ul>
                            </div> -->
                        </div>
                    </div>
                    <!-- column end -->
                </div>
            </div>
        </div>

        <!-- about-area end -->
        <!-- Start About Area -->
        <div class="about-feature-area  area-padding-2">
            <div class="container">
                <div class="row row-flex">
                    <div class="col-md-6 col-sm-6 col-xs-12 col-pad">
                        <div class="content colour-1">
                            <div class="mission-about">
                                <div class="mission-icon">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </div>
                                <div class="mission-text">
                                    <h4 class="titles-ab">Our Vision</h4>
                                    <p>We are committed to providing strategic investment solutions to stakeholders through our values of trust, respect, and fairness, commitment to excellence, innovation, and customer satisfaction. We believe that the key to success, both yours and ours is building long term relationships and to make it easy for investors who want to grow their portfolios in asset management such as real estates and other financial instruments as we manage risk and maintain sustainable income in long term. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 col-pad">
                        <div class="content colour-2">
                            <div class="mission-about">
                                <div class="mission-icon">
                                    <i class="fa fa-rocket" aria-hidden="true"></i>
                                </div>
                                <div class="mission-text">
                                    <h4 class="titles-ab">Our Mission</h4>
                                    <p>To become the best capital management bridge between individual or intuitional investors and the global online financial products offered by regulated brokers and managed by professional experts to grow our client’s investments in a way that harnesses traditional and new age opportunities that generate consistent profits. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area -->
        <!-- Start Feature Area -->
        <div class="feature-area  fix area-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="feature-content">
                            <div class="feature-images">
                                <img src="img/feature/f1.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="feature-text">
                            <h3>Your investment money more safe and secure</h3>
                            <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create. Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create. Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create. </p>

                            <a class="feature-btn" href="#">Get started now</a>
                        </div>
                    </div>
                </div>
                <div class="row margin-row">
                    <div class="col-md-6 col-sm-6 hidden-xs">
                        <div class="feature-text">
                            <h3>Risk free investment system of our policy</h3>
                            <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                            <ul>
                                <li><a href="#">Innovation idea latest business tecnology</a></li>
                                <li><a href="#">Digital content marketing online clients plateform</a></li>
                                <li><a href="#">Safe secure services for you online email account</a></li>
                            </ul>
                            <a class="feature-btn" href="#">Learn about more</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="overview-images">
                            <canvas id="bissChart" width="300" height="240"></canvas>
                        </div>
                    </div>
                    <!-- End Column -->
                    <div class="hidden-md hidden-lg hidden-sm col-xs-12">
                        <div class="feature-text">
                            <h3>Easily grow your business earn more money</h3>
                            <p>Replacing a maintains the amount of lines. When replacing a selection. help agencies to define their new business objectives and then create</p>
                            <ul>
                                <li><a href="#">Innovation idea latest business tecnology</a></li>
                                <li><a href="#">Digital content marketing online clients plateform</a></li>
                                <li><a href="#">Safe secure services for you online email account</a></li>
                            </ul>
                            <a class="feature-btn" href="#">Learn more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Feature Area -->
    </div>
</div>

<script>
    function showMore() {
        //shows the #more
        document.getElementById('read_more').style.display = "block";
        document.getElementById('link').style.display = "none";

    }
</script>
@endsection