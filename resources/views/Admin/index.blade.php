@extends('Admin.simple.master')
@section('title', 'Ecommerce')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css') }}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Dashboard</h3>
@endsection


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-4">
        <div class="card course-box">
            <div class="card-body">
            <div class="course-widget">
                <div class="course-icon">
                <svg class="fill-icon">
                    <use href="{{ asset('assets/svg/icon-sprite.svg#course-1') }}"></use>
                </svg>
                </div>
                <div>
                <h4 class="mb-0">{{getCount_Enquiry()}}</h4><span class="f-light">Total Enquries</span><a class="btn btn-light f-light" style="width: 95px;" href="{{url('admin/enquiry/list')}}">View<span class="ms-2">
                    <svg class="fill-icon f-light">
                        <use href="{{ asset('assets/svg/icon-sprite.svg#arrowright') }}"></use>
                    </svg></span></a>
                </div>
            </div>
            </div>
            <ul class="square-group">
            <li class="square-1 warning"></li>
            <li class="square-1 primary"></li>
            <li class="square-2 warning1"></li>
            <li class="square-3 danger"></li>
            <li class="square-4 light"></li>
            <li class="square-5 warning"></li>
            <li class="square-6 success"></li>
            <li class="square-7 success"></li>
            </ul>
        </div>
        </div>
        <div class="col-sm-4">
        <div class="card course-box">
            <div class="card-body">
            <div class="course-widget">
                <div class="course-icon warning">
                <svg class="fill-icon">
                    <use href="{{ asset('assets/svg/icon-sprite.svg#course-2') }}"></use>
                </svg>
                </div>
                <div>
                <h4 class="mb-0">{{getCount_gallery()}}</h4><span class="f-light">Total Active Gallery</span><a class="btn btn-light f-light" style="width: 95px;" href="{{url('admin/gallery/list')}}">View<span class="ms-2">
                    <svg class="fill-icon f-light">
                        <use href="{{ asset('assets/svg/icon-sprite.svg#arrowright') }}"></use>
                    </svg></span></a>
                </div>
            </div>
            </div>
            <ul class="square-group">
            <li class="square-1 warning"></li>
            <li class="square-1 primary"></li>
            <li class="square-2 warning1"></li>
            <li class="square-3 danger"></li>
            <li class="square-4 light"></li>
            <li class="square-5 warning"></li>
            <li class="square-6 success"></li>
            <li class="square-7 success"></li>
            </ul>
        </div>
        </div>
        <div class="col-sm-4">
        <div class="card course-box">
            <div class="card-body">
            <div class="course-widget">
                <div class="course-icon warning">
                <svg class="fill-icon">
                    <use href="{{ asset('assets/svg/icon-sprite.svg#course-2') }}"></use>
                </svg>
                </div>
                <div>
                <h4 class="mb-0">{{getCount_acheve()}}</h4><span class="f-light">Total Actvie Achievements</span><a class="btn btn-light f-light" style="width: 95px;" href="{{url('admin/achievements/list')}}">View<span class="ms-2">
                    <svg class="fill-icon f-light">
                        <use href="{{ asset('assets/svg/icon-sprite.svg#arrowright') }}"></use>
                    </svg></span></a>
                </div>
            </div>
            </div>
            <ul class="square-group">
            <li class="square-1 warning"></li>
            <li class="square-1 primary"></li>
            <li class="square-2 warning1"></li>
            <li class="square-3 danger"></li>
            <li class="square-4 light"></li>
            <li class="square-5 warning"></li>
            <li class="square-6 success"></li>
            <li class="square-7 success"></li>
            </ul>
        </div>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h4>Latest Enquiries</h4>
            </div>
        <div class="card-body table-responsive">
                    <table class="display" id="dashboard-table" style="font-size:14px;">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th>Client Name</th>
                                <th>Client Email</th>
                                <th>Client Message</th>
                                <th>Enquired on</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Jai Ram</td>
                                <td>jai12@gmail.com</td>
                                <td>Karate classes</td>
                                <td>26-03-23</td>
                                <td>
                                    <center>
                                    <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                                    <a class="view" title="View" data-toggle="tooltip"><i class="material-symbols-outlined">visibility</i></a>
                                    </center>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/stock-prices.js') }}"></script>
    <script src="{{ asset('assets/js/chart/apex-chart/moment.min.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('assets/js/datepicker/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard/dashboard_3.js') }}"></script>
    <script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>


@endsection
