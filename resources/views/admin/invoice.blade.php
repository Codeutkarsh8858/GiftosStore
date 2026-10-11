<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Invoice</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background:#f5f5f5;
        }

        .container{
            width:700px;
            margin:auto;
            background:#fff;
            border:1px solid #ddd;
            border-radius:10px;
            padding:20px;
        }

        h2{
            text-align:center;
            background:#0d6efd;
            color:white;
            padding:12px;
            border-radius:5px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        table td{
            border:1px solid #ddd;
            padding:10px;
        }

        .title{
            background:#f2f2f2;
            font-weight:bold;
            width:35%;
        }

        .image{
            text-align:center;
            margin-top:20px;
        }

        .image img{
            width:180px;
            border:1px solid #ddd;
            padding:5px;
        }

        .footer{
            text-align:center;
            margin-top:30px;
            color:gray;
            font-size:14px;
        }

    </style>
</head>

<body>

<div class="container">

    <h2>Order Invoice</h2>

    <table>
        <tr>
            <td class="title">Order ID</td>
            <td>{{ $order->id }}</td>
        </tr>

        <tr>
            <td class="title">Customer Name</td>
            <td>{{ $order->user->name }}</td>
        </tr>

        <tr>
            <td class="title">Address</td>
            <td>{{ $order->reciever_address }}</td>
        </tr>

        <tr>
            <td class="title">Phone</td>
            <td>{{ $order->reciever_phone }}</td>
        </tr>

        <tr>
            <td class="title">Product</td>
            <td>{{ $order->product->product_title }}</td>
        </tr>

        <tr>
            <td class="title">Price</td>
            <td><span>&#8377;</span> {{ $order->product->product_price }}</td>
        </tr>
        <tr>
            <td class="title">Status</td>
            <td>{{ $order->status }}</td>
        </tr>
    </table>

    <div class="image">
        <h3>Product Image</h3>

        <img src="{{ public_path('product_images/'.$order->product->product_image) }}">
    </div>

    <div class="footer">
        Thank You For Shopping ❤️
    </div>

</div>

</body>
</html>