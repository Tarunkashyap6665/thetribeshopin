@extends('layouts.front.masterlayout')
@section('content')
<section id="aa-myaccount">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         <div class="aa-myaccount-area">         
             <div class="row">
               <div class="col-md-6 col-md-offset-3 bg-danger">
                 <div class="aa-myaccount-register" style="padding: 15px 5px;">                 
                  <h4>Register</h4>
                  <form action="{{route('register')}}" method="POST" class="aa-login-form">
                    @csrf
                     <label for="">Username<span>*</span></label>
                     <input type="text" placeholder="Username" name="name">
                     @error('name')
                     <div class="alert alert-danger" role="alert">{{$message}}</div>
                     @enderror
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
                     <label for="">Confirm Password<span>*</span></label>
                     <input type="password" placeholder="Password" name="password_confirmation">
                     <button type="submit" class="aa-browse-btn">Register</button>                     
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