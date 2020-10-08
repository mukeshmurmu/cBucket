
<!--SignUp Form-->
<div class="modal" tabindex="-1" role="dialog" id="signup-form">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Signup Form</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="signup_close()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" class="" method="POST" >
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required="">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">     
          <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1" style="padding:2px 0px 0px 5px">Remember me</label>
        </div>
        <button type="submit" class="btn btn-primary" style="float:right; margin-top:-15px">Sign In</button>
        </form>
      </div>
      <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">New around here? Sign up</a>
  <a class="dropdown-item" href="#">Forgot password?</a>
    </div>
  </div>
</div>
