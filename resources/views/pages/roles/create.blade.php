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
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Add New Role
                    </div>
                    <div class="float-end">
                        <a href="{{ route('roles.index') }}" class="btn btn-primary btn-sm">&larr; Back</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('roles.store') }}" method="post">
                        @csrf
                        <div class="mb-3 row">
                            <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="permissions" class="col-md-4 col-form-label text-md-end text-start">Permissions</label>
                            <div class="col-md-8">
                                <div class="row">
                                    @forelse ($permissions as $permission)
                                        <div class="col-md-2">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" name="permissions[]" class="custom-control-input @error('permissions') is-invalid @enderror" id="customswitch{{$permission->id}}" value="{{ $permission->id }}" {{ in_array($permission->id, old('permissions') ?? []) ? 'checked' : '' }}">
                                                <label class="custom-control-label" for="customswitch{{$permission->id}}">{{ $permission->name }}</label>
                                            </div>
                                        </div>
                                    @empty
                                        <span class="text-danger">No permission found</span>
                                    @endforelse
                                </div>
                                @if ($errors->has('permissions'))
                                    <span class="text-danger">{{ $errors->first('permissions') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Add Role">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
