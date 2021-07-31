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
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th>Quatity</th>
                                    <th>Automated reorder</th>
                                    <th>Supplier</th>
                                    <th>Order</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($products)<1)
                                    <tr>
                                        <td class="text-center" colspan="9" style="color: #ffa500">
                                            No product
                                        </td>
                                    </tr>
                                @endif
                                <?php $no=1; ?>
                                @foreach ($products as $product)
                                    <tr class="text-center">
                                        <td>{{ $no }}</td><?php $no++; ?>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td style="color: {{ ($product->quantity<=$product->reorderQuantity)?'red':'green' }}">
                                            {{ $product->quantity }}
                                        </td>
                                        <td>{{ $product->reorderQuantity }}</td>
                                        <td>{{ $product->supplier }}</td>
                                        <td style="display: flex">
                                            <form action="{{ asset('products/decrement') }}/{{ $product->id }}" method="post">
                                                @csrf
                                                <input type="text" name="product" value="{{ $product->name }}" hidden>
                                                <input type="text" name="supplier" value="{{ $product->supplier }}" hidden>
                                                <button type="submit" class="btn btn-sm btn-outline-info mr-2">Decrement--</button>
                                            </form>
                                            <form action="{{ asset('orders') }}" method="post">
                                                @csrf
                                                <input type="text" name="product" value="{{ $product->name }}" hidden>
                                                <input type="text" name="supplier" value="{{ $product->supplier }}" hidden>
                                                <button type="submit" class="btn btn-sm btn-outline-primary">Manual Order</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ asset('products')}}/{{ $product->id }}" method="post">
                                                <a href="{{asset('products')}}/{{$product->id}}/edit" class="btn btn-sm btn-outline-success"><i class="far fa-edit"></i></a>
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-sm btn-outline-danger" type="submit"><i class="far fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <small><b>Note:</b> <i>The default order quantity is <b>50</b></i></small>
            </div>
        </div>
    </div>
@endsection