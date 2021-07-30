@extends('layout.app')
@section('content')
    <div class="products">
        <div class="container-fluid">
            <div class="page-header mt-2">
                <p>
                    <a href="{{ asset('dashboard') }}">Home</a> / <span style="color: #ffa500; text-shadow: 1px 1px #808080;">Users</span>
                </p>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-6">
                                <h4>System users</h4>
                            </div>
                            <div class="col-6">
                                <a style="float: right" class="btn btn-sm btn-primary" href="{{ url('users/create') }}">
                                    <i class="fas fa-plus-circle"></i>
                                    Add User
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
                                    <th>Email</th>
                                    <th>Type</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($users)<1)
                                    <tr>
                                        <td class="text-center" colspan="5" style="color: #ffa500">
                                            No product
                                        </td>
                                    </tr>
                                @endif
                                <?php $no=1; ?>
                                @foreach ($users as $user)
                                    <tr class="text-center">
                                        <td>{{ $no }}</td><?php $no++; ?>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->type }}</td>
                                        <td>
                                            <form action="{{ asset('users')}}/{{ $user->id }}" method="post">
                                                <a href="{{asset('users')}}/{{$user->id}}/edit" class="btn btn-sm btn-outline-success"><i class="far fa-edit"></i></a>
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
            </div>
        </div>
    </div>
@endsection