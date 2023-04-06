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
                  <form class="theme-form" action="{{url('admin/submit')}}" method="post">@csrf
                     <h4>Sign Up to account</h4>
                     <p>Enter your email & password to login</p>
                     <div class="form-group">
                        <label class="col-form-label">Name</label>
                        <input class="form-control" name="name" type="text" required="" placeholder="Enter Your Name">
                     </div>
                     <div class="form-group">
                        <label class="col-form-label">Email Address</label>
                        <input class="form-control" type="email" name="email" required="" placeholder="Test@gmail.com">
                     </div>
                     <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <input class="form-control" type="password" name="login[password]" required="" placeholder="*********">
                        <div class="show-hide"><span class="show">                         </span></div>
                     </div>
                     <div class="form-group mb-0">

                        <!-- <a class="link" href="">Forgot password?</a> -->
                        <button class="btn btn-primary btn-block" type="submit">Sign up</button>
                     </div>

                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection

@section('script')
@endsection
