@extends('layouts.main')
<!-- <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script> -->

  <link rel="stylesheet" href="{{ asset('build/css/intlTelInput.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@section('content')
<section class="ftco-section contact-section">
<div class="container">
<div class="row d-flex mb-5 contact-info">
<div class="col-md-12 mb-4">
<h2 style="color:#F8B232;">Contact Information</h2>
</div>
<div class="w-100"></div>
<div class="col-md-3">
<p><span style="color:#F8B232;">Address:</span> Units 2201 & 2202, level 22, Boulevard Plaza, Tower 2, Downtown Dubai,</p>
</div>
<div class="col-md-3">
<p><span style="color:#F8B232;">Box:</span> <a href="tel://1234567920">P.O.Box: 740553,Dubai, U.A.E</a></p>
</div>
<div class="col-md-3">
<p><span style="color:#F8B232;">Phone:</span> <a href="tel://1234567920">+971(0)45 247 865</a></p>
</div>
<div class="col-md-3">
<p><span style="color:#F8B232;">Email:</span> info@smarttraders.ae</span></p>
</div>
<div class="col-md-3">
<p><span style="color:#F8B232;">Website</span> <a href="http://www.smarttraders.ae">www.smarttraders.ae</a></p>
</div>
</div>
<div class="row block-9">
            <div class="col-lg-12">
                @if (session()->has('errors'))
                <div class="alert alert-danger" role="alert">
                    <strong>{{ session()->get('errors') }}</strong>
                </div>
                @endif
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif
            </div> 

<div class="col-md-6 pr-md-5">
  <form method="POST" action="{{ url('submit/contactus') }}" class="billingform">
  @csrf
    <div class="form-group">
    <input type="text" name="name" class="form-control rounded" placeholder="Your Full Name">
    </div>
    <div class="form-group">
      <input type="email" name="email" class="form-control rounded" placeholder="Your Email">
    </div>
    <div class="form-group">
      <input name="phone" class="form-control rounded" style="width:206%" id="phone" type="tel" id="phone" placeholder="+971 (0___) ___-____" data-slots="_" value="+971">
    </div>
    <div class="form-group">
    <input type="text" name="subject" class="form-control rounded" placeholder="Subject">
    </div>
    <div class="form-group">
    <textarea name="message" id="" cols="30" rows="7" class="form-control rounded" placeholder="Your Message To Us"></textarea>
    </div>
    <div class="form-group">
    <button type="submit" value="Send Message" class="btn btn-primary py-3 px-5"> Submit Message </button>
    </div>
  </form>
</div>
<div class="col-md-6 d-flex rounded">
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
</div>
</div>
</section>

<script src="{{ asset('build/js/intlTelInput.js') }}"></script>
    <script>
    // Vanilla Javascript
    var input = document.querySelector("#phone");
    window.intlTelInput(input,({
      // options here
    }));

    $(document).ready(function() {
        $('.iti__flag-container').click(function() { 
          var countryCode = $('.iti__selected-flag').attr('title');
          var countryCode = countryCode.replace(/[^0-9]/g,'')
          $('#phone').val("");
          $('#phone').val("+"+countryCode+" "+ $('#phone').val());
       });
    });
</script>
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(1000, 0).slideUp(500, function() {
            $(this).remove();
        });
    }, 3000);
</script>
@endsection
<!-- JAVASCRIPT CODE REQUIRED -->
