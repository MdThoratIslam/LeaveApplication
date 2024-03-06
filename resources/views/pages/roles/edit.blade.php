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
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">List</a></li>
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

                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>

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
    {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <strong>Name:</strong>

                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control', 'readonly' =>'readonly')) !!}
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <table class="table border table-bordered table-hover" style="width: 100%;">
{{--                    <tr>--}}
{{--                        <th>Permission</th>--}}
{{--                        <th>Permission Name</th>--}}
{{--                    </tr>--}}
{{--                    @foreach($permissions as $permission)--}}
{{--                        <tr>--}}
{{--                            <td>{{ Form::checkbox('permissions[]',--}}
{{--$permission->id, in_array($permission->id, $rolePermissions) ? true : false, array('class' => 'name','id' => 'permission_' . $permission->id)) }}</td>--}}
{{--                            <td><label for="permission_{{ $permission->id }}">{{ $permission->name }}</label></td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}

{{--                    <?php--}}
{{--                        echo '<pre>';--}}
{{--                             print_r($permissions);--}}
{{--                        echo '</pre>';die;--}}
{{--                    ?>--}}

                    <tr>
                        <th>Sl No</th>
                        <th>Module Name</th>
                        <th>Create</th>
                        <th>View</th>
                        <th>Update</th>
                        <th>Delete</th>
                        <th>Action</th>
                    </tr>
{{--                    <tr>--}}
{{--                        <td>1</td>--}}
{{--                        <td>Leave</td>--}}
{{--                        <td>--}}
{{--                            <input type="checkbox" name="permissions[]" value="create-leave"  {{ $permissions->pluck('name')->contains('create-leave') ? 'checked' : '' }}>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <input type="checkbox" name="permissions[]" value="read-leave"  {{ $permissions->pluck('name')->contains('view-leave') ? 'checked' : '' }}>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <input type="checkbox" name="permissions[]" value="update-leave"  {{ $permissions->pluck('name')->contains('update-leave') ? 'checked' : '' }}>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <input type="checkbox" name="permissions[]" value="delete-leave"  {{ $permissions->pluck('name')->contains('delete-leave') ? 'checked' : '' }}>--}}
{{--                        </td>--}}
{{--                        <td><a href="{{route('apply.index')}}">List</a></td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>2</td>--}}
{{--                        <td>User</td>--}}
{{--                        <td>--}}
{{--                            <input type="checkbox" name="permissions[]" value="create-leave"  {{ $permissions->pluck('name')->contains('create-user') ? 'checked' : '' }}>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <input type="checkbox" name="permissions[]" value="read-leave"  {{ $permissions->pluck('name')->contains('view-user') ? 'checked' : '' }}>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <input type="checkbox" name="permissions[]" value="update-leave"  {{ $permissions->pluck('name')->contains('update-user') ? 'checked' : '' }}>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <input type="checkbox" name="permissions[]" value="delete-leave"  {{ $permissions->pluck('name')->contains('delete-user') ? 'checked' : '' }}>--}}
{{--                        </td>--}}
{{--                        <td><a href="{{route('users.index')}}">List</a></td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>3</td>--}}
{{--                        <td>Role</td>--}}
{{--                        <td>--}}
{{--                            <input type="checkbox" name="permissions[]" value="create-leave"  {{ $permissions->pluck('name')->contains('create-role') ? 'checked' : '' }}>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <input type="checkbox" name="permissions[]" value="read-leave"  {{ $permissions->pluck('name')->contains('view-role') ? 'checked' : '' }}>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <input type="checkbox" name="permissions[]" value="update-leave"  {{ $permissions->pluck('name')->contains('update-role') ? 'checked' : '' }}>--}}
{{--                        </td>--}}
{{--                        <td>--}}
{{--                            <input type="checkbox" name="permissions[]" value="delete-leave"  {{ $permissions->pluck('name')->contains('delete-role') ? 'checked' : '' }}>--}}
{{--                        </td>--}}
{{--                        <td><a href="{{route('roles.index')}}">List</a></td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        @foreach($permissions as $permission)--}}
{{--    --}}
{{--                            <td>{{ $permission->id }}</td>--}}
{{--                            <td>{{ $permission->name }}</td>--}}
{{--    --}}
{{--                      @endforeach--}}
{{--                    </tr>--}}

                    <strong>Permission:</strong>
                    <br/>
                    @foreach($permissions as $value)
                        <label>
                            {{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions)
                                ? true : false, array('class' => 'name')) }}
                            {{ $value->name }}
                        </label>
                    @endforeach

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
