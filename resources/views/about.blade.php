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
        bottom: -45.8em;

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
    .text-left {
        color: #D4D8E3;
        padding-right: 15px;
        padding-bottom: 5px;
    }
    .slide-content{
        margin-top: -80px;
    }
</style>
<!-- Start breadcumb Area -->
<div class="slide-area-page fix" data-stellar-background-ratio="0.6">
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
                                <a href="{{url('signup')}}" class="ready-btn left-btn">Sign Up Now</a>
                            </div>
                        </div>
                        <!-- End Slider content -->
                    </div>
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
                            <p>We are a privately-owned capital management company built by a large network of 
                                regulated trading partners and professional investment managers that are working 
                                from our trading floor that manage investment portfolio in different financial assets. 
                                <br><br>
                            </p>
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
                                    <p>To become the best trading hub of financial instruments and traders’ floor who manage funds and risk associated in trading to achieve consistent profitable trades in global financial market. </p>
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
                                    <p>To harness traditional and new age opportunities and enhance the use of technology in creating innovative investment solutions that make our clients’ investment safe and earn above average market returns.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End About Area -->
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