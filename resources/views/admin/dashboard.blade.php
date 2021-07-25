@extends('admin.master')
@section('title')
<div class="header-left">
    <div class="dashboard_bar">
        Dashboard
    </div>
</div>
@endsection
@section('bread')
<div class="page-titles">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
        <li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
    </ol>
</div>
@endsection
@section('content')
<div class="row">
    <div class="col-xl-4 col-xxl-5 col-lg-6">
        <div class="card ticket-bx">
            <div class="card-body">
                <div class="d-sm-flex d-block pb-sm-3 align-items-end">
                    <div class="mr-auto pr-3 mb-2 mb-sm-0">
                        <span class="text-white fs-20 font-w200 d-block mb-sm-3 mb-2">Total Numbers of Visitors Today</span>
                        <h2 class="fs-40 text-white mb-0">{{$today}}</h2>
                    </div>
                </div>
                <div class="card-body p-0">
                    <canvas id="widgetChart2" height="60"></canvas>
                </div>
                <p class="fs-12">Total numbers of customers who has visited your menu in the past 24 hours</p>
            </div>
            
        </div>
    </div>
    <div class="col-xl-4 col-xxl-7 col-lg-6">
        <div class="widget-stat card bg-success">
            <div class="card-body p-4">
                <div class="media text-center">
                    <p class="mb-1">Total Numbers of Visitors Last 7 Days</p>
                </div>
                <div class="media-body text-white">
                    <div class="row">
                        <div class="col-lg-6 text-center"><span class="mr-3">
                            <i class="flaticon-381-user-7"></i>
                        </span></div>
                        <div class="col-lg-6 text-center"><h3 class="text-white">{{$week}}</h3></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-4 col-xxl-7 col-lg-6">
        <div class="widget-stat card bg-info">
            <div class="card-body p-4">
                <div class="media text-center">
                    <p class="mb-1">Total Numbers of Visitors Last Month</p>
                </div>
                <div class="media-body text-white text-center">
                    <div class="row">
                        <div class="col-lg-6 text-center"><span class="mr-3">
                            <i class="flaticon-381-user-7"></i>
                        </span></div>
                        <div class="col-lg-6 "><h3 class="text-white">{{$month}}</h3></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
@section('JS')
<script src="vendor/chart.js/Chart.bundle.min.js"></script>
<script src="vendor/apexchart/apexchart.js"></script>
<!-- Dashboard 1 -->
<script src="js/dashboard/dashboard-1.js"></script>
@endsection
