@extends('layouts.main')

@section('content')
<style>
    #circle-shape-example {
        text-align: left;
        /* margin: 2rem; */
    }

    #circle-shape-example p {
        line-height: 1.8;
    }

    #circle-shape-example .curve {
        width: 43%;
        height: auto;
        min-width: 150px;
        margin-left: 2rem;
        float: right;
        border-radius: 50%;
        -webkit-shape-outside: circle();
        shape-outside: circle();
    }
    .single-member-team {
        height: 100%;
        padding: 20px 10px;
        margin-bottom: 30px;
        background: rgb(2, 16, 33, .82);
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
    border-image-source: linear-gradient(to bottom left, #0A3041, #23A6E0, rgba(0, 0, 0, 0) );
}

    .mb-3 {
        margin-bottom: 5rem;
    }

    .row-flex {
        display: flex;
        flex-wrap: wrap;
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

    .titles-team {
        color: #CCA177;
        font-weight: 500;
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
 #bg-area-overlay_slider {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    background-image: radial-gradient(circle at top right, #04619f, rgb(0, 0, 0) 55%);
    opacity: 0.8;
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
.sidebar-side {
    margin-bottom: 40px;
}
.sidebar-page-container .sidebar {
    position: relative;
    padding: 45px 45px 0px;
    border: 2px solid #f3f3f3;
}
.sidebar-page-container .sidebar.default-sidebar {
    border: none;
    padding: 0px;
}
.sidebar-widget {
    position: relative;
    margin-bottom: 40px;
}
.blog-cat {
    position: relative;
    /* border: 1px solid #C4C4C4; */
}
.blog-cat li a {
    position: relative;
    color: rgba(209, 228, 240);
    font-size: 14px;
    font-weight: 700;
    display: block;
    margin-bottom: 5px;
    padding: 18px 15px 18px 38px;
    border: 1px solid #C4C4C4;
    transition: all 500ms ease;
    border-radius: 10px;
    background: rgb(2, 16, 33, .62);
    -moz-transition: all 500ms ease;
    -webkit-transition: all 500ms ease;
    -ms-transition: all 500ms ease;
    -o-transition: all 500ms ease;
    font-family: 'Raleway', sans-serif;
}
.blog-cat li a:before {
    position: absolute;
    content: '\f105';
    right: 22px;
    top: 15px;
    color: rgba(209, 228, 240, .29);
    font-size: 18px;
    font-family: 'FontAwesome';
}
.blog-cat li.active a, .blog-cat li a:hover {
    color: #fff;
    background-color: rgba(209, 228, 240, .39);
    border: none;
}
.hide{
    display: none;
}
</style>
<!-- Start breadcumb Area -->
<div class="rev_slider_wrapper">
		<div class="rev_slider"  data-version="5.0">
			<ul class="slotholder">
				<li data-transition="fade" data-thumb="{{asset('img/background/b18.jpg')}}">

					<img src="{{asset('img/background/b18.jpg')}}" alt="">
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
<!-- Team area start -->
<div class="overlay-color" id="overlay"></div>
<div class="background-color">
    <div class="background-color-1">
        <div class="team-page-area page-padding-2" style="background: rgb(2, 16, 33, 0.36);">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center">
                            <h3>Our Board of Directors</h3>
                            <!-- <p>Help agencies to define their new business objectives and then create professional software.</p> -->
                        </div>
                    </div>
                </div>
                <div class="row row-flex">
                    <!-- Single team member -->
                    <!--Sidebar Side-->
                        <div class="sidebar-side col-md-4 col-sm-6 col-xs-12">
                            <aside class="sidebar default-sidebar">
                                   <!--Blog Category Widget-->
                                <div class="sidebar-widget sidebar-blog-category">
                                   <ul class="blog-cat">
                                        <li class="{{ Request::is('Saleh/Alzarooni') ? 'active' : '' }}"><a  href="{{url('Saleh/Alzarooni')}}">Saleh Ismail Alzarooni</a></li>
                                        <li class="{{ Request::is('Mike/Sallu') ? 'active' : '' }}"><a  href="{{url('Mike/Sallu')}}">Mike Sallu</a></li>
                                        <li class="{{ Request::is('Steven/Ndaula') ? 'active' : '' }}"><a href="{{url('Steven/Ndaula')}}">Steven Ndaula</a></li>
                                        <li class="{{ Request::is('Ammer/Alhariri') ? 'active' : '' }}"><a href="{{url('Ammer/Alhariri')}}">Ammer Alhariri</a></li>
                                        <li class="{{ Request::is('Anthnony/Witherspoon') ? 'active' : '' }}"><a href="{{url('Anthnony/Witherspoon')}}">Dr. Anthony Witherspoon</a></li>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    <!-- Single team member -->
                    <div class="col-md-8 col-sm-12 col-xs-12 mb-3">
                        <div class="single-member-team ">
                            <div id="circle-shape-example">
                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/kiwifruit-on-a-plate.jpg" alt="A photograph of sliced kiwifruit on a while plate" class="curve">
                                <h3 class="titles-team">Mike Sallu</h3>
                                <?php $descriction_2 = "Mike is the Deputy Chairman of BCM Holdings. He is a Fellow Certified Public Accountant and holds BCom and MA degrees. He is a renowned consultant and a multiskilled business leader, and he possesses significant experience of leading the board agenda. In addition to being the deputy chairman of BCM Holdings, he is the Chairman of UAP Insurance Kenya Limited, Ecobank Tanzania Limited, and Claritas International. He also sits on the boards of UAP Insurance Tanzania, UAP Insurance Rwanda, and Geno Services Limited. Previously, Michael worked for PricewaterhouseCoopers (PwC) for 24 years. He served 15 of those years as Partner and Director, and he was a Governance Board Member of PwC Africa and PwC Africa Central for a combined period of 6 years."; ?>
                                <p style="color: rgba(209, 228, 240);">
                                    {{$descriction_2 }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--End Single team member -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team area end -->
@endsection