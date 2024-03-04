@extends('app')
@section('title', ' - User List')
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
    {{--        <div class="card-header">Manage Users</div>--}}
            <div class="card-body">
                @can('create-user')
                <a href="{{ route('create_user') }}" class="btn btn-success btn-sm my-2">
                    <i class="bi bi-plus-circle"></i> Add New User
                </a>
                @endcan
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">S#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Roles</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($users as $user)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>
                            @forelse ($user->getRoleNames() as $role)
                            <span class="badge bg-primary">{{ $role }}</span>
                            @empty
                            @endforelse
                        </td>
                        <td>
                            <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('users.show', $user->id) }}" class="btn btn-warning btn-sm">
                                    <i class="bi bi-eye"></i> Show</a>

                                @if (in_array('Super Admin', $user->getRoleNames()->toArray() ?? []) )
                                    @if (Auth::user()->hasRole('Super Admin'))
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">
                                        <i class="bi bi-pencil-square"></i> Edit</a>
                                    @endif
                                @else
                                    @can('edit-user')
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">
                                        <i class="bi bi-pencil-square"></i> Edit</a>
                                    @endcan

                                    @can('delete-user')
                                        @if (Auth::user()->id!=$user->id)
    {{--                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return--}}
    {{--                                    confirm('Do you want to delete this user?');">--}}
    {{--                                        <i class="bi bi-trash"></i> Delete</button>--}}

                                            <button type="button" class="btn btn-danger btn-sm" onclick="deleteUser({{ $user->id }})">
                                                <i class="bi bi-trash"></i> Delete</button>
                                        @endif

                                    @endcan
                                @endif
                            </form>
                        </td>
                    </tr>
                    @empty
                    <td colspan="5">
                                <span class="text-danger">
                                    <strong>No User Found!</strong>
                                </span>
                    </td>
                    @endforelse
                    </tbody>
                </table>

                {{ $users->links() }}

            </div>
        </div>
        </div>
    </div>
@endsection
