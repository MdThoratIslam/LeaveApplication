@extends('auth.index')
@section('auth')
    <div class="card borderless">
        <div class="row align-items-center text-center">
            <div class="col-md-12">

                    <div class="card-body">
                        <h4 class="f-w-400">Sign up</h4>
                        <hr>
                        <form method="POST" action="">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Username">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="email" id="Email" placeholder="Email address">
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            <div class="form-group mb-4">
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Password">
                            </div>
                            <button class="btn btn-primary btn-block mb-4">Sign up</button>
                        </form>
                        <hr>
                        <p class="mb-2">Already have an account?
                            <a href="{{route('login')}}" class="f-w-400">Signin</a>
                        </p>
                    </div>

            </div>
        </div>
    </div>
@endsection
