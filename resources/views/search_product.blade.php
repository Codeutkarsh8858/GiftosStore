@extends('maindesign')

@section('search_product')
    <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Search Products
        </h2>
      </div>
      <div class="row">
        @foreach ($search as $product)
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="box">
              <a href="{{ route('user.productdetails',$product->id)}}">
                <div class="img-box">
                  <img style="mix-blend-mode: darken;" src="{{ asset('product_images/'.$product->product_image)}}" alt="">
                </div>
                <div class="detail-box">
                  <h6>
                    {{ $product->product_title}}
                  </h6>
                  <h6>
                    Price
                    <span>
                     &#8377; {{ $product->product_price}}
                    </span>
                  </h6>
                </div>
                <div class="new">
                  <span>
                    New
                  </span>
                </div>
              </a>
            </div>
          </div>
        @endforeach
      </div>
      <div class="btn-box">
        <a href="{{route('index')}}">
          View All Products
        </a>
      </div>
    </div>
  </section>
@endsection