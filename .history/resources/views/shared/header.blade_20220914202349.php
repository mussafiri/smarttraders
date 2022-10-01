<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand logo-img" href="{{ url('/') }}"><img src="{{ asset('images/logosmarttraders.png') }}" alt="" class="img-fluid"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item @if(request()->is('/')){{ 'active'}} @endif"><a href="{{ url('/') }}" class="nav-link">Home</a></li>
                <li class="nav-item @if(strpos($_SERVER['REQUEST_URI'], 'aboutus')) {{ 'active'}} @endif"><a href="{{ url('/aboutus') }}" class="nav-link">About</a></li>
                <li class="nav-item @if(strpos($_SERVER['REQUEST_URI'], 'investments')) {{ 'active'}} @endif"><a href="{{ url('/investments') }}" class="nav-link">Our Investments</a></li>
                <li class="nav-item @if(strpos($_SERVER['REQUEST_URI'], 'products')) {{ 'active'}} @endif"><a href="{{ url('/products') }}" class="nav-link">Our Products</a></li>
                <li class="nav-item @if(strpos($_SERVER['REQUEST_URI'], 'contactus')) {{ 'active'}} @endif"><a href="{{ url('/contactus') }}" class="nav-link">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>