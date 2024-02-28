@extends('app')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
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
                        <li class="breadcrumb-item"><a href="#!">Apply</a></li>
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
                        <form method="POST" action="{{route('apply.store')}}" class="needs-validation" novalidate style="width: 100%;">
                            @csrf
                            <div class="form-row">
                                <input type="hidden" id="user_id" name="user_id" value="{{Auth::user()->id}}">
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label for="leaveType">Leave Type</label>
                                        <select class="custom-select" id="leaveType" name="type" required>
                                            <option value="" disabled selected>Open this select menu</option>
                                            @foreach($leavetype_arr as $key => $val)
                                                <option value="{{$key}}">{{$val}}</option>
                                            @endforeach
                                        </select>
                                        <div class="invalid-feedback">Please Select Leave Type</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="txtReason">Reason</label>
                                    <input type="text" class="form-control" id="txtReason" name="reason" placeholder="Reason" required>
                                    <div class="invalid-feedback">
                                        Please Specific your Reason!!
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4 mb-3">
                                    <label for="leaveStartingDate">Starting Date</label>
                                    <input type="date" class="form-control" id="leaveStartingDate" name="starting_date" required>
                                    <div class="invalid-feedback">Please Select Leave Start Date</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="leaveResumptionDate">Resumption Date</label>
                                        <input type="date" class="form-control" id="leaveResumptionDate" name="resumption_date" required>
                                        <div class="invalid-feedback">Please Select Resumption Start Date</div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="govt_holiday">Govt Holiday</label>
                                    <input type="date" class="form-control" id="govt_holiday" name="govt_holiday" >
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="total_days">Total Leave day</label>
                                    <input type="text" class="form-control" id="total_days" name="total_days" value="" readonly>
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
