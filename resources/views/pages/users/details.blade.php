@extends('layouts.master')
@section('title','Admin | Users | Detail')
@section('content')
<!--main-->
<div class="col-sm-12 col-sm-offset-3 col-lg-12 col-lg-offset-2 content">
    <div class="container-fluid">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg></a></li>
                <li class="active"> {{ __('Orders')}} | {{ __('Orders Detail') }} </li>
            </ol>
        </div>
        <!--/.row-->
        <div class="row">
            <div class="col-xs-12 col-md-12 col-lg-12">

                <div class="panel panel-primary">
                    <div class="panel-heading"> {{ __('Orders Detail') }} </div>
                    <div class="panel-body">
                        <div class="bootstrap-table">
                            <div class="table-responsive">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="panel panel-blue">
                                                <div class="panel-heading dark-overlay">{{ __('User Information') }}</div>
                                                <div class="panel-body">
                                                    <strong><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ __('Full Name') }} : {{$user->fullname}} </strong> <br>
                                                    <strong><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ __('Username') }} : {{$user->username}} </strong> <br>
                                                    <strong><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ __('Email') }} : {{$user->email}} </strong> <br>
                                                    <strong><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ __('Status') }} :
                                                        @if ($user->isActive)
                                                            {{ __('Active') }}
                                                        @else
                                                            {{ __('Deactive') }}
                                                        @endif
                                                    </strong> <br>
                                                    <strong><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ __('Role') }} :
                                                        @if ($user->isAdmin)
                                                            {{ __('Admin') }}
                                                        @else
                                                            {{ __('User') }}
                                                        @endif
                                                    </strong> <br>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <table class="table table-bordered" style="margin-top:20px;">
                                    <thead>
                                        <tr class="bg-primary">
                                            <th>{{ __('ID') }}</th>
                                            <th>{{ __('Name') }}</th>
                                            <th>{{ __('Price') }}</th>
                                            <th>{{ __('Quantity') }}</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($details as $key => $item)
                                        <tr>
                                            <td scope="row">{{ ($details->currentpage() - 1) * $details->perpage() + $key + 1 }}</td>
                                            <td> {{ $item->name }}</td>
                                            <td> {{ number_format($item->price) }} VNĐ</td>
                                            <td> {{ $item->quantity }} </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{ $details->links('pagination::bootstrap-4') }}
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--/.row-->
    </div>
</div>
@endsection