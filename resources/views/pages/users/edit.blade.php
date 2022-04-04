@extends('layouts.master')
@section('title','Admin | Users | Edit')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Edit User') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="row">
                @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
                @endforeach
                @endif
                <div class="col-md-12">
                    <form method="POST" action="{{ route('users.update', $user->id) }}">
                        @method('PUT')
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name">{{ __('First Name') }}</label>
                                    <input type="text" class="form-control" id="first_name" value="{{ $user->first_name}}" name="first_name">
                                </div>
                                <div class="form-group">
                                    <label for="last_name">{{ __('Last Name') }}</label>
                                    <input type="text" class="form-control" id="last_name" value="{{ $user->last_name }}" name="last_name">
                                </div>
                                <div class="form-group">
                                    <label for="email">{{ __('Email') }}</label>
                                    <input type="email" class="form-control" id="email" value="{{ $user->email }}" readonly name="email">
                                </div>
                                <div class="form-group">
                                    <label for="username">{{ __('Username') }}</label>
                                    <input type="text" class="form-control" id="username" value="{{ $user->username }}" readonly name="username">
                                </div>

                                <div class="form-group">
                                    <label>{{ __('Status') }}</label>
                                    <select name="isActive" class="form-control">
                                        <option @if(!$user->isActive) selected @endif value="0">{{ __('Deactive') }}</option>
                                        <option @if($user->isActive) selected @endif value="1">{{ __('Active') }}</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>{{ __('Role') }}</label>
                                    <select name="isAdmin" class="form-control">
                                        <option @if(!$user->isAdmin) selected @endif value="0">{{ __('User') }}</option>
                                        <option @if($user->isAdmin) selected @endif value="1">{{ __('Admin') }}</option>
                                    </select>
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
