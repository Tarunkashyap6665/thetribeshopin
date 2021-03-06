@extends('layouts.front.masterlayout')
@section('content')
<section id="aa-myaccount">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <div class="aa-myaccount-area">         
             <div class="row">
               <div class="col-md-6 col-md-offset-3 bg-danger">
                 <div class="aa-myaccount-login" style="padding: 15px 5px;">
                 <h4>Login</h4>
                  <form action="{{route('login')}}" method="POST" class="aa-login-form">
                    @csrf
                   <label for="">Email<span>*</span></label>
                    <input type="text" placeholder="Email" name="email">
                    @error('email')
                    <div class="alert alert-danger" role="alert">{{$message}}</div>
                    @enderror
                    <label for="">Password<span>*</span></label>
                     <input type="password" placeholder="Password" name="password">
                     @error('password')
                     <div class="alert alert-danger" role="alert">{{$message}}</div>
                     @enderror
                     <button type="submit" class="aa-browse-btn">Login</button>
                     <label class="rememberme" for="rememberme"><input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me </label>
                     <p class="aa-lost-password"><a href={{route("forget")}}>Lost your password?</a></p>
                   </form>
                 </div>
               </div>
             </div>          
          </div>
        </div>
      </div>
    </div>
</section>
@endsection