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
                <form action="{{url('admin/profile_update').'/'.md5($data->id)}}" method="POST">@csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input class="form-control" type="text" id="name" name="name"value="{{$data->name}}" placeholder="Name" disabled>
                        </div>
                    </div>
    
                    <div class="col-sm-6">
                        <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input class="form-control" type="email" value="{{$data->email}}" id="email" name="email" placeholder="Email" disabled>
                        </div>
                    </div>
                    <div class="col-sm-6" id="old"style="display:none;">
                        <div class="mb-3">
                        <label class="form-label">Old Password</label>
                        <input class="form-control" type="text" id="oldP"  oninput="checkForm();" placeholder="Old Password">
                        <span id="message" style="color:red;"></span>
    
                        </div>
                    </div>
                    <div class="col-sm-6"  id="new"style="display:none;">
                        <div class="mb-3">
                        <label class="form-label">New Password</label>
                        <input class="form-control" type="password" name="password"  oninput="checkForm();" id="newP" placeholder="New Password">
                        <span id="message1" style="color:red;"></span>
                        </div>
                    </div><div class="col-sm-6"  id="conf"style="display:none;">
                        <div class="mb-3">
                        <label class="form-label">Confirm Password</label>
                        <input class="form-control" type="text" name="Cpassowrd"  oninput="checkForm();" id="confirmP" placeholder="New Password">
                        </div>
                    </div>
                    <div class="mb-3">
                    <label for="formFile" class="form-label">Profile Picture</label>
                    <input class="form-control" type="file" id="ref_file"name="ref_file[]" id="formFile" disabled>
                    </div>
                </div>
            </div>
            <div class="card-footer text-end">
                <button class="btn btn-primary" type="button" id="update" onclick="update_B();">Update Profile</button>
                <button class="btn btn-primary" type="submit" id="submit" style="display:none;">Submit</button>
            </div>
        </form>
        </div>
        </div>
      </div>

    </div>
</div>
@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<script>
  function update_B() {
  document.getElementById("new").style.display = 'block';
  document.getElementById("old").style.display = 'block';
  document.getElementById("conf").style.display = 'block';
  document.getElementById("update").style.display = 'none';
  document.getElementById("submit").style.display = 'block';
  document.getElementById("name").disabled = false;
  document.getElementById("email").disabled = false;
  document.getElementById("ref_file").disabled = false;
}
</script>
<script>
function checkForm()
   {
    var newP=document.getElementById("newP").value;
    var oldP=document.getElementById("oldP").value;
    var confirmP =document.getElementById("confirmP").value;

    $.ajax({
    type: 'POST',
    url: "{{ url('admin/password_check') }}/{{ md5($data->id) }}",
    data: {
        "_token": "{{ csrf_token() }}",
        oldPass: oldP,
    },
    success: function(res) {
        console.log(res);
        if (res.trim() == "1") {
            $('#message').html("");
            openssl_pkey_get_details.style.backgroundColor = "green";
        } else {
            $('#message').html("<span>This is not the same as your old password.</span>");
        }
    },

    error: function(xhr, status, error) {
        console.log(xhr.responseText);
    }
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