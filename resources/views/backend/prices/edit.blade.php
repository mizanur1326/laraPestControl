@extends('backend.layouts.app')

@section('title', 'Service List')

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
           <!-- basic form  -->
                        <!-- ============================================================== -->
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="width: fit; margin-left:50%">
                                <div class="section-block" id="basicform">
                                    <h3 class="section-title"> Edit Packege</h3>                                    
                                </div>
                                <div class="card">
                                    <h5 class="card-header">All Field Are Required</h5>
                                    <div class="card-body">
                                        @if($errors->any()) 
                                            <div class="alert alert-danger">
                                            @foreach($errors->all() as $err)
                                                <li>{{$err}}</li>
                                            @endforeach
                                            </div>
                                        @endif
                                        <form method="POST" action="{{ route('prices.store', $prices->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="inputText3"  class="col-form-label">Packege Name</label>
                                                <input id="inputText3" type="text" name="name" value= "{{old('name', $prices->name)}}" class="form-control">
                                            </div> 
                                            <div class="form-group">
                                                <label for="inputText3"  class="col-form-label">Packege Price</label>
                                                <input id="inputText3" type="text" name="price" value= "{{old('price', $prices->price)}}" class="form-control">
                                            </div> 
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Packege Description</label>
                                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{old('description', $prices->description)}}</textarea>
                                            </div>                                        
                                            <input class="btn btn-primary" type="submit" value="Submit">
                                            
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end basic form  -->
            <!-- ============================================================== -->
        </div>
    </div>



@endsection