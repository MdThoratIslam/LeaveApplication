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
                        <li class="breadcrumb-item"><a href="#!">List</a></li>
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
                        <table class="table table-bordered" id="" >
                            <thead>
                                <tr style="text-align: center">
                                    <th style="width: 2%;">Sl No</th>
                                    <th style="width: 11%;">Leave Type</th>
                                    <th style="width: 30%;">Reason</th>
                                    <th style="width: 11%;">Start Date</th>
                                    <th style="width: 11%;">Resumption Date</th>
                                    <th style="width: 11%;">Total Days</th>
                                    <th style="width: 5%;">Recommending Authority</th>
                                    <th style="width: 5%;">Approving Authority</th>
                                    <th style="width: 11%;">Print</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $i = 1; @endphp
                                @foreach($leaveResource as $leave)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td style="text-align: center">{{$leavetype_arr[$leave->type]}}</td>
                                        <td style="text-align: center">{{$leave->reason}}</td>
                                        <td style="text-align: center">
                                            {{ \Carbon\Carbon::parse($leave->starting_date)->format('d-M-Y') }}
                                        </td>
                                        <td style="text-align: center">
                                            {{ \Carbon\Carbon::parse($leave->resumption_date)->format('d-M-Y') }}
                                        </td>
                                        <td style="text-align: center">{{$leave->total_days}}</td>
                                        <td style="text-align: center">
                                            @if($leave->rcomnd_auth_status == 1)
                                                <span class="bg-success text-dark">Recommended</span>
                                            @else
                                                <span class="bg-danger text-dark">Not Recommended</span>
                                            @endif
                                        </td>
                                        <td style="text-align: center">
                                            @if($leave->aprv_auth_status == 1)
                                                <span class="bg-success text-dark">Approved</span>
                                            @else
                                                <span class="bg-danger text-dark">Not Approved</span>
                                            @endif
                                        </td>
                                        <td style="text-align: center">
                                            <a href="{{route('print', $leave->id)}}" class="btn btn-primary btn-sm">
                                                <i class="feather icon-printer"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation example">
                                <div class="pagination justify-content-end">
                                    {{$leaveResource->links()}}
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- [ Main Content ] end -->
@endsection
