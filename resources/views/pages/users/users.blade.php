@extends('layouts.master')
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
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ __($message) }}</p>
                                </div>
                            @endif
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead class="thead-dark">
                                        <th>ID</th>
                                        <th>{{__('First Name')}}</th>
                                        <th>{{__('Last Name')}}</th>
                                        <th>{{__('User Name')}}</th>
                                        <th>{{__('Email')}}</th>
                                        <th>{{__('Role')}}</th>
                                        <th>{{__('Status')}}</th>
                                        <th>{{__('Action')}}</th>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $key => $user)
                                        <tr>
                                            <td scope="row">{{ ($users->currentpage() - 1) * $users->perpage() + $key + 1 }}</td>
                                            <td>{{ $user->first_name }}</td>
                                            <td>{{ $user->last_name }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if ($user->isAdmin)
                                                    <p class="btn btn-success">{{ __('Admin') }}</p>
                                                @else
                                                    <p class="btn btn-primary">{{ __('User') }}</p>
                                                @endif
                                            </td>
                                            <td>
                                                @if ($user->isActive)
                                                    <p class="btn btn-success">{{ __('Active') }}</p>
                                                @else
                                                    <p class="btn btn-warning">{{ __('Deactive') }}</p>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{route('users.show', $user->id)}}" class="btn btn-info"><i class="fa fa-list" aria-hidden="true"></i> {{__('Detail')}}</a>
                                                <a href="{{route('users.edit', $user->id)}}" class="btn btn-primary"><i class="fa fa-pencil" aria-hidden="true"></i> {{__('Update')}}</a>
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST">
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
                        {{ $users->links('pagination::bootstrap-4') }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
