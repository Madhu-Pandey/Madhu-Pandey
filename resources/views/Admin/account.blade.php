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
    <div class="row">
        <div class="card" >
        <div class="card-header">
            <h4 class="card-title mb-0">Edit Profile</h4>
            <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
        </div>
        <div class="card-body">
            <form action="" onsubmit="return checkForm();">@csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input class="form-control" type="text" value="{{$data->name}}" placeholder="Name">
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input class="form-control" type="email" value="{{$data->email}}" placeholder="Email">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                    <label class="form-label">Old Password</label>
                    <input class="form-control" type="text" id="oldP"placeholder="Old Password">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                    <label class="form-label">New Password</label>
                    <input class="form-control" type="password" name="passowrd" id="newp" placeholder="New Password">
                    </div>
                </div><div class="col-sm-6">
                    <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input class="form-control" type="text" name="Cpassowrd" id="confirmP" placeholder="New Password">
                    </div>
                </div>
                <div class="mb-3">
                <label for="formFile" class="form-label">Profile Picture</label>
                <input class="form-control" type="file" id="formFile">
                </div>
            </div>
        </div>
        <div class="card-footer text-end">
            <button class="btn btn-primary" type="submit">Update Profile</button>
        </div>
    </form>
    </div>
    </div>
</div>

@endsection

@section('script')
<script>
function checkForm()
   {
    var oldP=document.getElementById("oldP").value;
    var newP=document.getElementById("newP").value;
    var confirmP =document.getElementById("confirmP").value;

    if(oldP!=""&&newP!=""&&confirmP!="")
    {
      if(oldP!=newP)
      {
        if(newP==confirmP)
         {
          return true;
         }
         else
          {
            alert("Confirm password is not same as you new password.");
            return false;
          }
      }
      else
     {
      alert(" This Is Your Old Password,Please Provide A New Password");
      return false;
     }
    }
    else
    {
     alert("All Fields Are Required");
     return false;
    }
}
</script>
@endsection
