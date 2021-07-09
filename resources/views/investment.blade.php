@extends('layouts.main')

@section('content')
<style>
    .section-headline_invest {
    padding:10px;
}
.section-headline{
    padding: 10px;
    position: relative;   
}
.about-details_invest {
    overflow: hidden;
    display: block;
    padding: 5px;
}
.container {
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px;
    padding-top: 15px;
}
</style>
<!-- Start breadcumb Area -->
<div class="page-area">
    <div class="breadcumb-overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="breadcrumb text-center">
                    <div class="section-headline white-headline">
                        <h3>Investment</h3>
                    </div>
                    <ul class="breadcrumb-bg">
                        <li class="home-bread">Home</li>
                        <li>Investment</li>
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
            <div class="pricing-content">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-left">
                        <h2>Our Capital Diversification and Investment Portfolio</h2>
                    </div>
                    <div class="pri_table_list">
                        Smart asset allocation is one of our key drivers of long-term wealth creation and capital security.
                        That is why we focus in deferent trading instrument and asset management to ensure that each client's
                        investment portfolio is positioned for the future, while allowing for current market conditions, interest rates and currency markets,
                        which all impact portfolio performance.
                    </div>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-left">
                        <h2>Our Real Estate Portfolio Management</h2>
                    </div>
                    <div class="pri_table_list">
                        We target a wide variety of sectors at different stages in real estate asset development.
                        Our efforts are channelled towards investing in residential, commercial, industrial, hospitality and other sectors, developing land, buildings,
                        managing income-generating assets, as well as structuring products around assets. We use trading profits to purchase real estate projects which are
                        used as to create stable company value.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Invest area -->
<!--Start payment-history area -->
<div class="payment-history-area bg-color fix area-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Our Investment Products </h3>
                    <p>We offer different investment plan through loan and classes of shares as follows</p>
                </div>
            </div>
        </div>
        <div class="row">
            <h4 class="section-headline_invest">Ordinary Share Investment</h4>
            <div class="about-details_invest">
            <ul class="marker-list">
                <li>A client automatically becomes owner of the company after purchasing ordinarily shares of the company. </li>
                <li>This is limited for 10 people only to be part of the company ownership. </li>
                <li>Minimum investment is $1,000,000</li>
                <li>Shares percentage available is 10%</li>
            </ul>
            </div>  
        </div>
        <div class="row">
            <h4 class="section-headline_invest">Cumulative Preference Share Investment</h4>
            <div class="about-details_invest ">
            <ul class="marker-list">
                <li>Cumulative preference shares contain all the features and benefits of ordinary preference shares such as entitlement to higher dividend payouts, preference in payment of dividends, and preference in payment over equity shares.</li>
                <li>Fixed term contract from 3 – 5 yrs. </li>
                <li>Only 20 clients required who owns 10% of the company unit shares. </li>
                <li>Minimum investment is $500,000 and capital required to be raised is $40,000,000</li>
                <li>Client get pay fixed dividends in deferent periods of time as explained in table below with additional bonus of real estate units from studio, 1,2, or 3 – bedroom unit apartment depending on amount invested. </li>
            </ul>
            </div>
        </div>    
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="deposite-content">
                            <div class="diposite-box">
                                <div class="deposite-table">
                                    <table>
                                        <tr>
                                            <th>Payment Mode</th>
                                            <th>% Returns</th>
                                            <th>Contract Duration</th>
                                            <th>Total Return Contract</th>
                                        </tr>
                                        <tr>
                                            <td>MONTHLY</td>
                                            <td>1.25%</td>
                                            <td>2</td>
                                            <td>30%</td>
                                        </tr>
                                        <tr>
                                            <td>QUOTERY</td>
                                            <td>5.01%</td>
                                            <td>3</td>
                                            <td>60.12%</td>
                                        </tr>
                                        <tr>
                                            <td>SEMI - ANNUALY</td>
                                            <td>14.64%</td>
                                            <td>4</td>
                                            <td>117.12%</td>
                                        </tr>
                                        <tr>
                                            <td>ANNUALY</td>
                                            <td>32.28%</td>
                                            <td>5</td>
                                            <td>161.35%</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <h4 class="section-headline">Traded - Loan Investment</h4>
            <div class="about-details_invest ">
            <ul class="marker-list">
                <li>A client invests his/her funds from minimum of $25000 as a loan to a company a contractual period of 1- 3yrs. </li>
                <li>The table below shows the returns</li>
            </ul>
            </div>
        </div>
        <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="deposite-content">
                            <div class="diposite-box">
                                <div class="deposite-table">
                                    <table>
                                        <tr>
                                            <th>Payment Mode</th>
                                            <th>% Returns</th>
                                            <th>Annual Return</th>
                                        </tr>
                                        <tr>
                                            <td>MONTHLY</td>
                                            <td>3.5%</td>
                                            <td>42%</td>
                                        </tr>
                                        <tr>
                                            <td>QUOTERY</td>
                                            <td>11.25%</td>
                                            <td>45%</td>
                                        </tr>
                                        <tr>
                                            <td>SEMI - ANNUALY</td>
                                            <td>24%</td>
                                            <td>48%</td>
                                        </tr>
                                        <tr>
                                            <td>ANNUALY</td>
                                            <td>51%</td>
                                            <td>51%</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End payment-history area -->
@endsection