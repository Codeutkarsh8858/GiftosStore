@extends('admin.maindesign')

<base href="/public"/>@section('product_details')

    <div class="container py-5">

        <div class="card shadow-lg border-0 rounded-4">
            <div class="card-header bg-warning text-danger text-center">
                <h3>Product Details</h3>
            </div>

            <div class="card-body">
                    <!-- Product Image -->
                    <div class="col-md-5 text-center">
                        <img src="{{ asset('product_images/'.$product->product_image) }}"
                            class="img-fluid rounded shadow"
                            style="max-height:350px;">
                    </div>

                    <!-- Product Info -->
                    <div class="col-md-7">

                        <h2 class="fw-bold text-success">
                            {{ $product->product_title }}
                        </h2>

                        <hr>

                        <p>
                            <strong>Description :</strong><br>
                            {{ $product->product_description }}
                        </p>

                        <p>
                            <strong>Category :</strong>
                            <span class="badge bg-info text-light">
                                {{ $product->category->category }}
                            </span>
                        </p>

                        <p>
                            <strong>Quantity :</strong>
                            {{ $product->product_quantity }}
                        </p>

                        <p>
                            <strong>Price :</strong>
                            <span class="text-danger fw-bold fs-4">
                                ₹{{ $product->product_price }}
                            </span>
                        </p>

                        <p>
                            <strong>Created At :</strong>
                            {{ $product->created_at->format('d M Y') }}
                        </p>

                        <div class="mt-4">

                            <a href="{{ route('admin.updateproduct',$product->id) }}"
                            class="btn btn-success">
                                Update Product
                            </a>

                            <a href="{{ route('admin.viewproduct') }}"
                            class="btn btn-secondary">
                                Back
                            </a>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>

@endsection