@extends('maindesign')

@section('my_order')
    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Order List</h4>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-striped align-middle text-center">
                        <thead class="table-dark">
                            <tr>
                                <th width="5%">ID</th>
                                <th>Reciever Name</th>
                                <th>Reciever Address</th>
                                <th>Reciever Phone</th>
                                <th>Product Name</th>
                                <th>Product price</th>
                                <th>Product Image</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody >
                            @forelse ($order as $order)
                                <tr class="table-active  align-middle text-dark" >
                                    <td >{{$order->id}}</td>
                                    <td>{{$order->user->name}}</td>
                                    
                                    <td>{{ $order->reciever_address}}</td> 
                                    <td>{{ $order->reciever_phone}}</td>
                                    <td>{{ $order->product->product_title}}</td>
                                    <td>{{ $order->product->product_price}}</td>
                                    <td><img src="{{ asset('product_images/'.$order->product->product_image)}}" width="100" class="img-fluid rounded"></td>
                                    <td>{{ $order->status}}</td>
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