@extends('layout.app')
@section('content')
    <div class="products">
        <div class="container-fluid">
            <div class="page-header mt-2">
                <p>
                    <a href="{{ asset('dashboard') }}">Home</a> / <a href="{{ asset('users') }}">Users</a> / <span style="color: #ffa500; text-shadow: 1px 1px #808080;">Create</span>
                </p>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h4>Add User</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ asset('users') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="name">Name</label>
                                        <input type="text" placeholder="supplier name" id="name" class="form-control" name="name" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" placeholder="ie. name@example.com" id="email" class="form-control" name="email" required autofocus>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="type">Type</label>
                                        <select name="type" id="type" class="form-control" required>
                                            <option value=""> -- select type of user -- </option>
                                            <option value="store-keeper">Store Keeper</option>
                                            <option value="supplier">Supplier</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="name">Password</label>
                                        <input type="password" placeholder="password" id="name" class="form-control" name="password" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <input type="reset" value="Clear" class="btn btn-sm btn-info">
                                <input type="submit" value="Save product" class="btn btn-sm btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection