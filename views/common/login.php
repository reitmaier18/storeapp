<div class="card" id="login-card">
  <div class="card-body">
    <h5 class="card-title">Login</h5>
    <hr>
    <h6 class="card-subtitle mb-2 text-muted">Please insert your user and password</h6>
    <br>
    <form id="login">
      <div class="form-group">
        <label for="user_email">Email address</label>
        <input type="text" name="user_email" id="user_email" class="form-control" placeholder="example@gmail.com">
        <br>
        <label for="user_password">Password</label>
        <input type="password" name="user_password" id="user_password" class="form-control">
        <br>
        <input type="button" value="Send" class="btn btn-primary" onclick="sendForm('login', 'login')">
        <input type="button" value="Register" class="btn btn-info" onclick="user_register()">
      </div>
    </form>
  </div>
</div>