  <style>
      .active_custom {
          color: #ffffff;
          font-weight: 700;
      }
  </style>
  <header class="header-one">
      <!--section one --->
      @if(request()->is('/'))
      <section class="mt-4 pt-4">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
              <div class="tradingview-widget-container__widget"></div>
              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                  {
                      "symbols": [{
                              "proName": "FOREXCOM:SPXUSD",
                              "title": "S&P 500"
                          },
                          {
                              "proName": "FX_IDC:EURUSD",
                              "title": "EUR/USD"
                          },
                          {
                              "proName": "BITSTAMP:BTCUSD",
                              "title": "BTC/USD"
                          },
                          {
                              "proName": "BITSTAMP:ETHUSD",
                              "title": "ETH/USD"
                          }
                      ],
                      "colorTheme": "light",
                      "isTransparent": false,
                      "displayMode": "compact",
                      "locale": "en"
                  }
              </script>
          </div>
          <!-- TradingView Widget END -->
      </section>
      @endif
      <!--end section one-->
      <!-- header-area start -->
      <div id="sticker" class="header-area hidden-xs">
          <div class="container">
              <div class="row">
                  <div class="col-md-12 col-sm-12">
                      <div class="row">
                          <!-- logo start -->
                          <div class="col-md-2 col-sm-2">
                              <div class="logo">
                                  <!-- Brand -->
                                  <a class="navbar-brand page-scroll white-logo" href="{{ url('/')}}">
                                      <img src="img/logo/logov1.png" height="50" alt="">
                                  </a>
                                  <a class="navbar-brand page-scroll black-logo" href="{{ url('/')}}">
                                      <img src="img/logo/logov1.png" alt="">
                                  </a>
                              </div>
                              <!-- logo end -->
                          </div>
                          <div class="col-md-10 col-sm-10">
                              <div class="header-right-link">
                                  <!-- search option end -->
                                  <a class="s-menu" href="{{ url('login')}}">Login</a>
                              </div>
                              <!-- mainmenu start -->
                              <nav class="navbar navbar-default">
                                  <div class="collapse navbar-collapse" id="navbar-example">
                                      <div class="main-menu">
                                          <ul class="nav navbar-nav navbar-right">
                                              <li><a href="{{ url('about')}}"> <span class="{{Request::is('about') ? 'active_custom' : null }}">About Us</span></a></li>
                                              <!-- <li><a href="{{ url('what_we_do')}}"><span class="{{Request::is('what_we_do') ? 'active_custom' : null }}">What We Do</span></a></li> -->
                                              <li><a href="{{ url('traders')}}"><span class="{{Request::is('traders') ? 'active_custom' : null }}">Traders</span></a></li>
                                              <!-- <li><a href="{{ url('investment')}}"><span class="{{Request::is('investment') ? 'active_custom' : null }}">Investment</span></a></li> -->
                                              <!-- <li><a  href="{{ url('#')}}">Pages</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="{{ url('team')}}">team</a></li>
                                                            <li><a href="{{ url('faq')}}">FAQ</a></li>
                                                            <li><a href="{{ url('review')}}">Reviews</a></li>
                                                            <li><a href="{{ url('login')}}">Login</a></li>
                                                            <li><a href="{{ url('signup')}}">Register</a></li>
                                                        </ul>
                                                    </li> -->
                                              <!-- <li><a  href="{{ url('#')}}">Blog</a>
                                                        <ul class="sub-menu">
                                                            <li><a href="{{ url('blog')}}">Blog grid</a></li>
                                                            <li><a href="{{ url('blog-sidebar')}}">Blog Sidebar</a></li>
                                                            <li><a href="{{ url('blog-details')}}">Blog Details</a></li>
                                                        </ul>
                                                    </li> -->
                                              <li><a href="{{ url('contact')}}"><span class="{{Request::is('contact') ? 'active_custom' : null }}">Contact Us</span></a></li>
                                          </ul>
                                      </div>
                                  </div>
                              </nav>
                              <!-- mainmenu end -->
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- header-area end -->
      <!-- mobile-menu-area start -->
      <div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
          <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <div class="mobile-menu">
                          <div class="logo">
                              <a href="{{ url('/')}}"><img src="img/logo/logov1.png" alt="" /></a>
                          </div>
                          <nav id="dropdown">
                              <ul>
                                  <li><a class="pages" href="{{ url('/')}}">Home</a>
                                  </li>
                                  <li><a href="{{ url('about')}}">About Us</a></li>
                                  <!-- <li><a href="{{ url('investment')}}">What We Do</a></li> -->
                                  <li><a href="{{ url('traders')}}">Traders</a>
                                  </li>
                                  <!-- <li><a href="{{ url('investment')}}">Investment</a> -->
                                  </li>
                                  <li><a href="{{ url('contact')}}">Contact Us</a></li>
                              </ul>
                          </nav>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- mobile-menu-area end -->
  </header>
  <!-- header end -->