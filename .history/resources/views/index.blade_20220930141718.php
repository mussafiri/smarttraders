@extends('layouts.main')

@section('content')
@include('caption')
<!-- <section class="ftco-section ftco-services">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-lg-4">
        <form action="#" class="getaquote-form">
          <h3>Request A Quote</h3>
          <div class="wrap">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email Address">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </div>
        </form>
      </div> -->
      <!-- <div class="col-md-7 col-lg-8">
        <div class="row pl-md-4">
          <div class="col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-family-room"></span>
              </div>
              <div class="media-body pl-4">
                <h3 class="heading">Family Law</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-bar-chart"></span>
              </div>
              <div class="media-body pl-4">
                <h3 class="heading">Business Law</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-medicine"></span>
              </div>
              <div class="media-body pl-4">
                <h3 class="heading">Drug Control Law</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-6 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-flex">
              <div class="icon d-flex justify-content-center align-items-center">
                <span class="flaticon-prison"></span>
              </div>
              <div class="media-body pl-4">
                <h3 class="heading">Criminal Law</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </div>
  </div>
</section> 

class="icon popup-vimeo d-flex justify-content-center"
-->
<section class="ftco-section ftc-no-pb">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center radius-6" style="background-image:url('images/ximage_3.jpg.pagespeed.ic.fX3scSkV2D.jpg')">
        <a href="{{asset('videos/smart_traders_overview.mp4')}}">
          <span class="icon-play" style="font-size:42px;"></span>
        </a>
      </div>
      <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section mb-5 pl-md-5">
          <div class="pl-md-5 ml-md-5">
            <span class="subheading">Company Overview</span>
            <!-- <h2 class="mb-4">Learned about the Law</h2> -->
          </div>
        </div>
        <div class="pl-md-5 ml-md-5 mb-5">
          <p>Our core business is to speculate on major markets based on the effects of global trades and the performance of big businesses. We also trade in CFDs (Contracts for Differences) such as forex, indices, shares, commodities, and treasuries along with ETFs (exchange-traded funds) for proprietary accounts on regulated exchanges.</p>
          <!-- <p><a href="index.html#" class="btn-custom">Learn More <span class="ion-ios-arrow-forward"></span></a></p> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- 
<section class="ftco-section ftco-counter img" id="section-counter" style="background-image:url('images/xbg_3.jpg.pagespeed.ic.9PXNCma74L.jpg')" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row d-md-flex align-items-center">
      <div class="col-lg-4">
        <div class="heading-section pl-md-5 heading-section-white">
          <div class="ftco-animate">
            <span class="subheading">Some</span>
            <h2 class="mb-4">Interesting Facts</h2>
          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="row d-md-flex align-items-center">
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="300">0</strong>
                <span>Trusted clients</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="1000000">0</strong>
                <span>Trades Made</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="230">0</strong>
                <span>Paid Investments</span>
              </div>
            </div>
          </div>
          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
            <div class="block-18 text-center">
              <div class="text">
                <strong class="number" data-number="150">0</strong>
                <span>Real Estates</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftc-no-pb">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center order-md-last" style="background-image:url('images/xabout-2.jpg.pagespeed.ic.TyuJwHwGpG.jpg')">
      </div>
      <div class="col-md-7 wrap-about ftco-animate">
        <div class="heading-section mb-5 pl-md-5">
          <div class="pr-md-5 mr-md-5 text-md-right">
            <span class="subheading">Company Help Intro</span>
            <h2 class="mb-4">The People We Help</h2>
          </div>
        </div>
        <div class="pr-md-5 pl-md-5 mr-md-5 mb-5">
          <div class="services-wrap d-flex">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-balance"></span>
            </div>
            <div class="media-body pr-4 order-md-first text-md-right">
              <h3 class="heading">Fight for Justice</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>
          <div class="services-wrap d-flex">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-balance"></span>
            </div>
            <div class="media-body pr-4 order-md-first text-md-right">
              <h3 class="heading">Best Case Strategy</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>
          <div class="services-wrap d-flex">
            <div class="icon d-flex justify-content-center align-items-center">
              <span class="flaticon-balance"></span>
            </div>
            <div class="media-body pr-4 order-md-first text-md-right">
              <h3 class="heading">Experience Attorneys</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section testimony-section">
 <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <span class="subheading">Testimony</span>
        <h2 class="mb-4">Our satisfied customer says</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <div class="user-img mb-5" style="background-image:url('images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg')">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
              </div>
              <div class="text">
                <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Garreth Smith</p>
                <span class="position">Marketing Manager</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <div class="user-img mb-5" style="background-image:url('images/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg')">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
              </div>
              <div class="text">
                <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Garreth Smith</p>
                <span class="position">Interface Designer</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <div class="user-img mb-5" style="background-image:url('images/person_3.jpg')">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
              </div>
              <div class="text">
                <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Garreth Smith</p>
                <span class="position">UI Designer</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <div class="user-img mb-5" style="background-image:url('images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg')">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
              </div>
              <div class="text">
                <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Garreth Smith</p>
                <span class="position">Web Developer</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimony-wrap p-4 pb-5">
              <div class="user-img mb-5" style="background-image:url('images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg')">
                <span class="quote d-flex align-items-center justify-content-center">
                  <i class="icon-quote-left"></i>
                </span>
              </div>
              <div class="text">
                <p class="mb-5 pl-4 line">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <p class="name">Garreth Smith</p>
                <span class="position">System Analyst</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
