@extends('backend.layouts.app')

@section('title', 'Prices List')

@section('content')

<div class="dashboard-wrapper">
    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Data Tables</h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tables</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Data Tables</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- ============================================================== -->
            <!-- basic table  -->
            <!-- ============================================================== -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Packeges List</h5>
                    @if (session('msg'))
                        <div class="alert alert-success">
                                {{session('msg')}}
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered first">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Description</th>                                        
                                        <th>Action</th>                                        
                                    </tr>
                                </thead>
                                <tbody>     
                                    @foreach($prices as $price)                               
                                    <tr>
                                        <td>{{$price->id}}</td>
                                        <td>{{$price->name}}</td>
                                        <td>{{$price->price}}</td>
                                        <td>{{$price->description}}</td> 
                                        <td>
                                            <button class="btn btn-primary"><a href="{{route('prices.edit', $price->id)}}" class="text-white">Edit</a></button>
                          | 
                                            <button class="btn btn-success"><a href="{{route('prices.delete', $price->id)}}" onclick="return confirm('Are You sure to Delete')" class="text-white">Delete</a> </button>
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
            <!-- end basic table  -->
            <!-- ============================================================== -->
        </div>
    </div>



@endsection