@extends('layouts.master')
@section('title','Admin | Orders | Edit')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Edit Order') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ __($error) }}</div>
                    @endforeach
                @endif
                <div class="col-md-12">
                    <form method="POST" action="{{ route('orders.update', $order->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input type="text" class="form-control" id="name" value="{{ $order->name}}" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="price">{{ __('Price') }}</label>
                                    <input type="number" class="form-control" id="price" value="{{ $order->price }}" name="price">
                                </div>
                                <div class="form-group">
                                    <label for="quantity">{{ __('Quantity') }}</label>
                                    <input type="number" class="form-control" id="quantity" value="{{ $order->quantity }}" name="quantity">
                                </div>
                                <div class="form-group">
                                    <label for="user_id">{{ __('User ID') }}</label>
                                    <input type="text" class="form-control" id="user_id" value="{{ $order->user_id }}" name="user_id">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('SUBMIT') }}</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