</section>
<section class="ftco-section bg-primary">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <span class="subheading">Working Process</span>
        <h2 class="mb-4">Our Working Way</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
      </div>
    </div>
    <div class="row steps d-flex">
      <div class="col-md-4 d-flex ftco-animate">
        <div class="step d-flex align-self-stretch">
          <span>#01</span>
          <h3>Analyzing Case</h3>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="step d-flex align-self-stretch">
          <span>#02</span>
          <h3>Research &amp; Investigation</h3>
        </div>
      </div>
      <div class="col-md-4 d-flex ftco-animate">
        <div class="step d-flex align-self-stretch">
          <span>#03</span>
          <h3>Court of Law Success</h3>
        </div>
      </div>
    </div>
  </div>
</section>
 <section class="ftco-section mt-5">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <span class="subheading">Experienced Attorneys</span>
        <h2 class="mb-4">Meet our attorneys</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img" style="background-image:url('images/xperson_1.jpg.pagespeed.ic.P4pHl6glbj.jpg')"></div>
          <div class="text pt-4">
            <h3>David Smith</h3>
            <span class="position mb-2">Family Lawyer</span>
            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
            <ul class="ftco-social d-flex">
              <li class="ftco-animate"><a href="index.html#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="index.html#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="index.html#"><span class="icon-google-plus"></span></a></li>
              <li class="ftco-animate"><a href="index.html#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img" style="background-image:url('images/xperson_2.jpg.pagespeed.ic.yyrmjBH91b.jpg')"></div>
          <div class="text pt-4">
            <h3>David Smith</h3>
            <span class="position mb-2">Consumer Lawyer</span>
            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
            <ul class="ftco-social d-flex">
              <li class="ftco-animate"><a href="index.html#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="index.html#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="index.html#"><span class="icon-google-plus"></span></a></li>
              <li class="ftco-animate"><a href="index.html#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img" style="background-image:url('images/person_3.jpg')"></div>
          <div class="text pt-4">
            <h3>David Smith</h3>
            <span class="position mb-2">Criminal Lawyer</span>
            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
            <ul class="ftco-social d-flex">
              <li class="ftco-animate"><a href="index.html#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="index.html#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="index.html#"><span class="icon-google-plus"></span></a></li>
              <li class="ftco-animate"><a href="index.html#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
          <div class="img" style="background-image:url('images/xperson_4.jpg.pagespeed.ic.sgz97bCjv4.jpg')"></div>
          <div class="text pt-4">
            <h3>David Smith</h3>
            <span class="position mb-2">Business Lawyer</span>
            <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
            <ul class="ftco-social d-flex">
              <li class="ftco-animate"><a href="index.html#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="index.html#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="index.html#"><span class="icon-google-plus"></span></a></li>
              <li class="ftco-animate"><a href="index.html#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- <section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate">
        <span class="subheading">Our latest update</span>
        <h2 class="mb-4">Case Study</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 ftco-animate">
        <div class="blog-entry">
          <a href="blog-single.html" class="block-20" style="background-image:url('images/ximage_1.jpg.pagespeed.ic.YKiWaTH4Ho.jpg')">
          </a>
          <div class="text d-flex py-4">
            <div class="meta mb-3">
              <div><a href="index.html#">Sep. 20, 2018</a></div>
              <div><a href="index.html#">Admin</a></div>
              <div><a href="index.html#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <div class="desc pl-3">
              <h3 class="heading"><a href="index.html#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="blog-entry" data-aos-delay="100">
          <a href="blog-single.html" class="block-20" style="background-image:url('images/ximage_2.jpg.pagespeed.ic.L-GxMXngHF.jpg')">
          </a>
          <div class="text d-flex py-4">
            <div class="meta mb-3">
              <div><a href="index.html#">Sep. 20, 2018</a></div>
              <div><a href="index.html#">Admin</a></div>
              <div><a href="index.html#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <div class="desc pl-3">
              <h3 class="heading"><a href="index.html#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 ftco-animate">
        <div class="blog-entry" data-aos-delay="200">
          <a href="blog-single.html" class="block-20" style="background-image:url('images/ximage_3.jpg.pagespeed.ic.fX3scSkV2D.jpg')">
          </a>
          <div class="text d-flex py-4">
            <div class="meta mb-3">
              <div><a href="index.html#">Sep. 20, 2018</a></div>
              <div><a href="index.html#">Admin</a></div>
              <div><a href="index.html#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
            </div>
            <div class="desc pl-3">
              <h3 class="heading"><a href="index.html#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> -->
