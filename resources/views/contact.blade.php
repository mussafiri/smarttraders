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

    .text-left {
        color: #D4D8E3;
        padding-right: 15px;
        padding-bottom: 5px;
    }

    .slide-content {
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
		<div class="rev_slider"  data-version="5.0">
			<ul class="slotholder">
				<li data-transition="fade" data-thumb="{{asset('img/background/b11.jpg')}}">

					<img src="{{asset('img/background/b11.jpg')}}" alt="">
                    <div class="tp-caption rectangle-text" data-x="left" data-y="215" data-speed="700" data-start="1200" data-transform_in="o:0;x:-100;s:300;" data-transform_out="o:0;x:-100;s:300;">
					</div>

					<div class="tp-caption title-1" data-x="left" data-y="255" data-speed="700" data-start="1200" data-transform_in="o:0;x:-100;s:300;" data-transform_out="o:0;x:-100;s:300;" >
						Welcome To 
					</div>
                    <div class="tp-caption title-1" data-x="left" data-y="290" data-speed="700" data-start="1200" data-transform_in="o:0;x:-100;s:300;" data-transform_out="o:0;x:-100;s:300;" >
                        The Next Level
					</div>
                    <div class="tp-caption title-1 title-under" data-x="left" data-y="330" data-speed="700" data-start="1200" data-transform_in="o:0;x:-100;s:300;" data-transform_out="o:0;x:-100;s:300;" >
                       In <span style="color: #CBA274;">Trading</span>
					</div>
					<div class="tp-caption text" data-x="left" data-y="370" data-speed="700" data-start="1200" data-transform_in="o:0;x:-100;s:300;" data-transform_out="o:0;x:-100;s:300;" >
                    Take your trading to the next level with
					</div>
                    <div class="tp-caption text" data-x="left" data-y="390" data-speed="700" data-start="1200" data-transform_in="o:0;x:-100;s:300;" data-transform_out="o:0;x:-100;s:300;" >
                     the highest degree of automation for 
					</div>
                    <div class="tp-caption text" data-x="left" data-y="410" data-speed="700" data-start="1200" data-transform_in="o:0;x:-100;s:300;" data-transform_out="o:0;x:-100;s:300;" >
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
                        <!-- Start Left contact -->
                        <!-- End Left contact -->
                        <div class="col-md-6 col-sm-12">
                            <!-- Start Map -->
                            <div class="map-area">
                                <div id="googleMap" style="width:100%;height:330px;">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14455.886529443213!2d55.1394462!3d25.0689506!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x14407f6e062da70b!2sJLT%20Cluster%20C!5e0!3m2!1sen!2stz!4v1636372692614!5m2!1sen!2stz" width="560" height="370" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                            <!-- End Map -->
                        </div>
                        <div class="col-md-6 col-sm-12">
                            @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <strong>{{ $errors->first() }}</strong>
                            </div>
                            @endif
                            @if(session()->has('success'))
                            <div class="alert alert-success">
                                {{ session()->get('success') }}
                            </div>
                            @endif
                            <form method="POST" action="{{ action('contactUsController@contact_Us_emailSend') }}" class="contact-form">
                                @csrf
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" class="email form-control" name="email" placeholder="Email" required data-error="Please enter your email">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea name="texts" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                    <button type="submit" name="submit" class="add-btn contact-btn">Send Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Area -->
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(1000, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);
</script>
@endsection