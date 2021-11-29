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
    .rev_slider .slotholder:after, .rev_slider .slotholder:before{
 width: 100%;
 height: 100%;
 content: "";
 position: absolute;
 top: 0;
 pointer-events: none;
 background: radial-gradient( circle at top right, rgb( 0, 0, 0, 0.02) , rgb(2, 16, 33, .7) 60%)
}
.title-1{
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
</style>
<!-- Start breadcumb Area -->
<div class="rev_slider_wrapper">
    <div class="rev_slider" data-version="5.0">
        <ul class="slotholder">
            <li data-transition="fade" data-thumb="{{asset('img/background/b12.jpg')}}">

                <img src="{{asset('img/background/b12.jpg')}}" alt="">
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
                    <a class="btn btn-default btn-lg" href="{{'/services'}}">Home</a>
                </div>
            </li>
        </ul>
    </div><!-- rev_slider -->
</div><!-- rev_slider_wrapper -->
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