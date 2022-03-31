@extends('layouts.master')
@section('users','active')
@section('title','Admin | Users')
@section('content')
<div class="col-sm-12 col-sm-offset-3 col-lg-12 col-lg-offset-2 content">
    <div class="container-fluid">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg></a></li>
                <li class="active"> {{__('List Users')}}</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> {{__('List Users')}}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">
                <div class="panel-body">
                    <div class="bootstrap-table">
                        <div class="table-responsive">
                            <a href="" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> {{__('Add User')}}</a>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead class="thead-dark">
                                        <th>ID</th>
                                        <th>{{__('First Name')}}</th>
                                        <th>{{__('Last Name')}}</th>
                                        <th>{{__('User Name')}}</th>
                                        <th>{{__('Email')}}</th>
                                        <th>{{__('Status')}}</th>
                                        <th>{{__('Action')}}</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td scope="row">5</td>
                                            <td>Đao Vinh</td>
                                            <td>Sơn</td>
                                            <td>dao-vinh-son</td>
                                            <td>vs@gmail.com</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="{{route('orders.index')}}" class="btn btn-info"><i class="fa fa-list" aria-hidden="true"></i> {{__('Orders List')}}</a>
                                                <a href="{{route('users.show','1')}}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i> {{__('Detail')}}</a>
                                                <a href="{{route('users.edit','1')}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> {{__('Update')}}</a>
                                                <a href="{{route('users.destroy','1')}}" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> {{__('Delete')}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">5</td>
                                            <td>Đao Vinh</td>
                                            <td>Sơn</td>
                                            <td>dao-vinh-son</td>
                                            <td>vs@gmail.com</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="{{route('orders.index')}}" class="btn btn-info"><i class="fa fa-list" aria-hidden="true"></i> {{__('Orders List')}}</a>
                                                <a href="{{route('users.show','1')}}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i> {{__('Detail')}}</a>
                                                <a href="{{route('users.edit','1')}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> {{__('Update')}}</a>
                                                <a href="{{route('users.destroy','1')}}" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> {{__('Delete')}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">5</td>
                                            <td>Đao Vinh</td>
                                            <td>Sơn</td>
                                            <td>dao-vinh-son</td>
                                            <td>vs@gmail.com</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="{{route('orders.index')}}" class="btn btn-info"><i class="fa fa-list" aria-hidden="true"></i> {{__('Orders List')}}</a>
                                                <a href="{{route('users.show','1')}}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i> {{__('Detail')}}</a>
                                                <a href="{{route('users.edit','1')}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> {{__('Update')}}</a>
                                                <a href="{{route('users.destroy','1')}}" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> {{__('Delete')}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">5</td>
                                            <td>Đao Vinh</td>
                                            <td>Sơn</td>
                                            <td>dao-vinh-son</td>
                                            <td>vs@gmail.com</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="{{route('orders.index')}}" class="btn btn-info"><i class="fa fa-list" aria-hidden="true"></i> {{__('Orders List')}}</a>
                                                <a href="{{route('users.show','1')}}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i> {{__('Detail')}}</a>
                                                <a href="{{route('users.edit','1')}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> {{__('Update')}}</a>
                                                <a href="{{route('users.destroy','1')}}" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> {{__('Delete')}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">5</td>
                                            <td>Đao Vinh</td>
                                            <td>Sơn</td>
                                            <td>dao-vinh-son</td>
                                            <td>vs@gmail.com</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="{{route('orders.index')}}" class="btn btn-info"><i class="fa fa-list" aria-hidden="true"></i> {{__('Orders List')}}</a>
                                                <a href="{{route('users.show','1')}}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i> {{__('Detail')}}</a>
                                                <a href="{{route('users.edit','1')}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> {{__('Update')}}</a>
                                                <a href="{{route('users.destroy','1')}}" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> {{__('Delete')}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">5</td>
                                            <td>Đao Vinh</td>
                                            <td>Sơn</td>
                                            <td>dao-vinh-son</td>
                                            <td>vs@gmail.com</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="{{route('orders.index')}}" class="btn btn-info"><i class="fa fa-list" aria-hidden="true"></i> {{__('Orders List')}}</a>
                                                <a href="{{route('users.show','1')}}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i> {{__('Detail')}}</a>
                                                <a href="{{route('users.edit','1')}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> {{__('Update')}}</a>
                                                <a href="{{route('users.destroy','1')}}" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> {{__('Delete')}}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td scope="row">5</td>
                                            <td>Đao Vinh</td>
                                            <td>Sơn</td>
                                            <td>dao-vinh-son</td>
                                            <td>vs@gmail.com</td>
                                            <td>Active</td>
                                            <td>
                                                <a href="{{route('orders.index')}}" class="btn btn-info"><i class="fa fa-list" aria-hidden="true"></i> {{__('Orders List')}}</a>
                                                <a href="{{route('users.show','1')}}" class="btn btn-success"><i class="fa fa-eye" aria-hidden="true"></i> {{__('Detail')}}</a>
                                                <a href="{{route('users.edit','1')}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> {{__('Update')}}</a>
                                                <a href="{{route('users.destroy','1')}}" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> {{__('Delete')}}</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @endsection