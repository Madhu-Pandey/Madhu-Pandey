@extends('Admin.simple.master')
@section('title', 'Edit Profile')

@section('css')
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Edit Profile</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Users</li>
<li class="breadcrumb-item active">Edit Profile</li>
@endsection

@section('content')
<div class="container-fluid">
    <div class="edit-profile">
      <div class="row" id="form_preview">
        <div class="col-xl-4">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title mb-0">My Profile</h4>
              <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
            </div>
            <div class="card-body">
                <div class="row mb-2">
                  <div class="profile-title">
                    <div class="media"><img class="img-70 rounded-circle" alt="" src="{{ asset('uploads/f2.jpg') }}">
                      <div class="media-body">
                        <h5 class="mb-1">{{$data->name}}</h5>
                        <p>ADMIN</p>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8">
          <div class="card" >
            <div class="card-header">
              <h4 class="card-title mb-0">Edit Profile</h4>
              <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input class="form-control" type="text" value="{{$data->name}}" placeholder="Name">
                  </div>
                </div>

                <div class="col-sm-6 ">
                  <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input class="form-control" type="email" value="{{$data->email}}" placeholder="Email">
                  </div>
                </div>

               <div class="mb-3">
                <label for="formFile" class="form-label">Profile Picture</label>
                <input class="form-control" type="file" id="formFile">
              </div>
              </div>
            </div>
            <div class="card-footer text-end">
              <a class="btn btn-primary" type="submit" href="{{url('admin/profile_update')}}">Update Profile</a>
            </div>
          </div>
        </div>
      </div>

    </div>
</div>
@endsection

@section('script')
<script>
    function update(){
     var fp = document.getElementById('form_preview');
     var edit = document.getElementById('edit');
     fp.style.display('none');
     edit.style.display('flex');
    }
</script>
@endsection
