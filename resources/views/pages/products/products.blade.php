@extends('layout.app')
@section('content')
    <div class="products">
        <div class="container-fluid">
            <div class="page-header mt-2">
                <p>
                    <a href="{{ asset('dashboard') }}">Home</a> / <span style="color: #ffa500; text-shadow: 1px 1px #808080;">Products</span>
                </p>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h4>Products</h4>
                            </div>
                            <div class="col-6">
                                <a style="float: right" class="btn btn-sm btn-primary" href="{{ url('products/create') }}">
                                    <i class="fas fa-plus-circle"></i>
                                    Add Product
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="theader">
                                <tr>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Quatity</th>
                                    <th>Supplier</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @if (count($products)<1)
                                    <tr>
                                        <td class="text-center" colspan="6" style="color: #ffa500">
                                            No data
                                        </td>
                                    </tr>
                                @endif --}}
                                {{-- @foreach ($products as $product) --}}
                                    <tr>
                                        <td>hhh</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-outline-success"><i class="far fa-edit"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-danger"><i class="far fa-trash-alt"></i></a>
                                            <a href="#" class="btn btn-sm btn-outline-primary">decrement--</a>
                                        </td>
                                    </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection