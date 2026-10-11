<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="frontend/images/favicon.png" type="image/x-icon">

  <title>
    Giftos
  </title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="frontend/css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="frontend/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="frontend/css/responsive.css" rel="stylesheet" />
  {{-- sprite link --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <style type="text/css">
    #card-element{
      height: 50px;
      padding-top: 16px;
    }

    /* --- Universal Mobile Responsiveness Fixes --- */
    .header_section {
      width: 100%;
      z-index: 1030;
      background: #ffffff !important;
    }

    .custom_nav-container {
      padding: 10px 15px !important;
      width: 100%;
    }

    /* Fixed mobile navbar layout */
    @media (max-width: 991.98px) {
      .custom_nav-container {
        flex-direction: row !important;
        justify-content: space-between !important;
        align-items: center !important;
      }

      .custom_nav-container .navbar-brand {
        margin: 0 !important;
      }

      /* Clean & Crisp Mobile Hamburger Menu Button */
      .custom_nav-container .navbar-toggler {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        width: 44px !important;
        height: 44px !important;
        padding: 0 !important;
        border: 2px solid #f7444e !important;
        border-radius: 10px !important;
        background-color: #ffffff !important;
        cursor: pointer !important;
        box-shadow: 0 2px 8px rgba(247, 68, 78, 0.15) !important;
        transition: all 0.3s ease !important;
      }

      .custom_nav-container .navbar-toggler:hover,
      .custom_nav-container .navbar-toggler:focus {
        background-color: #fff0f1 !important;
        outline: none !important;
      }

      /* Disable old style.css multi-bar artifacts */
      .custom_nav-container .navbar-toggler span::before,
      .custom_nav-container .navbar-toggler span::after {
        display: none !important;
        content: none !important;
      }

      .custom_nav-container .navbar-toggler .hamburger-icon {
        display: flex !important;
        flex-direction: column !important;
        justify-content: space-between !important;
        width: 22px !important;
        height: 16px !important;
        margin: 0 !important;
        padding: 0 !important;
        background: transparent !important;
      }

      .custom_nav-container .navbar-toggler .hamburger-icon span {
        display: block !important;
        width: 100% !important;
        height: 2.5px !important;
        background-color: #f7444e !important;
        border-radius: 4px !important;
        margin: 0 !important;
        transition: all 0.3s ease !important;
      }

      /* Animated X state when open */
      .custom_nav-container .navbar-toggler[aria-expanded="true"] {
        background-color: #f7444e !important;
        border-color: #f7444e !important;
      }

      .custom_nav-container .navbar-toggler[aria-expanded="true"] .hamburger-icon span:nth-child(1) {
        transform: translateY(6.75px) rotate(45deg) !important;
        background-color: #ffffff !important;
      }

      .custom_nav-container .navbar-toggler[aria-expanded="true"] .hamburger-icon span:nth-child(2) {
        opacity: 0 !important;
      }

      .custom_nav-container .navbar-toggler[aria-expanded="true"] .hamburger-icon span:nth-child(3) {
        transform: translateY(-6.75px) rotate(-45deg) !important;
        background-color: #ffffff !important;
      }

      #navbarSupportedContent {
        background: #ffffff !important;
        border-radius: 14px !important;
        box-shadow: 0 10px 30px rgba(0,0,0,0.12) !important;
        padding: 20px 15px !important;
        margin-top: 12px !important;
        width: 100% !important;
      }

      #navbarSupportedContent .navbar-nav {
        text-align: center !important;
        margin-bottom: 15px !important;
      }

      #navbarSupportedContent .navbar-nav .nav-item {
        margin: 6px 0 !important;
      }

      #navbarSupportedContent .navbar-nav .nav-link {
        font-size: 16px !important;
        padding: 8px 16px !important;
        border-radius: 20px !important;
        color: #333 !important;
        transition: all 0.2s ease !important;
      }

      #navbarSupportedContent .navbar-nav .nav-item.active .nav-link,
      #navbarSupportedContent .navbar-nav .nav-link:hover {
        background-color: #f7444e !important;
        color: #ffffff !important;
      }

      .user_option {
        flex-direction: column !important;
        align-items: stretch !important;
        width: 100% !important;
        margin: 15px 0 0 0 !important;
        padding-top: 15px !important;
        border-top: 1px solid #eee !important;
        gap: 12px !important;
      }

      .user_option form {
        width: 100% !important;
        margin: 0 0 10px 0 !important;
      }

      .user_option form input[type="search"] {
        width: 100% !important;
        font-size: 14px !important;
        padding: 10px 20px !important;
      }

      .user_option .mobile-action-bar {
        display: flex !important;
        justify-content: space-around !important;
        align-items: center !important;
        width: 100% !important;
        gap: 10px !important;
      }

      .slider_section .img-box img {
        width: 100% !important;
        max-width: 320px !important;
        height: auto !important;
      }

      .slider_section .detail-box {
        text-align: center !important;
        padding: 15px 0 !important;
      }

      .slider_section .detail-box h1 {
        font-size: 2.2rem !important;
      }
    }

    @media (max-width: 576px) {
      .slider_section .detail-box h1 {
        font-size: 1.8rem !important;
      }

      .shop_section .box {
        margin-bottom: 20px !important;
      }
    }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section sticky-top shadow-sm" style="background: rgba(255,255,255,0.95); backdrop-filter: blur(10px); transition: all 0.3s ease;">
      <nav class="navbar navbar-expand-lg custom_nav-container py-3">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('user.latestproduct')}}">
          <span style="font-size: 26px; font-weight: 800; background: linear-gradient(135deg, #f7444e 0%, #ff6b6b 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">
            Giftos<span style="font-size: 14px; font-weight: 500; color: #6c757d; margin-left: 4px;">Store</span>
          </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <div class="hamburger-icon">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item {{ request()->routeIs('user.latestproduct') ? 'active' : '' }}">
              <a class="nav-link font-weight-bold" href="{{ route('user.latestproduct')}}">Home</a>
            </li>
            <li class="nav-item {{ request()->routeIs('index') ? 'active' : '' }}">
              <a class="nav-link font-weight-bold" href="{{ route('index')}}">All Products</a>
            </li>
            <li class="nav-item {{ request()->routeIs('user.whyus') ? 'active' : '' }}">
              <a class="nav-link font-weight-bold" href="{{ route('user.whyus')}}">Why Us</a>
            </li>
            <li class="nav-item {{ request()->routeIs('user.contactus') ? 'active' : '' }}">
              <a class="nav-link font-weight-bold" href="{{ route('user.contactus')}}">Contact Us</a>
            </li>
          </ul>

          <div class="user_option d-flex align-items-center">
            <!-- Search Form -->
            <form action="{{ route('user.searchproduct')}}" method="GET" class="form-inline d-flex align-items-center position-relative mb-2 mb-lg-0 mr-lg-3">
              @csrf
              <input type="search" name="search" placeholder="Search products..." class="form-control form-control-sm pr-4 rounded-pill w-100" style="border: 1px solid #ddd; padding: 7px 16px; font-size: 13px;">
              <button class="btn p-0 position-absolute" type="submit" style="right: 14px; top: 50%; transform: translateY(-50%); border: none; background: transparent; color: #f7444e;">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>

            <div class="mobile-action-bar d-flex align-items-center justify-content-center justify-content-lg-end flex-wrap gap-2">
              <a href="{{ route('user.viewcart')}}" class="position-relative text-dark text-decoration-none mx-2 py-1" title="View Cart">
                <i class="fa fa-shopping-bag" style="font-size: 20px; color: #333;" aria-hidden="true"></i>
                <span class="badge rounded-pill bg-danger text-white position-absolute" style="top: -6px; right: -12px; font-size: 11px; padding: 3px 6px;">{{ $cart_pro_count }}</span>
              </a>

              @if (Auth::check())
                @if(Auth::user()->role =='admin')
                  <a href="{{ route('admin.dashboard')}}" class="btn btn-sm btn-outline-danger rounded-pill px-3 font-weight-bold">
                    <i class="fa fa-tachometer mr-1" aria-hidden="true"></i> Admin Panel
                  </a>
                @else
                  <a href="{{ route('dashboard')}}" class="btn btn-sm btn-outline-secondary rounded-pill px-3 font-weight-bold">
                    <i class="fa fa-user-circle mr-1" aria-hidden="true"></i> {{ Auth::user()->name }}
                  </a>
                @endif
                <a href="{{ route('My_Order')}}" class="text-dark font-weight-bold text-decoration-none px-2" style="font-size: 13px;">
                  <i class="fa fa-box mr-1"></i> My Orders
                </a>
              @else
                <a href="{{ route('login')}}" class="text-dark font-weight-bold text-decoration-none px-2" style="font-size: 14px;">
                  <i class="fa fa-sign-in mr-1"></i> Login
                </a>
                <a href="{{ route('register')}}" class="btn btn-sm btn-danger rounded-pill px-3 font-weight-bold shadow-sm" style="background-color: #f7444e; border-color: #f7444e;">
                  Sign Up
                </a>
              @endif
            </div>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
    <!-- slider section (Shown only on Home Page) -->
    @if(request()->routeIs('user.latestproduct'))
    <section class="slider_section">
      <div class="slider_container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-7">
                    <div class="detail-box"> 
                      <h1>
                        Welcome To Our <br>
                        Gift Shop
                      </h1>
                      <p>
                        Sequi perspiciatis nulla reiciendis, rem, tenetur impedit, eveniet non necessitatibus error distinctio mollitia suscipit. Nostrum fugit doloribus consequatur distinctio esse, possimus maiores aliquid repellat beatae cum, perspiciatis enim, accusantium perferendis.
                      </p>
                      <a href="{{ route('index') }}">
                        Shop Now
                      </a>
                    </div>
                  </div>
                  <div class="col-md-5 ">
                    <div class="img-box">
                      <img style="width:600px" src="frontend/images/image3.jpeg" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          
        </div>
      </div>
    </section>
    @endif
    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->

    @yield('latest_product')

    @yield('add_product_view')

    @yield('search_product')

    @yield('product_details')

    @yield('View_cart')

    @yield('my_order')

    @yield('stripe_view')

    @yield('why_us_view')

    @yield('contact_us_view')
  <!-- end shop section -->

  <!-- info section -->

  <!-- info and footer section -->
  <section id="contact" class="info_section pt-5 pb-3" style="background: #191919; color: #fff;">
    <div class="container py-4">
      <div class="row gy-4">
        <div class="col-md-6 col-lg-3">
          <h5 style="color: #fff; font-weight: 700; margin-bottom: 20px;">
            Giftos<span style="color: #f7444e;">Store</span>
          </h5>
          <p style="color: #aaa; font-size: 14px; line-height: 1.7;">
            Your one-stop destination for curated gifts, premium accessories, fashion essentials, and festive collections crafted with love.
          </p>
          <div class="d-flex gap-2 mt-3">
            <a href="#" class="btn btn-sm btn-outline-light rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;"><i class="fa fa-facebook"></i></a>
            <a href="#" class="btn btn-sm btn-outline-light rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;"><i class="fa fa-instagram"></i></a>
            <a href="#" class="btn btn-sm btn-outline-light rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;"><i class="fa fa-twitter"></i></a>
            <a href="#" class="btn btn-sm btn-outline-light rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;"><i class="fa fa-linkedin"></i></a>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <h5 style="color: #fff; font-weight: 700; margin-bottom: 20px;">Quick Links</h5>
          <ul class="list-unstyled" style="font-size: 14px; line-height: 2.2;">
            <li><a href="{{ route('user.latestproduct') }}" style="color: #bbb; text-decoration: none;">Home Page</a></li>
            <li><a href="{{ route('index') }}" style="color: #bbb; text-decoration: none;">Explore All Products</a></li>
            <li><a href="{{ route('user.viewcart') }}" style="color: #bbb; text-decoration: none;">Shopping Cart</a></li>
            <li><a href="{{ route('My_Order') }}" style="color: #bbb; text-decoration: none;">Order Tracking</a></li>
          </ul>
        </div>

        <div class="col-md-6 col-lg-3">
          <h5 style="color: #fff; font-weight: 700; margin-bottom: 20px;">Contact & Support</h5>
          <div style="color: #aaa; font-size: 14px; line-height: 2;">
            <p class="mb-2"><i class="fa fa-map-marker text-danger mr-2"></i> Gausganj Road 123, Hardoi (UP)</p>
            <p class="mb-2"><i class="fa fa-phone text-danger mr-2"></i> +91 98765 43210</p>
            <p class="mb-2"><i class="fa fa-envelope text-danger mr-2"></i> support@giftosstore.com</p>
            <p class="mb-0"><i class="fa fa-clock-o text-danger mr-2"></i> Mon - Sat: 9:00 AM - 8:00 PM</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <h5 style="color: #fff; font-weight: 700; margin-bottom: 20px;">Newsletter</h5>
          <p style="color: #aaa; font-size: 13px;">Get 10% off your first order by subscribing to our weekly deals.</p>
          <form action="#" onsubmit="event.preventDefault(); alert('Subscribed successfully!');" class="d-flex flex-column gap-2">
            <input type="email" placeholder="Your email address" class="form-control form-control-sm mb-2" required style="border-radius: 20px; padding: 10px 16px; font-size: 13px;">
            <button class="btn btn-sm btn-danger rounded-pill font-weight-bold" type="submit" style="background: #f7444e; border-color: #f7444e; padding: 8px;">
              Subscribe Now
            </button>
          </form>
        </div>
      </div>

      <hr style="border-color: #333; margin: 30px 0 20px 0;">

      <div class="d-flex flex-column flex-md-row justify-content-between align-items-center" style="font-size: 13px; color: #888;">
        <p class="mb-0">&copy; {{ date('Y') }} <strong>GiftosStore</strong>. All Rights Reserved.</p>
        <div class="d-flex gap-3 mt-2 mt-md-0">
          <span><i class="fa fa-shield text-success mr-1"></i> 100% Secure Checkout</span>
          <span class="mx-2">|</span>
          <span><i class="fa fa-truck text-info mr-1"></i> Fast Doorstep Delivery</span>
        </div>
      </div>
    </div>
  </section>
  <!-- end info and footer section -->


  <script src="frontend/js/jquery-3.4.1.min.js"></script>
  <script src="frontend/js/bootstrap.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="frontend/js/custom.js"></script>
  <script src="https://js.stripe.com/v3/"></script>
  <script type="text/javascript">
    
      var stripe = Stripe('{{ env('STRIPE_KEY') }}')
      var elements = stripe.elements();
      var cardElement = elements.create('card');
      cardElement.mount('#card-element');
    
      /*------------------------------------------
      --------------------------------------------
      Create Token Code
      --------------------------------------------
      --------------------------------------------*/
      function createToken() {
          document.getElementById("pay-btn").disabled = true;
          stripe.createToken(cardElement).then(function(result) {
    
              if(typeof result.error != 'undefined') {
                  document.getElementById("pay-btn").disabled = false;
                  alert(result.error.message);
              }
    
              /* creating token success */
              if(typeof result.token != 'undefined') {
                  document.getElementById("stripe-token-id").value = result.token.id;
                  document.getElementById('checkout-form').submit();
              }
          });
      }
  </script>
 

</body>

</html>