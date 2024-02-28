@extends('auth.index')
@section('auth')
    <div class="card borderless">
        <div class="row align-items-center ">
            <div class="col-md-12">
                <div class="card-body">
                    <h4 class="mb-3 f-w-400">Signin</h4>
                    <hr>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <input type="text" class="form-control" name="email" id="Email" placeholder="Email address">
                        </div>
                        <div class="form-group mb-4">
                            <input type="password" class="form-control" name="password" id="Password" placeholder="Password">
                        </div>
                        <div class="custom-control custom-checkbox text-left mb-4 mt-2">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label" for="customCheck1">Save credentials.</label>
                        </div>
                        <button class="btn btn-block btn-primary mb-4">Signin</button>
                    </form>
{{--                    <p class="mb-2 text-muted">Forgot password?--}}
{{--                        <a href="{{route('password.request')}}" class="f-w-400">Reset</a>--}}
{{--                    </p>--}}
{{--                    <p class="mb-0 text-muted">Don’t have an account?--}}
{{--                        <a href="" class="f-w-400">Signup</a>--}}
{{--                    </p>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
