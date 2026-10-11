@extends('admin.maindesign')

@section('view_product')
     <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Product List</h4>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <div class="search-panel">
                        <div class="search-inner d-flex align-items-center justify-content-center">
                            <form  action="{{ route('admin.searchproduct')}}" method="POST">
                            <div class="form-group">
                                <input type="search" name="search" placeholder="What are you searching for...">
                                <button type="submit" class="submit">Search</button>
                            </div>
                            </form>
                            <div class="close-btn mx-4 "> <i class="fa fa-close  "></i></div>
                        </div>
                    </div>
                    <div class="mt-3">
                        {{ $products->links()}}
                    </div>
                    <table class="table table-bordered table-hover table-striped align-middle text-center">
                        <thead class="table-dark">
                            @if (session('delete_product_message'))
                                <div id="delete-alert" class="alert alert-success fade show d-flex align-items-center" role="alert">
                                    <i class="bi bi-trash"></i>
                                    <div class="mx-4">
                                        {{ session('delete_product_message')}}
                                    </div>
                                    
                                </div>
                            @endif

                             @if (session('product_add_message'))
                                <div id="add-alert" class="alert alert-success  d-flex align-items-center fade show" role="alert">
                                    <i class="bi bi-check-circle-fill me-2"></i>
                                    <div class="mx-4">
                                        {{ session('product_add_message')}}
                                    </div>
                                    
                                </div>
                            @endif

                            @if(session('update_product_message'))
                                <div id="add-alert" class="alert alert-success  d-flex align-items-center fade show" role="alert">
                                    <i class="bi bi-check-circle-fill me-2"></i>
                                    <div class="mx-4">
                                        {{ session('update_product_message')}}
                                    </div>
                                    
                                </div>
                            @endif
                            
                            <tr>
                                <th width="5%">ID</th>
                                <th>Product Title</th>
                                <th>Product Description</th>
                                <th>Product Quantity</th>
                                <th>Product Price</th>
                                <th>Product Image</th>
                                <th>Product Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody >
                            @forelse ($products as $product)
                                <tr class="table-active  align-middle" >
                                    <td >{{$product->id}}</td>
                                    <td>{{$product->product_title}}</td>
                                    {{-- // limited data database se laye --}}
                                    <td>{{Str::limit($product->product_description,100)}}</td> 
                                    <td>{{$product->product_quantity}}</td>
                                    <td>{{$product->product_price}}</td>
                                    <td><img src="{{ asset('product_images/'.$product->product_image)}}" width="100" class="img-fluid rounded"></td>
                                    <td>{{$product->category->category}}</td>
                                    <td>
                                        <a class="btn btn-warning my-1" href="{{route('admin.productdetail',$product->id)}}">View</a>
                                        <a class="btn btn-success my-1" href="{{route('admin.updateproduct',$product->id)}}">Update</a>
                                        <a class="btn btn-danger my-1" href="{{ route('admin.deleteproduct',$product->id)}}" onclick="return confirm('are you Delete ?')">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-danger">
                                        No Product Found
                                    </td>
                                </tr>  
                            @endforelse                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection