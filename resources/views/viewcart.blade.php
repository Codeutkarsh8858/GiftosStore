@extends('maindesign')

@section('View_cart')
    <div class="container my-4">
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Cart List</h4>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped align-middle text-center ">
                        <thead class="table-dark">
                            @if(session('cart_delete_message'))
                                <div id="delete-alert" class="alert alert-success fade show d-flex align-items-center" role="alert">
                                    <i class="bi bi-trash"></i>
                                    <div class="mx-4">
                                        {{ session('cart_delete_message')}}
                                    </div>
                                    
                                </div>
                            @endif
                            @if(session('product_addtocart_message'))
                                <div id="success-alert" class="alert alert-success fade show d-flex align-items-center" role="alert">
                                    <i class="bi bi-trash"></i>
                                    <div class="mx-4">
                                        {{ session('product_addtocart_message')}}
                                    </div>
                                    
                                </div>
                            @endif

                            <tr>
                                <th width="10%">ID</th>
                                <th>User Name</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @php
                               $price = 0; 
                            @endphp
                            
                                @forelse ($cart as $item)
                                    <tr>
                                        <td >{{  $item->id  }}</td>
                                        <td>{{ $item->user->name }}</td>
                                        <td>{{ $item->product->product_title}}</td>
                                        <td>{{ $item->product->product_price}}</td>
                                        <td><img src="{{ asset('/product_images/'.$item->product->product_image)}}" width="100px" height="100px" alt=""></td>
                                        <td>
                                            <a class="btn btn-danger " href="{{route('user.delcartdata', $item->id )}}" onclick="return confirm('are you Delete ?')">Delete</a>
                                            @php
                                                $price = $price + $item->product->product_price;
                                            @endphp
                                        </td>

                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2" class="text-danger">
                                            No cart Found.
                                        </td>
                                    </tr>
                                @endforelse
                                <tr>
                                    <td colspan="2" class="bg-warning ">Total Price</td>
                                    <td colspan="4" class="bg-info text-white"> @php echo $price @endphp</td>                                    
                                </tr>
                                <tr>
                                    <div class="btn btn-secondary my-2 ">
                                        <a href="{{route('index')}}" class="text-light">
                                        View All Products
                                        </a>
                                    </div>
                                </tr>
                        </tbody>
                        
                    </table>
                    @if(session('confirmOrder'))
                                <div id="success-alert" class="alert alert-success fade show d-flex align-items-center" role="alert">
                                    <i class="bi bi-trash"></i>
                                    <div class="mx-4">
                                        {{ session('confirmOrder')}}
                                    </div>
                                    
                                </div>
                            @endif
                    <form action="{{ route('user.confirmorder')}} " method="post">
                        @csrf
                        <input type="text" name="reciever_address" placeholder="Input your address" class="form-control" id=""><br/>
                        <input type="tel" name="reciever_phone" placeholder="Input your Phone Number" class="form-control" id=""><br/>
                        <input type="submit" class="btn btn-primary" value="Confirm Order">
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection