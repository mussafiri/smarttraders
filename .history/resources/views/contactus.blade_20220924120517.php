@extends('layouts.main')
 <!-- <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script> -->
 
  <!-- <link rel="stylesheet" href="{{ asset('build/css/intlTelInput.css') }}"> -->
  <style>
// bootstrap gray variants
$white:    #fff !default;
$gray-100: #f8f9fa !default;
$gray-200: #e9ecef !default;
$gray-300: #dee2e6 !default;
$gray-400: #ced4da !default;
$gray-500: #adb5bd !default;
$gray-600: #6c757d !default;
$gray-700: #495057 !default;
$gray-800: #343a40 !default;
$gray-900: #212529 !default;
$black:    #000 !default;

// Colors
$blue:    #4267B2;
$purple:  #6A47DA;
$pink:    #F75358;
$red:    #FA6541;
$orange: #F8B91C;
$green:   #09C098;
$teal:   #0EE25C;
$body-color: #344051;
$primary: blue;
$spacer: 20px;

//before and after mixin 
@mixin pseudo($display: block, $pos: absolute, $content: ''){
  content: $content;
  display: $display;
  position: $pos;
}

.container {
  max-width: 600px;
  margin: 30px auto;
}
img {
  max-width: 100%;
  height: auto;
  vertical-align: middle;
}
// material style form
.md-group {
    position: relative;
    margin-bottom:  15px;
  padding-top: 1rem;
  padding-bottom: 1rem;
    input:not([type="submit"]),
    input:not([type="reset"]),
    textarea,
    select,
    select.form-control {
        border: none;
        border: 1px solid $gray-400;
        border-radius:0px;
        background-clip:unset;
        color:transparent;
        padding: 15px;
        height: 40px;
        &::placeholder{
        color:transparent;

        }

        &:focus{
            outline:none;
            border-color: blue;
        	box-shadow:none;
             color: #333 !important;
        &::placeholder{
        color:$gray-300 !important;
            
        }
        	& +label, .ng2-tag-input-focus + label {
        		top:0;
                font-size:  rem(12);
        	}
        }
        
        &:invalid  {
            .was-validated &{
             border-bottom:1.2px solid $red;
            }
            & ~label {
                .was-validated & {
                    color:$red;
                }
                
             }
            
        }
         &:valid, &:invalid {
               &:focus {
                outline:none;
            box-shadow:none;
            }
        }
        &:valid {
            .was-validated &{
             border-bottom:1.2px solid $green;
              & ~label {
                .was-validated & {
                    color:$green;
                }
                
             }
            }
        }

        
    }
    textarea {
        height: auto;
    }
    label {
    	margin:0;
    	position: absolute;	
    	top: 1.5rem;
    	pointer-events: none;
    	display:block;
    	left:0.75rem;
    	transition:all 0.2s ease-in-out;
        color:$gray-500;
        z-index: 9;
    }
&.is-valid {
    border-bottom: 1.2px solid $green;
    & ~label {
        color:$green;
    }
}
&.is-invalid {
    border-bottom: 1.2px solid $red;
    & ~label {
        color:$red;
    }
}
&.input-group {
	[class*="input-group"]{
		opacity:0;
		visibility:hidden;
		width:0;
         
	}
	.form-control {
		width:100%;
	}
}
}

.show-label {
	label {
        color: $blue;
        top: -10px;
        left: 0;
        font-size:  rem(14);

	}

	&.input-group {
		[class*="input-group"]{
		opacity:1;
		visibility:visible;
		width:auto;
	}
	.form-control {
		width:1%;
	}
	}
    .form-control {
         color:$body-color !important;
      padding: 0.3125rem !important;
        &::placeholder{
        color:$gray-300 !important;
            
        }
    }
}

.input-group-text {
	border:none;
}

 
    .form-check-input {
        display:none;

        & ~label {
            &:before {
                @include pseudo;
                top:rem(3);
                left:0;
                font-size: rem(16);
                border:1px solid #ccc;
                border-radius:rem(2);
                transition:all 0.3s ease-in-out;

            }
            &:after {
                @include pseudo;
                top:rem(3);
                left:rem(3);
                content:'';
                font-family: 'fontawesome';
                color:white;
                font-size: rem(12);
    opacity:0;
     transition:all 0.3s ease-in-out;

            }
        }

        &:checked {
            & ~label {
                &:before {
                    background-color: $primary;
                    border-color:transparent;
                }
                &:after {
                    opacity:1;
                }
            }
        }
    }
.form-check {
    padding-left: rem(28);
}

// extra styling for telephone formatting
.billingform .intl-tel-input .form-control {
    padding-left: 47px !important;
}
.intl-tel-input .flag-dropdown .selected-flag {
  padding: 11px 16px 11px 6px;
}
.intl-tel-input {
  z-index: 99;
  width: 100%;
}
.iti-flag {
  box-shadow: none;
}
.intl-tel-input .selected-flag:focus {
  outline: none;
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
  <form method="POST" action="{{ url('submit/contactus') }}" class="billingform">
  @csrf
    <div class="form-group">
    <input type="text" name="name" class="form-control rounded" placeholder="Your Full Name">
    </div>
    <div class="form-group">
      <input type="email" name="email" class="form-control rounded" placeholder="Your Email">
    </div>
    <div class="form-group">
      <input name="phone" class="form-control rounded" style="width:206%" id="phone" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" value="+1 ">
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
    <div class="form-group md-group show-label">
      <label for="">Telephone</label>
      <input class="form-control" type="tel" id="phone" placeholder="e.g. +1 702 123 4567" value="+1 ">
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="form-group md-group show-label">
        <label for="">Select Country</label>
        <select name="" id="address-country" class="form-control">
          </select>
        </div>
      </div>
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
