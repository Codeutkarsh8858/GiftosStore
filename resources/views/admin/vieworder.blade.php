@extends('admin.maindesign')

@section('View_order')
    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Order List</h4>
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
                    {{-- <div class="mt-3">
                        {{ $products->links()}}
                    </div> --}}
                    <table class="table table-bordered table-hover table-striped align-middle text-center">
                        <thead class="table-dark">
                            @if(session('status_update_message'))
                                <div id="add-alert" class="alert alert-success  d-flex align-items-center fade show" role="alert">
                                    <i class="bi bi-check-circle-fill me-2"></i>
                                    <div class="mx-4">
                                        {{ session('status_update_message')}}
                                    </div>
                                    
                                </div>
                            @endif
                            @if(session('order_delete'))
                                 <div id="add-alert" class="alert alert-success  d-flex align-items-center fade show" role="alert">
                                    <i class="bi bi-check-circle-fill me-2"></i>
                                    <div class="mx-4">
                                        {{ session('order_delete')}}
                                    </div>
                                    
                                </div>
                            @endif
                            <tr>
                                <th width="5%">ID</th>
                                <th>Reciever Name</th>
                                <th>Reciever Address</th>
                                <th>Reciever Phone</th>
                                <th>Product Name</th>
                                <th>Product price</th>
                                <th>Product Image</th>
                                <th>Status</th>
                                <th>details</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody >
                            @forelse ($orders as $order)
                                <tr class="table-active  align-middle text-warning" >
                                    <td >{{$order->id}}</td>
                                    <td>{{$order->user->name}}</td>
                                    
                                    <td>{{ $order->reciever_address}}</td> 
                                    <td>{{ $order->reciever_phone}}</td>
                                    <td>{{ $order->product->product_title}}</td>
                                    <td>{{ $order->product->product_price}}</td>
                                    <td><img src="{{ asset('product_images/'.$order->product->product_image)}}" width="100" class="img-fluid rounded"></td>
                                    
                                    <td>
                                        <form action="{{ route('admin.statuscheck',$order->id)}}" method="post">
                                            @csrf
                                            <select name="status" id="" class="btn btn-warning mb-3">
                                                <option value="{{$order->status}}" selected hidden>{{$order->status}}</option>
                                                @if ($order->status != 'Delivered')
                                                    <option value="Delivered">Delivered</option>
                                                @endif
                                                @if($order->status != 'Processing')
                                                    <option value="Processing">Processing</option>
                                                @endif

                                                @if($order->status != 'Shipped')
                                                    <option value="Shipped">Shipped</option>
                                                @endif
                                                @if ($order->status != 'pending')
                                                    <option value="pending">Pending</option>
                                                @endif
                                                
                                            </select>
                                            <input type="submit" value="submit">
                                        </form>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.downloadpdf',$order->id)}}" class="btn btn-info">PDF Download</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.deleteorder',$order->id)}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="2" class="text-danger">
                                        No Orders Found
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