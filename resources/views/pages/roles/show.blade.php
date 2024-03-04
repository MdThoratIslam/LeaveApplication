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

                <h2> Show Role</h2>

            </div>
            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $role->name }}
            </div>
        </div>
        <div class="col-xl-12 col-md-12">
            <div class="form-group">

                <strong>Permissions:</strong>

                @if(!empty($rolePermissions))

                    @foreach($rolePermissions as $v)

                        <label class="label label-success">{{ $v->name }},</label>

                    @endforeach

                @endif

            </div>
        </div>
    </div>

@endsection
