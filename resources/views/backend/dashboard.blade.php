@extends('backend.layouts.app')

@section('title', 'Dashboard:Home')

@section('content')

<!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pagehader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h3 class="mb-2">Sales Dashboard Template </h3>
                            <p class="pageheader-text">Lorem ipsum dolor sit ametllam fermentum ipsum eu porta consectetur adipiscing elit.Nullam vehicula nulla ut egestas rhoncus.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Sales Dashboard Template</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- pagehader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- metric -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Total User</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1 text-primary">{{$totalAllUser}}</h1>
                                </div>
                                <div><a href="" class="btn btn-primary">View USERS</a></div>
                            </div>
                        </div>
                    </div>
                    <!-- /. metric -->
                    <!-- metric -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Total Order Received</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1 text-primary">{{$totalOrder}}</h1>
                                </div>
                                <div><a href="/orders" class="btn btn-primary">View Orders</a></div>                                
                            </div>
                            
                        </div>
                    </div>
                    <!-- /. metric -->
                    <!-- metric -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Today's Order</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1 text-primary">{{$todayOrder}}</h1>
                                </div>
                                <div><a href="/orders" class="btn btn-primary">View</a></div>                                
                            </div>                            
                        </div>
                    </div>
                    <!-- /. metric -->
                    <!-- metric -->
                    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted">Revenue</h5>
                                <div class="metric-value d-inline-block">
                                    <h1 class="mb-1 text-primary">${{$totalRevenue}}</h1>
                                </div>
                                <div><a href="/orders" class="btn btn-primary">View Orders</a></div>
                            </div>

                            </div>
                        </div>
                    </div>
                    <!-- /. metric -->                    
                </div>

            </div>
            <!-- ============================================================== -->
        
@endsection