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
        width: 33%;
        height: auto;
        min-width: 150px;
        margin-right: 2rem;
        float: left;
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
                    <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                        <div class="single-member-team">
                            <div id="circle-shape-example">
                                <img src="" alt="A photograph of sliced kiwifruit on a while plate" class="curve">
                                <h3 class="titles-team">Saleh Ismail Alzarooni</h3>
                                <?php $descriction_1 = "Saleh is the Chairman of BCM Holdings. He is a renowned Economist and a formidable leader with over 25 years of experience in leading various businesses. During this period, Saleh developed extensive business relations and network with several Gulf and African nations, investors, and moguls in both private and public sectors. Saleh has been working as the private office manager of His Excellence Sheikh Marwan Bin Mohammed Bin Rashid Al Maktoum for over two decades. In this capacity, Saleh works closely with His Highness and has conducted multiple successful business activities on behalf of His Excellence Sheikh Maktoum. His expansive diplomatic skills as well as his superlative attention to details has brought major success in many companies."; ?>
                                <p style="color: rgba(209, 228, 240);">
                                    {{ \Illuminate\Support\Str::limit($descriction_1, 200, '...') }}
                                </p>
                            </div>
                            <a class='animated-arrow' href="{{url('Saleh/Alzarooni')}}">
                                <span class='the-arrow -left'>
                                    <span class='shaft'></span>
                                </span>
                                <span class='main'>
                                    <span class='text'>
                                        Read More
                                    </span>
                                    <span class='the-arrow -right'>
                                        <span class='shaft'></span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- Single team member -->
                    <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                        <div class="single-member-team">
                            <div id="circle-shape-example">
                                <img src="{{asset('img/team/picture-11.jpg')}}" alt="A photograph of sliced kiwifruit on a while plate" class="curve">
                                <h3 class="titles-team">Mike Sallu</h3>
                                <?php $descriction_2 = "Mike is the Deputy Chairman of BCM Holdings. He is a Fellow Certified Public Accountant and holds BCom and MA degrees. He is a renowned consultant and a multiskilled business leader, and he possesses significant experience of leading the board agenda. In addition to being the deputy chairman of BCM Holdings, he is the Chairman of UAP Insurance Kenya Limited, Ecobank Tanzania Limited, and Claritas International. He also sits on the boards of UAP Insurance Tanzania, UAP Insurance Rwanda, and Geno Services Limited. Previously, Michael worked for PricewaterhouseCoopers (PwC) for 24 years. He served 15 of those years as Partner and Director, and he was a Governance Board Member of PwC Africa and PwC Africa Central for a combined period of 6 years."; ?>
                                <p style="color: rgba(209, 228, 240);">
                                    {{ \Illuminate\Support\Str::limit($descriction_2, 200, '...') }}
                                </p>
                            </div>
                            <a class='animated-arrow' href="{{url('Mike/Sallu')}}">
                                <span class='the-arrow -left'>
                                    <span class='shaft'></span>
                                </span>
                                <span class='main'>
                                    <span class='text'>
                                        Read More
                                    </span>
                                    <span class='the-arrow -right'>
                                        <span class='shaft'></span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- Single team member -->
                    <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                        <div class="single-member-team">
                            <div id="circle-shape-example">
                                <img src="" alt="A photograph of sliced kiwifruit on a while plate" class="curve">
                                <h3 class="titles-team">Steven Ndaula</h3>

                                <?php $descriction_3 = "Steven is the President and founder of the BCM Holdings. He is a professional master trader of online financial instruments with securities and investment accreditation from the Chartered Institute for Securities and Investment (CISI), and investments and trading certification from Knightsbridge Trading Academy and London Stock Exchange Group. He also trained in medicine and surgery with the International Medical and Technology University (IMTU) for 3 years. Steven has five (5) years of experience in trading online financial instruments such forex, stocks, indices, commodities, futures, and cryptocurrencies. He also has extensive experience in risk management, strategy, and long-term investments decision making. Steven is an astute entrepreneur who left medical profession to build a career in trading, and has established businesses in the UAE, Canada, South Africa, Tanzania, and Kenya. "; ?>
                                <p style="color: rgba(209, 228, 240);">
                                    {{ \Illuminate\Support\Str::limit($descriction_3, 200, '...') }}
                                </p>
                            </div>
                            <a class='animated-arrow' href="{{url('Steven/Ndaula')}}">
                                <span class='the-arrow -left'>
                                    <span class='shaft'></span>
                                </span>
                                <span class='main'>
                                    <span class='text'>
                                        Read More
                                    </span>
                                    <span class='the-arrow -right'>
                                        <span class='shaft'></span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- Single team member -->
                    <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                        <div class="single-member-team">
                            <div id="circle-shape-example">
                                <img src="{{asset('img/team/Picture2.jpg')}}" alt="A photograph of sliced kiwifruit on a while plate" class="curve">
                                <h3 class="titles-team">Ameer Alhariri</h3>

                                <?php $descriction_4 = "Ameer is a Registered Arbitrator in the UAE since 2010, and he is the owner of Bait Aljouda Consultation and Training (BACT). He holds a BSc in Law from the University of Damascus, Syria. Among other things, BACT is a Training Center in Dubai with KHDA educational permit and provides many courses in different fields. BACT is also recognized provider by UK awarding body to deliver TQUK qualification, and as a registered agent for trademark in UAE, it works with many agents worldwide in registration of trademarks in deferent countries."; ?>
                                <p style="color: rgba(209, 228, 240);">
                                    {{ \Illuminate\Support\Str::limit($descriction_4, 200, '...') }}
                                </p>
                            </div>
                            <a class='animated-arrow' href="{{url('Ammer/Alhariri')}}">
                                <span class='the-arrow -left'>
                                    <span class='shaft'></span>
                                </span>
                                <span class='main'>
                                    <span class='text'>
                                        Read More
                                    </span>
                                    <span class='the-arrow -right'>
                                        <span class='shaft'></span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                    <!-- Single team member -->
                    <div class="col-md-4 col-sm-6 col-xs-12 mb-3">
                        <div class="single-member-team">
                            <div id="circle-shape-example">
                                <img src="{{asset('img/team/Picture3.jpg')}}" alt="A photograph of sliced kiwifruit on a while plate" class="curve">
                                <h3 class="titles-team">Dr. Anthony Witherspoon </h3>

                                <?php $descriction_5 = "Anthony is a sought-after public speaker and owner of Sankofa Academy and Safeguard Insurance. In a historical accomplishment, he became Mayor of the City of Magnolia, Mississippi on July 1, 2014. He is a skilled administrative leader and consultant in both government and private sectors in the U.S. He previously served as the Vice President of the Mississippi State Conference of the NAACP, he was the President of the Mississippi Conference of Black Mayors, and the President of the Mississippi Black Caucus of Local Elected Officials. He was also a Board member of Beecham Memorial Hospital and Freedom Behavioral Health. He holds BSc in Business Administration and a Master’s degree in Public Administration from Belhaven University, and he has a Ph.D. from Jackson State University."; ?>
                                <p style="color: rgba(209, 228, 240);">
                                    {{ \Illuminate\Support\Str::limit($descriction_5, 200, '...') }}
                                </p>
                            </div>
                            <a class='animated-arrow' href="{{url('Anthnony/Witherspoon')}}">
                                <span class='the-arrow -left'>
                                    <span class='shaft'></span>
                                </span>
                                <span class='main'>
                                    <span class='text'>
                                        Read More
                                    </span>
                                    <span class='the-arrow -right'>
                                        <span class='shaft'></span>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team area end -->
@endsection