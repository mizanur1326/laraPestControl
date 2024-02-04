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
                <h5 class="mb-0">Data Tables - Print, Excel, CSV, PDF Buttons</h5>
                <p>This example shows DataTables and the Buttons extension being used with the Bootstrap 4 framework providing the styling.</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                        <thead>
                            <tr>
                                <th>Order Number</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Total Price</th>
                                <th>Customer Name</th>
                                <th>Phone No</th>
                                <th>Address</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)                               
                                <tr>
                                    <td>{{$order->order_number}}</td>
                                    <td>{{$order->productName}}</td>
                                    <td>{{$order->quantity}}</td>                                    
                                    <td>{{$order->total_amount}}</td>                                    
                                    <td>{{$order->customerName}}</td>                                    
                                    <td>{{$order->phone}}</td>                                    
                                    <td>{{$order->address}}</td>                                    
                                    <td>{{$order->status}}</td>                                    
                                </tr>
                            @endforeach
                            
                            {{-- <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011/01/25</td>
                                <td>$112,000</td>
                            </tr> --}}
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