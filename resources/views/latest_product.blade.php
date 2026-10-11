@extends('maindesign')

@section('latest_product')
  <!-- 1. Features Highlight Bar -->
  <section class="py-4 bg-white border-bottom shadow-sm">
    <div class="container">
      <div class="row text-center gy-3">
        <div class="col-6 col-md-3">
          <div class="d-flex align-items-center justify-content-center gap-3">
            <div style="width: 50px; height: 50px; border-radius: 50%; background: #fff0f1; display: flex; align-items: center; justify-content: center; color: #f7444e; font-size: 22px;">
              <i class="fa fa-truck"></i>
            </div>
            <div class="text-left ml-2">
              <h6 class="mb-0 font-weight-bold" style="font-size: 15px;">Free Shipping</h6>
              <small class="text-muted">On orders over &#8377;999</small>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="d-flex align-items-center justify-content-center gap-3">
            <div style="width: 50px; height: 50px; border-radius: 50%; background: #e8f5e9; display: flex; align-items: center; justify-content: center; color: #2e7d32; font-size: 22px;">
              <i class="fa fa-shield"></i>
            </div>
            <div class="text-left ml-2">
              <h6 class="mb-0 font-weight-bold" style="font-size: 15px;">Secure Payment</h6>
              <small class="text-muted">Stripe & UPI Protected</small>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="d-flex align-items-center justify-content-center gap-3">
            <div style="width: 50px; height: 50px; border-radius: 50%; background: #e3f2fd; display: flex; align-items: center; justify-content: center; color: #1565c0; font-size: 22px;">
              <i class="fa fa-refresh"></i>
            </div>
            <div class="text-left ml-2">
              <h6 class="mb-0 font-weight-bold" style="font-size: 15px;">Easy Returns</h6>
              <small class="text-muted">7-Day Hassle-free return</small>
            </div>
          </div>
        </div>
        <div class="col-6 col-md-3">
          <div class="d-flex align-items-center justify-content-center gap-3">
            <div style="width: 50px; height: 50px; border-radius: 50%; background: #fff8e1; display: flex; align-items: center; justify-content: center; color: #f57f17; font-size: 22px;">
              <i class="fa fa-headphones"></i>
            </div>
            <div class="text-left ml-2">
              <h6 class="mb-0 font-weight-bold" style="font-size: 15px;">24/7 Support</h6>
              <small class="text-muted">Dedicated expert care</small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 2. Trending / Featured Categories Section -->
  <section id="categories" class="py-5" style="background: #fafafa;">
    <div class="container">
      <div class="heading_container heading_center mb-4">
        <h2>Shop By Category</h2>
        <p class="text-muted">Explore handpicked selections curated just for your style and moments</p>
      </div>
      <div class="row g-4 justify-content-center">
        <div class="col-md-4 col-sm-6 mb-3">
          <div class="card border-0 rounded-4 shadow-sm overflow-hidden text-white position-relative" style="background: linear-gradient(135deg, #2b5876 0%, #4e4376 100%); min-height: 180px;">
            <div class="card-body p-4 d-flex flex-column justify-content-between">
              <div>
                <span class="badge bg-warning text-dark px-3 py-1 rounded-pill mb-2">Popular</span>
                <h4 class="font-weight-bold mb-1">Luxury Watches</h4>
                <p class="small text-white-50">Precision chronographs & straps</p>
              </div>
              <div>
                <a href="{{ route('index') }}" class="btn btn-sm btn-light rounded-pill px-3 font-weight-bold text-dark">
                  Discover Now &rarr;
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-3">
          <div class="card border-0 rounded-4 shadow-sm overflow-hidden text-white position-relative" style="background: linear-gradient(135deg, #f857a6 0%, #ff5858 100%); min-height: 180px;">
            <div class="card-body p-4 d-flex flex-column justify-content-between">
              <div>
                <span class="badge bg-white text-danger px-3 py-1 rounded-pill mb-2">Trending</span>
                <h4 class="font-weight-bold mb-1">Bags & Accessories</h4>
                <p class="small text-white-50">Handcrafted elegance & leather</p>
              </div>
              <div>
                <a href="{{ route('index') }}" class="btn btn-sm btn-light rounded-pill px-3 font-weight-bold text-dark">
                  Discover Now &rarr;
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-3">
          <div class="card border-0 rounded-4 shadow-sm overflow-hidden text-white position-relative" style="background: linear-gradient(135deg, #00b09b 0%, #96c93d 100%); min-height: 180px;">
            <div class="card-body p-4 d-flex flex-column justify-content-between">
              <div>
                <span class="badge bg-dark px-3 py-1 rounded-pill mb-2">New Season</span>
                <h4 class="font-weight-bold mb-1">Festive Gift Sets</h4>
                <p class="small text-white-50">Curated gifts with custom wrapping</p>
              </div>
              <div>
                <a href="{{ route('index') }}" class="btn btn-sm btn-light rounded-pill px-3 font-weight-bold text-dark">
                  Discover Now &rarr;
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 3. Latest Products Grid Section -->
  <section class="shop_section layout_padding bg-white">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>Latest Collection</h2>
        <p class="text-muted">Freshly arrived products available at exclusive introductory prices</p>
      </div>
      <div class="row">
        @forelse ($products as $product)
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="box h-100 shadow-sm border-0 rounded-3 position-relative d-flex flex-column justify-content-between" style="transition: transform 0.3s ease, box-shadow 0.3s ease; padding: 15px;">
              <a href="{{ route('user.productdetails',$product->id)}}" class="text-decoration-none text-dark">
                <div class="img-box position-relative" style="height: 220px; display: flex; align-items: center; justify-content: center; background: #fbfbfb; border-radius: 8px;">
                  <img style="max-height: 180px; max-width: 90%; object-fit: contain; mix-blend-mode: multiply;" src="{{ asset('product_images/'.$product->product_image)}}" alt="{{ $product->product_title }}">
                </div>
                <div class="detail-box pt-3">
                  <h6 class="font-weight-bold mb-1" style="font-size: 15px; min-height: 40px;">
                    {{ $product->product_title }}
                  </h6>
                  <div class="d-flex justify-content-between align-items-center mt-2">
                    <span class="h6 mb-0 text-danger font-weight-bold">
                      &#8377; {{ number_format($product->product_price, 2) }}
                    </span>
                    <small class="text-muted"><i class="fa fa-star text-warning"></i> 4.8 (120+)</small>
                  </div>
                </div>
                <div class="new position-absolute" style="top: 10px; right: 10px;">
                  <span class="badge bg-danger text-white rounded-pill px-2 py-1">New</span>
                </div>
              </a>
              <div class="mt-3">
                <a href="{{ route('user.productaddtocart', $product->id) }}" class="btn btn-sm btn-outline-danger w-100 rounded-pill font-weight-bold">
                  <i class="fa fa-shopping-cart mr-1"></i> Add to Cart
                </a>
              </div>
            </div>
          </div>
        @empty
          <div class="col-12 text-center py-5">
            <p class="text-muted">No products found at the moment.</p>
          </div>
        @endforelse
      </div>
      <div class="btn-box mt-4">
        <a href="{{route('index')}}" class="btn px-4 py-2 font-weight-bold shadow-sm" style="background: #f7444e; color: #fff; border-radius: 30px;">
          View All Products &rarr;
        </a>
      </div>
    </div>
  </section>

  <!-- 4. Special Promo Banner (Festival / Seasonal Offer) -->
  <section class="py-5" style="background: linear-gradient(rgba(247, 68, 78, 0.92), rgba(220, 53, 69, 0.95)), url('{{ asset('frontend/images/saving-img.png') }}') center/cover no-repeat; color: #fff;">
    <div class="container py-4">
      <div class="row align-items-center">
        <div class="col-lg-7 text-center text-lg-left mb-4 mb-lg-0">
          <span class="badge bg-warning text-dark font-weight-bold px-3 py-1 rounded-pill mb-3">Limited Period Offer</span>
          <h2 class="display-5 font-weight-bold mb-3" style="color: #fff;">Special Festive Sale: Up To 40% OFF!</h2>
          <p class="lead mb-4" style="color: rgba(255,255,255,0.9); font-size: 16px;">
            Upgrade your festive celebration with premium gift collections, luxury items, and express doorstep delivery across India.
          </p>
          <div class="d-flex flex-wrap gap-3 justify-content-center justify-content-lg-start">
            <a href="{{ route('index') }}" class="btn btn-light btn-lg px-4 rounded-pill font-weight-bold text-danger shadow">
              Shop Festive Sale Now
            </a>
            <a href="{{ route('user.latestproduct') }}#categories" class="btn btn-outline-light btn-lg px-4 rounded-pill font-weight-bold ml-2">
              Explore Collections
            </a>
          </div>
        </div>
        <div class="col-lg-5 text-center">
          <img src="{{ asset('frontend/images/gifts.png') }}" alt="Gifts" class="img-fluid" style="max-height: 320px; filter: drop-shadow(0px 10px 20px rgba(0,0,0,0.3));">
        </div>
      </div>
    </div>
  </section>

  <!-- 5. Why Choose Us Section -->
  <section id="why-us" class="py-5 bg-light">
    <div class="container py-3">
      <div class="heading_container heading_center mb-5">
        <h2>Why Customers Love Giftos</h2>
        <p class="text-muted">We deliver joy, reliability, and quality with every single package.</p>
      </div>
      <div class="row g-4 text-center">
        <div class="col-md-4 mb-4">
          <div class="bg-white p-4 rounded-4 shadow-sm h-100">
            <div class="mb-3">
              <img src="{{ asset('frontend/images/high-quality.svg') }}" alt="Quality" style="width: 55px; height: 55px;">
            </div>
            <h5 class="font-weight-bold mb-2">100% Genuine Quality</h5>
            <p class="text-muted small">Every item is verified and handpicked to ensure top notch build, elegance, and durability.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="bg-white p-4 rounded-4 shadow-sm h-100">
            <div class="mb-3">
              <img src="{{ asset('frontend/images/truck.svg') }}" alt="Fast" style="width: 55px; height: 55px;">
            </div>
            <h5 class="font-weight-bold mb-2">Super Express Delivery</h5>
            <p class="text-muted small">Lightning fast shipping with live updates so your gifts arrive right on time for your special moments.</p>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="bg-white p-4 rounded-4 shadow-sm h-100">
            <div class="mb-3">
              <img src="{{ asset('frontend/images/free.svg') }}" alt="Value" style="width: 55px; height: 55px;">
            </div>
            <h5 class="font-weight-bold mb-2">Best Price Guarantee</h5>
            <p class="text-muted small">Direct manufacturer deals allowing us to pass the biggest savings and discount benefits to you.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- 6. Customer Testimonials -->
  <section class="py-5 bg-white">
    <div class="container py-3">
      <div class="heading_container heading_center mb-4">
        <h2>What Our Shoppers Say</h2>
        <p class="text-muted">Real stories from our happy customers across the country</p>
      </div>
      <div class="row g-4">
        <div class="col-md-4 mb-3">
          <div class="p-4 rounded-3 border bg-light h-100">
            <div class="mb-2 text-warning">
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </div>
            <p class="text-muted small italic">"Ordered a gift hamper for my sister's birthday. The packaging was absolutely royal and arrived 1 day before expected!"</p>
            <div class="d-flex align-items-center mt-3">
              <div class="rounded-circle bg-danger text-white d-flex align-items-center justify-content-center font-weight-bold" style="width: 40px; height: 40px;">R</div>
              <div class="ml-2">
                <h6 class="mb-0 font-weight-bold" style="font-size: 14px;">Rahul Sharma</h6>
                <small class="text-muted">Verified Buyer, Delhi</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="p-4 rounded-3 border bg-light h-100">
            <div class="mb-2 text-warning">
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </div>
            <p class="text-muted small italic">"The chronograph watch exceeded my expectations. Smooth finish, premium leather strap, and very easy checkout."</p>
            <div class="d-flex align-items-center mt-3">
              <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center font-weight-bold" style="width: 40px; height: 40px;">P</div>
              <div class="ml-2">
                <h6 class="mb-0 font-weight-bold" style="font-size: 14px;">Pooja Verma</h6>
                <small class="text-muted">Verified Buyer, Lucknow</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <div class="p-4 rounded-3 border bg-light h-100">
            <div class="mb-2 text-warning">
              <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
            </div>
            <p class="text-muted small italic">"Superb customer service and great pricing. Best online shopping experience for accessories and festive gifts."</p>
            <div class="d-flex align-items-center mt-3">
              <div class="rounded-circle bg-success text-white d-flex align-items-center justify-content-center font-weight-bold" style="width: 40px; height: 40px;">A</div>
              <div class="ml-2">
                <h6 class="mb-0 font-weight-bold" style="font-size: 14px;">Ankit Gupta</h6>
                <small class="text-muted">Verified Buyer, Kanpur</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection