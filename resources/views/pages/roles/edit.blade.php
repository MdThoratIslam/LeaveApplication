@extends('app')
@section('title', ' - Create Role')
@section('content')
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Leave Application</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('roles.index') }}">Role List</a></li>
                        <li class="breadcrumb-item"><a href="#!">Edit Role</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->

    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="pull-left">
                <h2>Edit Role</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('roles.index') }}">Back</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::model($role, ['method' => 'PATCH', 'route' => ['roles.update', $role->id]]) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {!! Form::text('name', null, ['placeholder' => 'Name', 'class' => 'form-control', 'readonly' => 'readonly']) !!}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <table class="table border table-bordered table-hover" style="width: 100%;">
                    <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Module Name</th>
                        <th>Create</th>
                        <th>View</th>
                        <th>Update</th>
                        <th>Delete</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($permissions as $key => $value)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $value['module_name'] }}</td>
                            <td>
                                <label>
                                    {{ Form::checkbox('permission[]', $value['id'], in_array($value['id'], $rolePermissions) ? true : false, ['class' => 'name']) }}
                                    {{ $value['name'] }}
                                </label>
                            </td>
                            <td>
                                <!-- Add similar columns for other permissions -->
                            </td>
                            <td>
                                <!-- Add similar columns for other permissions -->
                            </td>
                            <td>
                                <!-- Add similar columns for other permissions -->
                            </td>
                            <td>
                                <!-- Add action buttons if necessary -->
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
