@extends('layouts.main')

@section('content')
<style>
    .background-color {
        background: rgb(2, 16, 33, 0.82);
    }

    .background-color-1 {
        background-color: rgb(2, 16, 33, 0.9);
    }

    #yin-yang {
        display: flex;
        align-items: center;
        width: 100%;
        height: 80vmin;
        background: linear-gradient(rgb(2, 16, 33) 50%, #c4c4c4 0);
    }

    #yin-yang:before,
    #yin-yang:after {
        flex: 1;
        height: 90%;
        border-top-left-radius: 50%;
        border-bottom-left-radius: 30px;
        background: rgb(2, 16, 33);
        content: "";
    }

    #yin-yang:after {
        background: #c4c4c4;
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

    .row-flex {
        display: flex;
        flex-wrap: wrap;
    }

    .content {
        height: 100%;
        padding: 20px 20px 10px;
        box-shadow: 0 5px 25px rgb(0 0 0 / 70%);
        border: 1px solid #CCA177;
        background: #0A1828;
    }

    .col-pad {
        margin-bottom: 30px;
    }

    .shaped {
        float: left;
        height: 100vh;
        width: 40vw;
        float: right;
        background: black url('img/about/ab2.jpg');
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
    }

    .shaped {
        /*...*/
        shape-outside: polygon(0 0, 100% 0, 100% 100%, 30% 100%);
        shape-margin: 10px;
    }

    .shaped {
        /*...*/
        clip-path: polygon(0 0, 100% 0, 100% 100%, 30% 100%);
    }

    .step {
        position: relative;
        min-height: 12em;
        color: gray;

    }

    .title {
        line-height: 1.5em;
        color: #061E29;
        font-size: 2.72rem;
        margin-bottom: 5px;
        font-weight: 600;
    }

    .caption {
        font-size: 1.9rem;
        color: #1B1E21;
    }

    .step+.step {
        margin-top: 2.5em
    }

    .step>div:first-child {
        position: static;
        height: 0;
    }

    .step>div:not(:first-child) {
        margin-left: 1.5em;
        padding-left: 1em;
    }

    /* Circle */
    .circle {
        background: linear-gradient(to bottom right, #0a3041, #23A6E0);
        position: relative;
        width: 2.1em;
        height: 2.1em;
        line-height: 1.5em;
        border-radius: 100%;
        color: #fff;
        padding-top: 5px;
        text-align: center;
        box-shadow: 0 0 0 13px rgb(0, 0, 0), 0.5;
    }

    /* Vertical Line */
    .circle:after {
        content: ' ';
        position: absolute;
        display: block;
        top: 1px;
        right: 50%;
        bottom: 1px;
        left: 50%;
        height: 100%;
        width: 1px;
        transform: scale(1, 2);
        transform-origin: 50% -100%;
        background: linear-gradient(to bottom,#23A6E0, #0a3041) ;
        z-index: 1;
    }

    .step:last-child .circle:after {
        display: none
    }

    .step.step-active {
        color: #4285f4
    }

    .step.step-active .circle {
        background-color: #4285f4;
    }

    .steps-box {
        background: linear-gradient(130deg, rgba(230, 235, 237, 0.930) 95%, rgba(37, 92, 122, 0.730) 97%);
        border-bottom: solid 3px #0C3A4F;
        border-right: solid 3px #0C3A4F;
        padding: 20px 40px 10px 40px;
        box-shadow: 4px 6px 10px rgb(0 0 0 / 70%);
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
                    <a class="btn btn-default btn-lg" href="{{url('/')}}">Home</a>
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

            <div class="container">
                <div class="shaped"></div>
                <div class="section-headline text-center">
                    <h3>What We Do</h3>
                    <!-- <p>Help agencies to define their new business objectives and then create professional software.</p> -->
                </div>
                <div class="content">
                    <p class="text-left">We use innovative approach in diversifying our portfolio and create sustainable income for our investors.
                        We trade in CFDs (Contracts for Difference), forex, indices, shares, commodities, treasuries, and ETFs,
                        along with ETFs (exchange-traded funds) trading for Proprietary account on regulated exchanges.
                        We speculate on major markets based on the effects of global trades and the performance of big businesses.
                        When you invest with us, you can rest assured that your funds will generate sustainable income in long term
                        to meet your goals and needs.
                        <br><br>
                        We partner with Century Financial which has over with 30 years of market presence, as our professional
                        financial market analysts and risk managers. We partner with different regulated and reputable trading brokers to access different financial instruments.
                    </p>
                </div>
            </div>
            <!-- about-area end -->

            <div class="invest-area  page-padding-2" style="background: rgb(2, 16, 33, 0.06);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h3>Our Investment Packages</h3>
                                <p>We offer three types of investment products which our clients can choose depending on the benefits of each.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="step">
                                <div>
                                    <div class="circle">1</div>
                                </div>
                                <div class="col-md-12">
                                    <div class="steps-box">
                                        <div class="title">Ordinary Share Investment</div>
                                        <div class="caption">An ordinary share represents a fraction of ownership in
                                    the corporation that issues it. As an owner, shareholders will gets a vote in the
                                    company's major decisions, decided in shareholder meetings as well as get paid
                                    dividends annually. we issue this class of shares for serious investors who are
                                    willing to grow with the company vision and goals. we target 10 subscribers in this
                                    class of share with minimum investment of $500,000.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <div>
                                    <div class="circle">2</div>
                                </div>
                                <div class="col-md-12">
                                    <div class="steps-box">
                                        <div class="title">Preference Shareholder</div>
                                        <div class="caption">This also is another class of share which will gain interest in
                                    different periods as shown in the table below. They are short term investors . The
                                    minimum capital required is $100,000 and an investment above $500,000 will be
                                    receiving bonus of unit Apartment . after the end of contract the principal will be
                                    paid back to investor.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step">
                                <div>
                                    <div class="circle">3</div>
                                </div>
                                <div class="col-md-12">
                                    <div class="steps-box">
                                        <div class="title">Managed - Trading Account</div>
                                        <div class="caption">This is self trading account managed by our traders.
                                    under L.P.O.A (Limited power of Attorney), our professional traders will open/close trades in
                                    clients account on his/her behalf and profit generated will be shared as 45% to client and
                                    55% to the company. Minimum investment to this service is $500,000 for individuals and
                                    $1,000,000 for corporate investors.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="step" style="margin-top: 0px;min-height: 0em;"></div>
                        </div>
                    </div>
                </div>
                </di>
            </div>
            <!-- Start About Area -->
            <div class="invest-area  page-padding-2" style="background: rgb(2, 16, 33, 0.06);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="section-headline text-center">
                                <h3>Traded products</h3>
                                <p>We diversify our portfolios with a range of financial products such as FOREX, Indices, Commodities, Equities CFDs, and Futures. We trade with financial markets with registered and regulated brokers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row row-flex">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-pad">
                            <div class="content">
                                <div class="top-price-inner">
                                    <div class="rates">
                                        <span class="prices">Forex</span>
                                    </div>
                                    <span class="per-day">(Foreign Exchange)</span>
                                </div>
                                <p class="pricing-text">
                                    We Buy and Sell currency pairs on the most popular trading market and exploit the results of world events. With the markets
                                    reacting to geo-political and economic stimuli every day, it's a great way to speculate on world events.
                                    Forex Traders buy and sell about $5trn of Forex daily, which creates liquid markets that offers opportunities for all types of traders.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 col-pad">
                            <div class="content">
                                <div class="top-price-inner">
                                    <div class="rates">
                                        <span class="prices">Trading Indices CFDs</span>
                                    </div>
                                </div>
                                <p class="pricing-text">
                                    We speculate the major markets based on the effects of global trade and the performance of big businesses.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row row-flex">
                        <div class="col-md-4 col-sm-4 col-xs-12 col-pad">
                            <div class="content">
                                <div class="top-price-inner">
                                    <div class="rates">
                                        <span class="prices">Commodities</span>
                                    </div>
                                </div>
                                <p class="pricing-text">
                                    We trade the world's raw materials including gold, silver, and energy products like crude oil.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 col-pad">
                            <div class="content">
                                <div class="top-price-inner">
                                    <div class="rates">
                                        <span class="prices">Equities</span>
                                    </div>
                                </div>
                                <p class="pricing-text">
                                    Trade stocks and shares in some of the world's biggest companies and best-known brands.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 col-pad">
                            <div class="content">
                                <div class="top-price-inner">
                                    <div class="rates">
                                        <span class="prices">Futures</span>
                                    </div>
                                </div>
                                <p class="pricing-text">
                                    Traders worldwide use us futures to control risk or seek opportunity on changing markets
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                </di>
            </div>
        </div>
    </div>
</div>
<!-- End About Area -->
@endsection