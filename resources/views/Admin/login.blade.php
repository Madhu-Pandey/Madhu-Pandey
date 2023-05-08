@extends('Admin.authentication.master')
@section('title', 'Login')

@section('css')
@endsection

@section('style')
@endsection

@section('content')
<div class="container-fluid p-0">
   <div class="row m-0">
      <div class="col-12 p-0">
         <div class="login-card">
            <div>
               <div><a class="logo" href=""><img class="img-fluid for-light" src="{{asset('uploads/mma.png')}}" width="10%" height="10%"alt="looginpage"></a></div>
               <div class="login-main">
                  <form class="theme-form" action="{{url('admin/in')}}" method="post">@csrf
                     <h4>Sign in to account</h4>
                     <p>Enter your email & password to login</p>
                     <div class="form-group">
                        <label class="col-form-label">Email Address</label>
                        <input class="form-control" type="email" name="email" required="" placeholder="Test@gmail.com">
                        <span id="error_data_email" style="color:red ; display:none">** Email Address is
                                        Incorrect</span>
                     </div>
                     <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                        <div class="show-hide"><span class="show">                         </span></div>
                        <span id="error_data_pass" style="color:red ; display:none">** Password is
                                        Incorrect</span>
                     </div>
                     <div class="form-group mb-0">

                        <a class="link" href="">Forgot password?</a>
                        <button class="btn btn-primary btn-block" type="submit">Sign in</button>
                     </div>

                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<input type="hidden" id="error_data" value="{{ isset($error_data) ? $error_data : 0 }}">
@endsection

@section('script')
<script>
    $(document).ready(function () {
        if (document.getElementById('error_data').value != 0) {
            const e_data = JSON.parse((document.getElementById('error_data').value));
            $.each(e_data, function (key, val) {
                if (val == false) {
                    document.getElementById('error_data_' + key).style.display = 'block';
                    document.getElementById('login_'+key).style.borderColor = 'red';

                }
            });
        }

    });
</script>
@endsection
