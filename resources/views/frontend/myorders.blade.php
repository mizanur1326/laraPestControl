@extends('frontend.layouts.app')

@section('title', 'PestKit - Cart Page')

@section('content')



<section class="section" style="width: 80%; margin: 5% auto">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">My Order</h5>
                <table id="example" class="table table-striped table-bordered second" style="width:100%">
                    <thead>
                        <tr>
                            <th>SL</th>
                            <th>Order Number</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Total Price</th>
                            {{-- <th>Customer Name</th>
                            <th>Phone No</th>
                            <th>Address</th> --}}
                            <th>Invoices</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($orders as $order)                               
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->order_number}}</td>
                                <td>{{$order->productName}}</td>
                                <td>{{$order->quantity}}</td>                                    
                                <td>{{$order->total_amount}}</td>                                    
                                {{-- <td>{{$order->customerName}}</td>                                    
                                <td>{{$order->phone}}</td>                                    
                                <td>{{$order->address}}</td>                                     --}}
                                <td><a href="{{url('invoice/'. $order->order_number) }}" target="_blank" class="btn btn-dark">Invoice</a></td>                                    
                                 
                                <td>
                                    @if ($order->status==0)
                                    <button class="btn btn-warning">Pending</button>
                                    @else
                                    <button class="btn btn-success">Delivered</button>
                                    @endif
                                </td>                                   
                            </tr>
                        @endforeach                              
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</section>


@endsection