@extends('layouts.master')
@section('title','Admin | Orders')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h2 class="title">{{__('List Orders')}}</h2>
                    </div>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ __($message) }}</p>
                    </div>
                    @endif
                    <a href="{{ route('orders.create') }}" class="btn btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i> {{__('Add Order')}}</a>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead class="thead-dark">
                                <th>ID</th>
                                <th>{{__('Name')}}</th>
                                <th>{{__('Price')}}</th>
                                <th>{{__('Quantity')}}</th>
                                <th>{{__('User_Id')}}</th>
                                <th>{{__('Username')}}</th>
                                <th>{{__('Action')}}</th>
                            </thead>
                            <tbody>
                                @foreach($orders as $key => $order)
                                <tr>
                                    <td scope="row">{{ ($orders->currentpage() - 1) * $orders->perpage() + $key + 1 }}</td>
                                    <td class="text-truncate">{{ $order->name }}</td>
                                    <td class="text-truncate">{{ number_format($order->price) }} VNĐ</td>
                                    <td class="text-truncate">{{ $order->quantity }}</td>
                                    <td class="text-truncate">{{ $order->user_id }}</td>
                                    <td class="text-truncate">{{ $order->username }}</td>
                                    <td>
                                        <a href="{{route('orders.edit', $order->id)}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> {{__('Update')}}</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('orders.destroy', $order->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" id="btn-delete" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');" class="btn btn-danger"> <i class="fa fa-remove" aria-hidden="true"></i> {{__('Delete')}}</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {{ $orders->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>
@endsection
