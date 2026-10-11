@extends('maindesign')

<base href="/public"/>

@section('product_details')

<div class="container py-5">
    <div class="card border-0 shadow-lg rounded-4">
        <div class="row p-4">
            @if (session('product_addtocart_message'))
                <div id="add-alert" class="alert alert-success  d-flex align-items-center fade show" role="alert">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    <div class="mx-4">
                        {{ session('product_addtocart_message')}}
                    </div>
                                    
                </div>
            @endif
            <!-- Product Image -->
            <div class="col-md-5 text-center">
                <img src="{{ asset('product_images/'.$product->product_image) }}"
                     class="img-fluid rounded-4"
                     style="max-height:400px; object-fit:cover;"
                     alt="">
            </div>

            <!-- Product Details -->
            <div class="col-md-7">
                <span class="badge bg-success mb-2">In Stock</span>

                <h2 class="fw-bold">
                    {{ $product->product_title }}
                </h2>

                <h3 class="text-danger fw-bold mt-3">
                    ₹ {{ $product->product_price }}
                </h3>

                <hr>

                <h5>Description</h5>
                <p class="text-muted">
                    {{ $product->product_description }}
                </p>

                <div class="mt-4">
                    <strong>Available Quantity :</strong>
                    <span class="badge bg-primary">
                        {{ $product->product_quantity }}
                    </span>
                </div>

                <div class="mt-4 d-flex align-items-center gap-3">

                    <input type="number"
                           class="form-control"
                           value="1"
                           min="1"
                           style="width:100px;">

                    <a href="{{ route('user.productaddtocart',$product->id)}}" class="btn btn-primary px-4">
                        🛒 Add To Cart
                    </a>
                    <a href="{{ route('user.stripe')}}" class="btn btn-primary px-4">
                        pay Now
                    </a>

                </div>

                <div class="mt-4">
                    <button class="btn btn-outline-danger">
                        ❤ Add To Wishlist
                    </button>
                </div>

            </div>

        </div>
    </div>
</div>

@endsection