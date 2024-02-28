@extends('app')
@section('content')
    <!-- [ breadcrumb ] start -->
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Dashboard Analytics</h5>
                    </div>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">Dashboard</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- [ breadcrumb ] end -->
    <!-- [ Main Content ] start -->
    <div class="row">
        <div class="col-xl-4 col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h3>$16,756</h3>
                            <h6 class="text-muted m-b-0">Visits<i class="fa fa-caret-down text-c-red m-l-10"></i>
                            </h6>
                        </div>
                        <div class="col-6">
                            <div id="seo-chart1" class="d-flex align-items-end"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h3>49.54%</h3>
                            <h6 class="text-muted m-b-0">Bounce Rate<i
                                    class="fa fa-caret-up text-c-green m-l-10"></i></h6>
                        </div>
                        <div class="col-6">
                            <div id="seo-chart2" class="d-flex align-items-end"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <h3>1,62,564</h3>
                            <h6 class="text-muted m-b-0">Products<i class="fa fa-caret-down text-c-red m-l-10"></i>
                            </h6>
                        </div>
                        <div class="col-6">
                            <div id="seo-chart3" class="d-flex align-items-end"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- seo end -->


    </div>
    <!-- [ Main Content ] end -->
@endsection
