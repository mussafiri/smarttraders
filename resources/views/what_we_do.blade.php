@extends('layouts.main')

@section('content')
<style>
    .background-color {
        background: rgb(2, 16, 33, 0.82);
    }

    .background-color-1 {
        background-color: rgb(2, 16, 33, 0.79);
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
</style>
<!-- Start breadcumb Area -->
<div class="rev_slider_wrapper">
    <div class="rev_slider" data-version="5.0">
        <ul class="slotholder">
            <li data-transition="fade" data-thumb="{{asset('img/background/b11.jpg')}}">

                <img src="{{asset('img/background/b11.jpg')}}" alt="">
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
<!-- End breadcumb Area -->
<!-- about-area start -->
<div class="background-color">
    <div class="background-color-1">
        <div class="about-feature-area area-padding-2">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>What We Do</h3>
                        <!-- <p>Help agencies to define their new business objectives and then create professional software.</p> -->
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <!-- column end -->
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="about-content">
                            <p>We use innovative approach in diversifying our portfolio and create sustainable income for our investors. 
                               We trade in CFDs (Contracts for Difference), forex, indices, shares, commodities, treasuries, and ETFs, 
                               along with ETFs (exchange-traded funds) trading for Proprietary account on regulated exchanges.
                               We speculate on major markets based on the effects of global trades and the performance of big businesses. 
                               When you invest with us, you can rest assured that your funds will generate sustainable income in long term 
                               to meet your goals and needs.
                               <br><br>
                               We partner with Century Financial which has over with 30 years of market presence, as our professional 
                               financial market analysts and risk managers.  We partner with different regulated and reputable trading 
                               brokers to access different financial instruments. 
                            </p>
                        </div>
                    </div>
                    <!-- column end -->


                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="about-image">
                            <img src="img/about/ab.jpg" alt="">
                            <div class="video-content">
                                <a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play vid-zone">
                                    <i class="fa fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- about-area end -->
            <!-- Start About Area -->
            <div class="container">
                <div class="row">
                    <div class="about-mission">
                        <!-- Start column -->
                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <div class="about-details">
                                <h3>Our Trading Brokers and Insurance Policy</h3>
                                <ul class="marker-list">
                                    <li>INFINOX CAPITAL: A globally recognized FX & CFD broker, regulated since 2009 with trading insurers of ARCH Syndicate 2012 at Lloyd’s of London. </li>
                                    <li>SAXO BANK: Is a Danish investment bank specializing in online trading and investment. Protection of securities in case of Saxo Bank’s Default:
                                        All securities held with Saxo Bank will be returned to the White Label Client if they are retrievable from Saxo Bank’s custodian.
                                        <br> <br>
                                        That the securities are retrievable is ensured by the requirement of section 72 of the Danish Act on Financial Services, which imposes on Danish banks to ensure that, the client’s rights to their securities are at all times protected, also in case of a default.
                                    </li>
                                    <li>PEPPERSTONE: A regulated by the British Financial Conduct Authority (FCA) and the Australian Securities and Investments Commission (ASIC). Pepperstone strictly separates customer capital and company funds. This means that customers are insured against major losses even in the unlikely event that the company goes bankrupt.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End About Area -->
@endsection