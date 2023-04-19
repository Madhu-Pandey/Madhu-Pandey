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
            <form action="">@csrf
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
                    <input class="form-control" type="text" id="oldP" oninput="checkForm()" placeholder="Old Password">
                    <span id="message1" style="color:red;"></span>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-3">
                    <label class="form-label">New Password</label>
                    <input class="form-control" type="password" name="passowrd" oninput="checkForm()" id="newP" placeholder="New Password">
                    <span id="message1" style="color:red;"></span>
                    </div>
                </div><div class="col-sm-6">
                    <div class="mb-3">
                    <label class="form-label">Confirm Password</label>
                    <input class="form-control" type="text" name="Cpassowrd" oninput="checkForm()" id="confirmP" placeholder="New Password">
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
    var newP=document.getElementById("newP").value;
    var oldP=document.getElementById("oldP").value;
    var confirmP =document.getElementById("confirmP").value;

        $.ajax({
            type: 'POST',
            url: {{url('admin/password_check').'/'.md5($data->id)}},
            data: {
                oldPass: oldP,
            },
            success: function success(res) {
                if(res!=''){
                    document.getElementById('message').innerHTML = "<span>This is not same as you old password.</span>";
                }else{
                    document.getElementById('message').innerHTML = " ";
                }
            },
        });

    if(newP!=""&&confirmP!="")
    {
      if(oldP!=newP)
      {
        if(newP==confirmP)
         {
            document.getElementById('message1').innerHTML = " ";
            return true;
         }
         else
          {
            document.getElementById('message1').innerHTML = "<span>Confirm password is not same as you new password.</span>";
            return false;
          }
      }
      else
     {
        document.getElementById('message1').innerHTML = "<span> This Is Your Old Password,Please Provide A New Password</span>";
      return false;
     }
    }

}
</script>
@endsection


