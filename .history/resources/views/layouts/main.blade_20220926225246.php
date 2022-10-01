<!DOCTYPE html>
<html lang="en">

<head>
  <title>Smart Traders - Professional Traders</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="{{ asset('css/all-style.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  <script nonce="237057a2-cef8-4463-be58-5869aad24c9b">
    (function(w, d) {
      ! function(a, e, t, r) {
        a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zaraz = {
          deferred: []
        }, a.zaraz.q = [], a.zaraz._f = function(e) {
          return function() {
            var t = Array.prototype.slice.call(arguments);
            a.zaraz.q.push({
              m: e,
              a: t
            })
          }
        };
        for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
        a.zaraz.init = () => {
          var t = e.getElementsByTagName(r)[0],
            z = e.createElement(r),
            n = e.getElementsByTagName("title")[0];
          for (n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.x = Math.random(), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a.zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a.location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a.zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), a.zarazData.q = []; a.zaraz.q.length;) {
            const e = a.zaraz.q.shift();
            a.zarazData.q.push(e)
          }
          z.defer = !0;
          for (const e of [localStorage, sessionStorage]) Object.keys(e || {}).filter((a => a.startsWith("_zaraz_"))).forEach((t => {
            try {
              a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
            } catch {
              a.zarazData["z_" + t.slice(7)] = e.getItem(t)
            }
          }));
          z.referrerPolicy = "origin", z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t)
        }, ["complete", "interactive"].includes(e.readyState) ? zaraz.init() : a.addEventListener("DOMContentLoaded", zaraz.init)
      }(w, d, 0, "script");
    })(window, document);
  </script>
</head>

<body>
@include('shared.header')
@yield('content')
@include('shared.footer')
  <!-- 
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
    </svg>
  </div> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('js/jquery.min.js')}}"></script>
  <script src="{{ asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script>
    eval(mod_pagespeed_D_kg9KZdfB);
  </script>
  <script>
    eval(mod_pagespeed_r9rwa2vm9n);
  </script>
  <script>
    eval(mod_pagespeed_ZaG1VlDhAc);
  </script>
  <script>
    eval(mod_pagespeed_Eg9xuUyfQI);
  </script>
  <script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
  <script>
    eval(mod_pagespeed_q4qAnV$ux$);
  </script>
  <script>
    eval(mod_pagespeed_biHnA9EkjE);
  </script>
  <script>
    eval(mod_pagespeed_wQCnMvXQ$M);
  </script>
  <script>
    eval(mod_pagespeed_8NoRHhXSAt);
  </script>
  <script src="{{ asset('js/aos.js')}}"></script>
  <script>
    eval(mod_pagespeed_WuX_Q44z4l);
  </script>
  <script>
    eval(mod_pagespeed_JoT7PuB_3r);
  </script>
  <script>
    eval(mod_pagespeed_AWuiAkGrA0);
  </script>
  <script src="https://preview.colorlib.com/theme/primelaw/js/jquery.timepicker.min.js"></script>
  <script src="{{ asset('js/scrollax.min.js')}}"></script>
  <script>
    eval(mod_pagespeed_TZI0lRzC0E);
  </script>
  <script src="https://www.google.com/maps/place/Boulevard+Plaza+Tower+2+-+Emaar/@25.199937,55.274173,17z/data=!3m1!4b1!4m5!3m4!1s0x3e5f6828d6d49ef7:0x46d6db9c8521a81a!8m2!3d25.199937!4d55.274173"></script>
  <script>
    eval(mod_pagespeed_O0Q2ujPZhz);
  </script>
  <script>
    eval(mod_pagespeed_eSRLP6O5m$);
  </script>

  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
  </script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"7271efe268bc9cf1","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.6.0","si":100}' crossorigin="anonymous"></script>
</body>

</html>