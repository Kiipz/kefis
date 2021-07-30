@extends('layout.app')
@section('content')
    <div class="products">
        <div class="container-fluid">
            <div class="page-header mt-2">
                <p>
                    <a href="{{ asset('dashboard') }}">Home</a> / <a href="{{ asset('orders') }}">Orders</a>
                </p>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h4>Orders</h4>
                            </div>
                            <div class="col-6">
                                <a style="float: right" class="btn btn-sm btn-primary" href="">
                                    <i class="fas fa-plus-circle"></i>
                                    Add Order
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        hello
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection