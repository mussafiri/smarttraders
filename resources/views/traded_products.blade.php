@extends('layouts.main')

@section('content')
<!-- Start breadcumb Area -->
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline">
                        <h3>Traded Products</h3>
                    </div>
                    <ul class="breadcrumb-bg">
                        <li class="home-bread">Home</li>
                        <li>Traded Products</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End breadcumb Area -->
<!-- Start Invest area -->
<div class="invest-area bg-color page-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Traded products</h3>
                    <p>We diversify our portfolios with a range of financial products such as FOREX, Indices, Commodities, Equities CFDs, and Futures. We trade with financial markets with registered and regulated brokers.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="pricing-content">
                <div class="col-md-6 col-sm-6 col-xs-12" >
                    <div class="pri_table_list">
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
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="pri_table_list">
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
          </div>  
            <div class="row">
                <div class="pricing-content">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="pri_table_list">
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
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="pri_table_list">
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
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="pri_table_list">
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
        </div>
    </div>
    <!-- End Invest area -->
    @endsection