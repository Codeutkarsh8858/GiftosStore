@extends('maindesign')

@section('add_product_view')
  <!-- All Products Header Banner -->
  <section class="py-5" style="background: linear-gradient(135deg, #2b5876 0%, #4e4376 100%); color: #fff;">
    <div class="container py-3 text-center">
      <h1 class="display-4 font-weight-bold mb-2" style="color: #fff;">Explore All Products</h1>
      <p class="lead max-w-xl mx-auto" style="color: rgba(255,255,255,0.85); font-size: 16px;">
        Browse through our full catalog of curated gifts, luxury watches, leather handbags, and festive specials.
      </p>
    </div>
  </section>

  <!-- Products Showcase -->
  <section class="shop_section layout_padding bg-white">
    <div class="container">
      <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mb-4">
        <div>
          <h3 class="font-weight-bold mb-1">Catalog Items ({{ count($products) }})</h3>
          <p class="text-muted small mb-0">Showing all verified items with direct doorstep delivery</p>
        </div>
        <div class="mt-3 mt-md-0">
          <a href="{{ route('user.latestproduct') }}" class="btn btn-outline-secondary rounded-pill px-4 font-weight-bold btn-sm">
            &larr; Back to Home
          </a>
        </div>
      </div>

      <div class="row">
        @forelse ($products as $product)
          <div class="col-sm-6 col-md-4 col-lg-3 mb-4">
            <div class="box h-100 shadow-sm border-0 rounded-3 position-relative d-flex flex-column justify-content-between" style="padding: 15px; background: #fff; transition: transform 0.3s ease;">
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
                    <small class="text-muted"><i class="fa fa-star text-warning"></i> 4.9</small>
                  </div>
                </div>
                <div class="new position-absolute" style="top: 10px; right: 10px;">
                  <span class="badge bg-danger text-white rounded-pill px-2 py-1">In Stock</span>
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
            <p class="text-muted">No products available at this moment.</p>
          </div>
        @endforelse
      </div>
    </div>
  </section>
@endsection