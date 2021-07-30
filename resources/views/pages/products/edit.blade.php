@extends('layout.app')
@section('content')
    <div class="products">
        <div class="container-fluid">
            <div class="page-header mt-2">
                <p>
                    <a href="{{ asset('dashboard') }}">Home</a> / <a href="{{ asset('products') }}">Products</a> / <span style="color: #ffa500; text-shadow: 1px 1px #808080;">Edit</span>
                </p>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Product</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ asset('products') }}/{{ $product->id }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" value="{{ $product->name }}" id="name" class="form-control" name="name" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="quantity">Quantity</label>
                                        <input type="number" value="{{ $product->quantity }}" id="quantity" class="form-control" name="quantity" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="supplier">Supplier</label>
                                        <select name="supplier" id="supplier" class="form-control" required autofocus>
                                            <option value="{{ $product->supplier }}">{{ $product->supplier }}</option>
                                            @foreach ($users as $user)
                                                <option value="{{ $user->email }}">{{ $user->name }} ({{ $user->email }})</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="price">Price</label>
                                        <input type="number" step="0.5" value="{{ $product->price }}" id="price" class="form-control" name="price" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="reorderQuantity">Auto Reorder Quantity</label>
                                        <input type="number" value="{{ $product->reorderQuantity }}" id="reorderQuantity" class="form-control" name="reorderQuantity" required autofocus>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <label for="description">Description</label>
                                        <textarea name="description" id="description" rows="4" class="form-control">{{ $product->description }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <input type="submit" value="Save product" class="btn btn-sm btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection