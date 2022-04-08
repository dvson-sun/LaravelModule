@extends('layouts.master')
@section('title','Admin | Orders | Add')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Add Order') }}</h1>
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ __($message) }}</p>
                    </div>
                    @endif
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ __($error) }}</div>
            @endforeach
            @endif
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('orders.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input type="text" class="form-control" id="name" value="{{ old('name')}}" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="price">{{ __('Price') }}</label>
                                    <input type="number" class="form-control" id="price" value="{{ old('price')}}" name="price">
                                </div>
                                <div class="form-group">
                                    <label for="quantity">{{ __('Quantity') }}</label>
                                    <input type="number" class="form-control mb-3" id="quantity" value="{{ old('quantity')}}" name="quantity">
                                </div>
                                <div class="form-group">
                                    <label for="user_id">{{ __('Username') }}</label>
                                    <input id="username" type="text" class="mt-1" name="username" autocomplete="off" placeholder="Search...." />
                                    <select id="user_list" name="user_id" class="form-select form-select-lg mb-3 mt-3" aria-label=".form-select-lg example">
                                        
                                    </select>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">{{ __('ADD ORDER') }}</button>
                    </form>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">
    $('#username').on('keyup', function() {
        $value = $(this).val();
        if ($value) {
            $.ajax({
                type: 'get',
                url: '{{ URL::to('search') }}',
                data: {
                    'search': $value
                },
                success: function(data) {
                    $('#user_list').html(data);
                }
            });
        }
    })
    $.ajaxSetup({
        headers: {
            'csrftoken': '{{ csrf_token() }}'
        }
    });
    $(document).on('click', 'option', function() {
        console.log($(this).value());
        var value = $(this).value();
        $('#username').val(value);
        $('#user_list').html("");
    });
</script>
@endsection
