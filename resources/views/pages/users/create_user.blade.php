@extends('app')
@section('title', ' - Create User')
@section('content')
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">New User Create</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">User Create</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="row">
        <div class="col-xl-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <form method="POST" action="" class="needs-validation" novalidate style="width: 100%;">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-10 mb-5">
                                </div>
                                <div class="col-md-2 mb-5" style="height: 155px">
                                    <div class="card border m-0 p-0" style="height: 150px; width: 155px;">
                                        <div class="card-body p-1" style="text-align: center">
                                         <img src="{{asset('assets/images/user/images.png')}}" id="canv1" style="height: 140px" class="img-thumbnail p-0" />
                                            <label for="imageUpload">Choose Your Photo</label>
                                            <input type="file" class="form-control-file" id="imageUpload" required>
                                            <div class="invalid-feedback">Please Enter your Photo!!</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="leaveType">User Type</label>
                                        <select class="custom-select" id="leaveType" name="type" required>
                                            <option value="" disabled selected>Open this select menu</option>
                                            @foreach($user_type_arr as $key => $val)
                                                @if($key === 1)
                                                    <option value="{{$key}}" disabled >{{$val}}</option>
                                                @else
                                                    <option value="{{$key}}">{{$val}}</option>
                                                @endif

                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">Please Select Leave Type</div>
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="txtReason">Name</label>
                                    <input type="text" class="form-control" id="txtName" name="name" placeholder="Name" required>
                                    <div class="invalid-feedback">Please Enter your Name!!</div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="nbrPhone">Phone</label>
                                    <input type="text" class="form-control" id="nbrPhone" name="phone" placeholder="Phone" required>
                                    <div class="invalid-feedback">Please Enter your Phone number!!</div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="txtEmail">Email</label>
                                    <input type="text" class="form-control" id="txtEmail" name="email" placeholder="Email" required>
                                    <div class="invalid-feedback">Please Enter your Email!!</div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="txtArea">Area</label>
                                    <input type="text" class="form-control" id="txtArea" name="cur_area" placeholder="ex: H 34/4, Road No 4">
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cur_division">Division</label>
                                    <select class="custom-select" id="division" name="cur_division_id" required>
                                        <option value="" disabled selected>Open this select menu</option>
                                        @foreach($divisions_arr as $division)
                                            <option value="{{ $division['id'] }}">{{ $division['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cur_district">District</label>
                                    <select class="custom-select" id="district" name="cur_district_id" required>
                                        <option value="" disabled selected>Open this select menu</option>
                                    </select>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cur_thana">Upazila</label>
                                    <select class="custom-select" id="upazila" name="cur_thana_id" required>
                                        <option value="" disabled selected>Open this select menu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="nbrSalary">Salary</label>
                                    <input type="text" class="form-control" id="nbrSalary" name="gross_salary" placeholder="Salary" required>
                                    <div class="invalid-feedback">Please Enter your Salary!!</div>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit" onclick="don">Submit form</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



