@extends('v1.manufacturer.layouts.simple.master')
@section('title', 'Default')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/datatables.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>New Machine Category</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Machine Configuration</li>
<li class="breadcrumb-item active">Add New Machine Category</li>
@endsection

@section('content')
<div class="container-fluid">
	<div class="row second-chart-list third-news-update">

        <div class="container-fluid">
            <div class="row size-column">
              <div class="col-xl-12 xl-100 box-col-12">
                <div class="row">
                  <div class="col-xl-12">

                <div class="card" id="form-card" >
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title" id="card-title">Add New Machine Category</h4>
                            </div>
                        </div>
                        <br>
                        <form id="product-form" enctype="multipart/form-data" action="{{url('manufacturer/category/submit')}}" method="post">@csrf
                            @if(Session::has('Success'))
                            <div class="alert alert-success">{{Session::get('Success')}}</div>
                            @endif
                            @if(Session::has('Fail'))
                            <div class="alert alert-danger">{{Session::get('Fail')}}</div>
                            @endif
                           <div class="form theme-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="field-3" class="form-label">Class of Vehicle</label>
                                            <input type="text" oninput="this.value = this.value.toUpperCase()"  name="cat_cov" class="form-control"
                                                id="class_vehicle"  placeholder="Class of vehicle" required>

                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                        <label for="field-3" class="form-label">Category Name</label>
                                            <input type="text" name="cat_name" class="form-control"
                                                id="cat_name" oninput="this.value = this.value.toUpperCase()" placeholder="Category Name" required>

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="field-3" class="form-label">HSN Number</label>
                                            <input type="text" name="cat_hsn" class="form-control"  onkeypress="return numericOnly(event)" minlength="6" maxlength="8"
                                                id="cat_hsn" placeholder="Category HSN Number" required>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea9">Category Description</label>
                                            <textarea class="form-control"  placeholder="Category Description" name="cat_descr" rows="3"></textarea>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-danger waves-effect" onclick="history.back();">Cancel</button>
                                <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
	</div>
</div>
<script type="text/javascript">
	var session_layout = '{{ session()->get('layout') }}';
</script>
@endsection

@section('script')
<script src="{{asset('assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/js/datatable/datatables/datatable.custom.js')}}"></script>
@endsection
