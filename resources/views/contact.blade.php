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
        bottom: -18.8em;
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
                        <ul class="breadcrumb-bg">
                            <li class="home-bread"><a href="{{url('/')}}">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End breadcumb Area -->
<!-- Start contact Area -->
<div class="overlay-color" id="overlay"></div>
<div class="background-color">
    <div class="background-color-1">
            <div class="contact-area page-padding">
                <div class="container">
                    <div class="row">
                        <div class="contact-inner">
                            <!-- Start contact icon column -->
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="contact-icon text-center">
                                    <div class="single-icon">
                                        <i class="fa fa-mobile"></i>
                                        <p>
                                            Call : +971-585-138-862<br>
                                            <span>Monday-Friday (10am-18pm)</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Start contact icon column -->
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="contact-icon text-center">
                                    <div class="single-icon">
                                        <i class="fa fa-envelope-o"></i>
                                        <p>
                                            Email : info@smarttraders.aed<br>
                                            <span>Web: www.rockstheme.com</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Start contact icon column -->
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="contact-icon text-center">
                                    <div class="single-icon">
                                        <i class="fa fa-map-marker"></i>
                                        <p>
                                            Location : Dubai JLT Cluster C Floor 10<br>
                                            <span>Address : Smart Traders BMCC, Dubai</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <!-- Start Map -->
                            <div class="map-area">
                                <div id="googleMap" style="width:100%;height:380px;"></div>
                            </div>
                            <!-- End Map -->
                        </div>
                        <!-- Start Left contact -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="contact-form">
                                <div class="row">
                                    <form id="contactForm" method="POST" action="contact.php" class="contact-form">
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                            <button type="submit" id="submit" class="add-btn contact-btn">Send Message</button>
                                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- End Left contact -->
                    </div>
                </div>
            </div>
    </div>
</div>    
<!-- End Contact Area -->
@endsection