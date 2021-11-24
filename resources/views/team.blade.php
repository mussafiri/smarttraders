@extends('layouts.main')

@section('content')
<style>
    #circle-shape-example {
        text-align: left;
        margin: 2rem;
    }

    #circle-shape-example p {
        line-height: 1.8;
    }

    #circle-shape-example .curve {
        width: 33%;
        height: auto;
        min-width: 150px;
        margin-right:1rem;
        float: left;
        border-radius: 50%;
        -webkit-shape-outside: circle();
        shape-outside: circle();
    }
    .single-member-team {
    height: 100%;
    padding: 20px 10px;
    margin-bottom: 30px;
    border: 1px solid #E6922E;
    background: #c4c4c4;
    box-shadow: 0 10px 25px 4px rgb(0 0 0 / 70%);
    /* width: 325px; */
}
.mx-5{
    margin: 5rem;
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
                        <h3>Exper team </h3>
                    </div>
                    <ul class="breadcrumb-bg">
                        <li class="home-bread">Home</li>
                        <li>Our team</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End breadcumb Area -->
<!-- Team area start -->
<div class="team-page-area page-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Our Board of Directors</h3>
                    <!-- <p>Help agencies to define their new business objectives and then create professional software.</p> -->
                </div>
            </div>
        </div>
        <div class="row">
            <div class="team-member text-center">
                <!-- Single team member -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-member-team">
                    <div  id="circle-shape-example">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/kiwifruit-on-a-plate.jpg" alt="A photograph of sliced kiwifruit on a while plate" class="curve">
                            <h3 style="color: black;">Saleh Ismail Alzarooni</h3>

                            <p style="color: black;">Saleh is the Chairman of BCM Holdings. He is a renowned Economist and a formidable leader with 
                                                     over 25 years of experience in leading various businesses. During this period, Saleh developed 
                                                     extensive business relations and network with several Gulf and African nations, investors, and 
                                                     moguls in both private and public sectors. Saleh has been working as the private office manager 
                                                     of His Excellence Sheikh Marwan Bin Mohammed Bin Rashid Al Maktoum for over two decades. 
                                                     In this capacity, Saleh works closely with His Highness and has conducted multiple successful 
                                                     business activities on behalf of His Excellence Sheikh Maktoum. His expansive diplomatic skills 
                                                     as well as his superlative attention to details has brought major success in many companies.
                            </p>                         
                         </div>
                    </div>
                </div>
                <!-- Single team member -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-member-team">
                    <div  id="circle-shape-example">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/kiwifruit-on-a-plate.jpg" alt="A photograph of sliced kiwifruit on a while plate" class="curve">
                            <h3 style="color: black;">Mike Sallu</h3>

                            <p style="color: black;">Mike is the Deputy Chairman of BCM Holdings. He is a Fellow Certified Public Accountant and holds BCom and MA degrees. He is a renowned consultant and a multiskilled business leader, and he possesses significant experience of leading the board agenda. In addition to being the deputy chairman of BCM Holdings, he is the Chairman of UAP Insurance Kenya Limited, Ecobank Tanzania Limited, and Claritas International. He also sits on the boards of UAP Insurance Tanzania, UAP Insurance Rwanda, and Geno Services Limited. Previously, Michael worked for PricewaterhouseCoopers (PwC) for 24 years. He served 15 of those years as Partner and Director, and he was a Governance Board Member of PwC Africa and PwC Africa Central for a combined period of 6 years. 

                            </p>                         
                         </div>
                    </div>
                </div>
                <!-- Single team member -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-member-team">
                    <div  id="circle-shape-example">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/kiwifruit-on-a-plate.jpg" alt="A photograph of sliced kiwifruit on a while plate" class="curve">
                            <h3 style="color: black;">Saleh Ismail Alzarooni</h3>

                            <p style="color: black;">Saleh is the Chairman of BCM Holdings. He is a renowned Economist and a formidable leader with 
                                                     over 25 years of experience in leading various businesses. During this period, Saleh developed 
                                                     extensive business relations and network with several Gulf and African nations, investors, and 
                                                     moguls in both private and public sectors. Saleh has been working as the private office manager 
                                                     of His Excellence Sheikh Marwan Bin Mohammed Bin Rashid Al Maktoum for over two decades. 
                                                     In this capacity, Saleh works closely with His Highness and has conducted multiple successful 
                                                     business activities on behalf of His Excellence Sheikh Maktoum. His expansive diplomatic skills 
                                                     as well as his superlative attention to details has brought major success in many companies.
                            </p>                         
                         </div>
                    </div>
                </div>
                <!-- Single team member -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-member-team">
                    <div  id="circle-shape-example">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/kiwifruit-on-a-plate.jpg" alt="A photograph of sliced kiwifruit on a while plate" class="curve">
                            <h3 style="color: black;">Saleh Ismail Alzarooni</h3>

                            <p style="color: black;">Saleh is the Chairman of BCM Holdings. He is a renowned Economist and a formidable leader with 
                                                     over 25 years of experience in leading various businesses. During this period, Saleh developed 
                                                     extensive business relations and network with several Gulf and African nations, investors, and 
                                                     moguls in both private and public sectors. Saleh has been working as the private office manager 
                                                     of His Excellence Sheikh Marwan Bin Mohammed Bin Rashid Al Maktoum for over two decades. 
                                                     In this capacity, Saleh works closely with His Highness and has conducted multiple successful 
                                                     business activities on behalf of His Excellence Sheikh Maktoum. His expansive diplomatic skills 
                                                     as well as his superlative attention to details has brought major success in many companies.
                            </p>                         
                         </div>
                    </div>
                </div>
                <!-- Single team member -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="single-member-team">
                    <div  id="circle-shape-example">
                            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/kiwifruit-on-a-plate.jpg" alt="A photograph of sliced kiwifruit on a while plate" class="curve">
                            <h3 style="color: black;">Saleh Ismail Alzarooni</h3>

                            <p style="color: black;">Saleh is the Chairman of BCM Holdings. He is a renowned Economist and a formidable leader with 
                                                     over 25 years of experience in leading various businesses. During this period, Saleh developed 
                                                     extensive business relations and network with several Gulf and African nations, investors, and 
                                                     moguls in both private and public sectors. Saleh has been working as the private office manager 
                                                     of His Excellence Sheikh Marwan Bin Mohammed Bin Rashid Al Maktoum for over two decades. 
                                                     In this capacity, Saleh works closely with His Highness and has conducted multiple successful 
                                                     business activities on behalf of His Excellence Sheikh Maktoum. His expansive diplomatic skills 
                                                     as well as his superlative attention to details has brought major success in many companies.
                            </p>                         
                         </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team area end -->
@endsection