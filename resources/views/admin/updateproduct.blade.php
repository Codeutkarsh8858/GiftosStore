@extends('admin.maindesign')

<base href="/public"/>@section('update_product')
    @if (session('product_add_message'))
        <div id="add-alert" class="alert alert-success  d-flex align-items-center fade show" role="alert">
            <i class="bi bi-check-circle-fill me-2"></i>
            <div class="mx-4">
                {{ session('product_add_message')}}
            </div>
               
        </div>
    @endif

    <div class="container py-1">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-11">

                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-success text-white text-center py-3">
                        <h3 class="mb-0">Update Product</h3>
                    </div>

                    <div class="card-body p-4">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                        <form action="{{ route('admin.postupdateproduct',$product->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-bold">Product Title</label>
                                <input type="text" name="product_title"
                                    class="form-control"
                                    value="{{$product->product_title}}">
                                @error('product_title')
                                 <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Product Description</label>
                                <textarea name="product_description"
                                    class="form-control"
                                    rows="4">{{$product->product_description}}</textarea>
                                @error('product_description')
                                 <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Product Quantity</label>
                                <input type="number" name="product_quantity"
                                    class="form-control"
                                    value="{{$product->product_quantity}}">
                                @error('product_quantity')
                                 <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Product Price</label>
                                <input type="number" name="product_price"
                                    class="form-control"
                                    value="{{$product->product_price}}">
                                @error('product_price')
                                 <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3" >
                                <img src="{{ asset('product_images/'.$product->product_image)}}" alt="" width="100px" height="100px" id="product_img">
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Product Image</label>
                                <input type="file" name="product_image"
                                    onchange="document.querySelector('#product_img').src=window.URL.createObjectURL(this.files[0])"
                                    accept=".jpg,.png,.jpeg"
                                    class="form-control"
                                    value="{{$product->product_image}}">
                                @error('product_image')
                                 <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold">Product Category</label>

                                <select name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                            {{ $category->category }}
                                        </option>
                                    @endforeach
                                </select>

                                @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-success px-5">
                                    Update Product
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    
@endsection



                            