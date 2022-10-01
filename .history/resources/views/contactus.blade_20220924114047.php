@extends('layouts.main')
 <!-- <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script> -->
 
  <!-- <link rel="stylesheet" href="{{ asset('build/css/intlTelInput.css') }}"> -->
  <style>
    // workaround
.intl-tel-input {
  display: table-cell;
}
.intl-tel-input .selected-flag {
  z-index: 4;
}
.intl-tel-input .country-list {
  z-index: 5;
}
.input-group .intl-tel-input .form-control {
  border-top-left-radius: 4px;
  border-top-right-radius: 0;
  border-bottom-left-radius: 4px;
  border-bottom-right-radius: 0;
}
  </style>
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
  <form method="POST" action="{{ url('submit/contactus') }}">
  @csrf
    <div class="form-group">
    <input type="text" name="name" class="form-control rounded" placeholder="Your Full Name">
    </div>
    <div class="form-group">
      <input type="email" name="email" class="form-control rounded" placeholder="Your Email">
    </div>
    <div class="form-group">
      <input name="phone" class="form-control rounded" style="width:206%" id="phone" type="tel" placeholder="0528080570">
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
<div id="map"></div>
</div>
</div>
</div>
</section>
<!-- <script src="{{ asset('build/js/intlTelInput.js') }}"></script> -->
  <script>
// International telephone format
// $("#phone").intlTelInput();
// get the country data from the plugin
var countryData = window.intlTelInputGlobals.getCountryData(),
  input = document.querySelector("#phone"),
  addressDropdown = document.querySelector("#address-country");

// init plugin
var iti = window.intlTelInput(input, {
  hiddenInput: "full_phone",
  utilsScript: "https://intl-tel-input.com/node_modules/intl-tel-input/build/js/utils.js?1549804213570" // just for formatting/placeholders etc
});

// populate the country dropdown
for (var i = 0; i < countryData.length; i++) {
  var country = countryData[i];
  var optionNode = document.createElement("option");
  optionNode.value = country.iso2;
  var textNode = document.createTextNode(country.name);
  optionNode.appendChild(textNode);
  addressDropdown.appendChild(optionNode);
}
// set it's initial value
addressDropdown.value = iti.getSelectedCountryData().iso2;

// listen to the telephone input for changes
input.addEventListener('countrychange', function(e) {
  addressDropdown.value = iti.getSelectedCountryData().iso2;
});

// listen to the address dropdown for changes
addressDropdown.addEventListener('change', function() {
  iti.setCountry(this.value);
});

    // var input = document.querySelector("#phone");
    // window.intlTelInput(input, {
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
    //   utilsScript: "{{ asset('build/js/utils.js')}}",
    // });
  </script>
@endsection
<!-- JAVASCRIPT CODE REQUIRED -->