<section class="ftco-section ftc-no-pb ftc-no-pt bg-light mt-4">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-5">
      <iframe 
        width="100%"
        height="100%"
        style="border:0"
        loading="lazy"
        allowfullscreen
        referrerpolicy="no-referrer-when-downgrade"
        style="border:0;"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.0974190547254!2d55.27198431500956!3d25.199936983894922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f6828d6d49ef7%3A0x46d6db9c8521a81a!2sBoulevard%20Plaza%20Tower%202%20-%20Emaar!5e0!3m2!1sen!2stz!4v1664256584046!5m2!1sen!2stz">
      </iframe>
      </div>
      <div class="col-md-7 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section mb-md-5 pl-md-5 mt-5 pt-3">
          <div class="pl-md-5 ml-md-5">
            <span class="subheading">Contact Information</span>
            <!-- <h2 class="mb-4">You may Contact Us here</h2> -->
          </div>
        </div>
        <div class="pl-md-5 ml-md-5">
          <!-- <div class="info-contact mb-5">
            <p><span>Phone:</span> <span>+971(0)45 247 865</span></p>
            <p><span>Fax:</span> <span>(00) 123 - 456 - 789</span></p> 
            <p><span>E-Mail:</span> <span><a href="index.html#"><span class="__cf_email__" data-cfemail="771e19111837121a1e161b5914181a">info@smarttraders.ae</span></a></span></p>
          </div> -->
          <div class="info-contact mb-5">
            <h3>Address Information</h3>
            <p><span>Address</span> <span> Units 2201 & 2202, level 22, Boulevard Plaza, Tower 2, Downtown Dubai,</span></p>
            <p><span>Phone:</span> <span>+971(0)45 247 865</span></p>
            <p><span>E-Mail:</span> <span><a href="#"><span class="__cf_email__" data-cfemail="640d0a020b2401090d05084a070b09">info@smarttraders.ae</span></a></span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalAppointmentLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalAppointmentLabel">Request a Quote</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="#">
          <div class="form-group">
            <label for="appointment_name" class="text-black">Full Name</label>
            <input type="text" class="form-control" id="appointment_name">
          </div>
          <div class="form-group">
            <label for="appointment_email" class="text-black">Email</label>
            <input type="text" class="form-control" id="appointment_email">
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="appointment_date" class="text-black">Date</label>
                <input type="text" class="form-control" id="appointment_date">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="appointment_time" class="text-black">Time</label>
                <input type="text" class="form-control" id="appointment_time">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="appointment_message" class="text-black">Message</label>
            <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" value="Send Message" class="btn btn-primary">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection