@extends('warehouse.app')
@section('content')
    <div class="products">
        <div class="container-fluid">
            <div class="page-header mt-2">
                <p>
                    <a href="{{ asset('dashboard') }}">Home</a> / <span style="color: #ffa500; text-shadow: 1px 1px #808080;">Orders</span>
                </p>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <h4>Orders</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="theader">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Product</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($orders)<1)
                                    <tr>
                                        <td class="text-center" colspan="5" style="color: #ffa500">
                                            No product
                                        </td>
                                    </tr>
                                @endif
                                <?php $no=1; ?>
                                @foreach ($orders as $order)
                                    @if ($order->supplier == Auth::user()->email)
                                        <tr class="text-center">
                                            <td>{{ $no }}</td><?php $no++; ?>
                                            <td>{{ $order->product }}</td>
                                            <td>{{ $order->quantity }}</td>
                                            <td style="color: {{($order->status=='unprocessed')?'red':'green' }}">
                                                {{ $order->status }}
                                            </td>
                                            <td>
                                                <form action="{{ asset('warehouse/orders')}}/{{ $order->id }}" method="post">
                                                    @csrf
                                                    @method('PUT')
                                                    <button {{ ($order->status=='processed')?'disabled':'' }} class="btn btn-sm btn-outline-success" type="submit">Dispatch</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection