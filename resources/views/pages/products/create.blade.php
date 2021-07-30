@extends('layout.app')
@section('content')
    <div class="products">
        <div class="container-fluid">
            <div class="page-header mt-2">
                <p>
                    <a href="{{ asset('dashboard') }}">Home</a> / <a href="{{ asset('products') }}">Products</a> / <span style="color: #ffa500; text-shadow: 1px 1px #808080;">Create</span>
                </p>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h4>Add Product</h4>
                    </div>
                    <div class="card-body">
                        hello
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection