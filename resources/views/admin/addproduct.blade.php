@extends('admin.maindesign')

@section('add_product')
    <div class="container py-1">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-11">

                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-success text-white text-center py-3">
                        <h3 class="mb-0">Add Product</h3>
                    </div>

                    <div class="card-body p-4">

                        <form action="{{ route('admin.postaddproduct')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-3">
                                <label class="form-label fw-bold">Product Title</label>
                                <input type="text" name="product_title"
                                    class="form-control"
                                    placeholder="Enter product title">
                               
                                 <span class="text-danger">{{ $message }}</span>
                                
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Product Description</label>
                                <textarea name="product_description"
                                    class="form-control"
                                    rows="4"
                                    placeholder="Enter product description"></textarea>
                                @error('product_description')
                                 <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Product Quantity</label>
                                <input type="number" name="product_quantity"
                                    class="form-control"
                                    placeholder="Enter product quantity">
                                @error('product_quantity')
                                 <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-bold">Product Price</label>
                                <input type="number" name="product_price"
                                    class="form-control"
                                    placeholder="Enter product price">
                                @error('product_price')
                                 <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold">Product Image</label>
                                <input type="file" name="product_image"
                                    class="form-control"
                                    placeholder="choose product Image">
                                @error('product_image')
                                 <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-4">
                                <label class="form-label fw-bold">Product Category</label>
                                <select name="product_category" class="form-control" >
                                    <option selected>Select  category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{ $category->category}}</option>
                                    @endforeach
                                </select>                           
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-success px-5">
                                    Add Product
                                </button>
                            </div>

                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
    
@endsection