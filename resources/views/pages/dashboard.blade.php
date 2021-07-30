@extends('layout.app')
@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-xl-4 col-sm-6 mb-3">
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-photo-video"></i>
                        </div>
                        <div class="mr-5">
                            <h4>Products <span>{{ count($products) }}</span></h4>
                        </div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{ url('products') }}">
                        <span class="float-left">View Details <i class="fa fa-angle-right"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
                <div class="card text-white bg-warning">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-calendar-check"></i>
                        </div>
                        <div class="">
                            <h4>Users <span>{{ count($users) }}</span></h4>
                        </div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{ url('users') }}">
                        <span class="float-left">View Details <i class="fa fa-angle-right"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-sm-6 mb-3">
                <div class="card text-white bg-info">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-music"></i>
                        </div>
                        <div class="">
                            <h4>Orders <span>#</span></h4>
                        </div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{ url('orders') }}">
                        <span class="float-left">View Details <i class="fa fa-angle-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection