@extends('layouts.master')
@section('posts','active')
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
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead class="thead-dark">
                                <th>ID</th>
                                <th>{{__('Name')}}</th>
                                <th>{{__('User_Id')}}</th>
                                <th>{{__('Action')}}</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">1</td>
                                    <td class="text-truncate">iPhone XS Max</td>
                                    <td class="text-truncate">1</td>
                                    <td>
                                        <a href="{{route('orders.edit','1')}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> {{__('Update')}}</a>
                                        <a href="{{route('orders.destroy','1')}}" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> {{__('Delete')}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td class="text-truncate">iPhone XS Max</td>
                                    <td class="text-truncate">1</td>
                                    <td>
                                        <a href="{{route('orders.edit','1')}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> {{__('Update')}}</a>
                                        <a href="{{route('orders.destroy','1')}}" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> {{__('Delete')}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td class="text-truncate">iPhone XS Max</td>
                                    <td class="text-truncate">1</td>
                                    <td>
                                        <a href="{{route('orders.edit','1')}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> {{__('Update')}}</a>
                                        <a href="{{route('orders.destroy','1')}}" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> {{__('Delete')}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td class="text-truncate">iPhone XS Max</td>
                                    <td class="text-truncate">1</td>
                                    <td>
                                        <a href="{{route('orders.edit','1')}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> {{__('Update')}}</a>
                                        <a href="{{route('orders.destroy','1')}}" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> {{__('Delete')}}</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">1</td>
                                    <td class="text-truncate">iPhone XS Max</td>
                                    <td class="text-truncate">1</td>
                                    <td>
                                        <a href="{{route('orders.edit','1')}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> {{__('Update')}}</a>
                                        <a href="{{route('orders.destroy','1')}}" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> {{__('Delete')}}</a>
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
