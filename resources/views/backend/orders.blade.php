@extends('backend.layouts.app')

@section('title', 'Orders Page')

@section('content')
<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
    <!-- data table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Orders History of Client</h5>
                {{-- <p>This example shows DataTables and the Buttons extension being used with the Bootstrap 4 framework providing the styling.</p> --}}
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Order Number</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Customer Name</th>
                                <th>Phone No</th>
                                <th>Address</th>
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
                                    <td>{{$order->customerName}}</td>                                    
                                    <td>{{$order->phone}}</td>                                    
                                    <td>{{$order->address}}</td>                                    
                                    <td><a href="{{url('invoice/'. $order->order_number) }}" target="_blank" class="btn btn-dark">Invoice</a></td>                                    
                                     
                                    <td>
                                        @if (!$order->status==0)
                                        <button class="btn btn-success">Completed</button>
                                        @else
                                        <form action="{{route('order.status',$order->id)}}" method="post">
                                          @csrf
                                          <button class="btn btn-warning" type="submit">Received</button>
                                        </form>
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
    <!-- ============================================================== -->
    <!-- end data table  -->
</div>
@endsection