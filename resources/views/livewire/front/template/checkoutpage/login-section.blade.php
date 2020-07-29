<div class="panel panel-default aa-checkout-login">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          Client Login 
        </a>
      </h4>
    </div>
    <form action="{{route('login')}}" method="post">
      <div id="collapseTwo" class="panel-collapse collapse">
        <div class="panel-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat voluptatibus modi pariatur qui reprehenderit asperiores fugiat deleniti praesentium enim incidunt.</p>
          <input type="text" placeholder="Username or email" name="email">
          <input type="password" placeholder="Password" name="password">
          <button type="submit" class="aa-browse-btn">Login</button>
          <label for="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
          <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
        </div>
      </div>
    </form>
    
  </div>