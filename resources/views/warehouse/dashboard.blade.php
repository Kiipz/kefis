@extends('warehouse.app')
@section('content')
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-6 mb-3">
                <div class="card text-white bg-primary">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-photo-video"></i>
                        </div>
                        <div class="mr-5">
                            <h4>Orders</h4>
                        </div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="{{ url('warehouse/orders') }}">
                        <span class="float-left">View Details <i class="fa fa-angle-right"></i></span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 mb-3">
                <div class="card text-white bg-info">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fas fa-music"></i>
                        </div>
                        <div class="">
                            <h4>Name <span>#</span></h4>
                        </div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="#">
                        <span class="float-left">View Details <i class="fa fa-angle-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection