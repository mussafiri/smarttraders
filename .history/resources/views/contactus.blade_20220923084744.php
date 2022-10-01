@extends('layouts.main')
 <!-- <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script> -->
 
  <link rel="stylesheet" href="{{ asset('build/css/intlTelInput.css') }}">
@section('content')
@include('caption')
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
<div class="col-md-6 pr-md-5">
<form action="#">
<div class="form-group">
<input type="text" class="form-control" placeholder="Your Full Name">
</div>
<!-- <div class="form-group row col-12"> -->
  <div class="form-group">
    <input type="text" class="form-control col-12" placeholder="Your Email">
  </div>
  <div class="form-group col-12">
    <input class="form-control col-12 w-100" id="phone" type="tel" placeholder="0528080570">
  </div>
<!-- </div> -->
<div class="form-group">
<input type="text" class="form-control" placeholder="Subject">
</div>
<div class="form-group">
<textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Your Message To Us"></textarea>
</div>
<div class="form-group">
<button type="submit" value="Send Message" class="btn btn-primary py-3 px-5"> Submit Message </button>
</div>
</form>
</div>
<div class="col-md-6 d-flex">
<div id="map"></div>
</div>
</div>
</div>
</section>
<script src="{{ asset('build/js/intlTelInput.js') }}"></script>
  <script>
    var input = document.querySelector("#phone");
    window.intlTelInput(input, {
      // allowDropdown: false,
      // autoHideDialCode: false,
      // autoPlaceholder: "off",
      // dropdownContainer: document.body,
      // excludeCountries: ["us"],
      // formatOnDisplay: false,
      // geoIpLookup: function(callback) {
      //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      //     var countryCode = (resp && resp.country) ? resp.country : "";
      //     callback(countryCode);
      //   });
      // },
      // hiddenInput: "full_number",
      // initialCountry: "auto",
      // localizedCountries: { 'de': 'Deutschland' },
      // nationalMode: false,
      // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
      // placeholderNumberType: "MOBILE",
      // preferredCountries: ['cn', 'jp'],
      // separateDialCode: true,
      utilsScript: "{{ asset('build/js/utils.js')}}",
    });
  </script>
@endsection
<!-- JAVASCRIPT CODE REQUIRED -->
