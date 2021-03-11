<div class="card" id="card">
    <div class="card-body">
        <h4 class="card-title"><?=$data['title']?></h4>
        <hr>
        <h5 class="card-subtitle mb-2 text-muted"><?=$data['subtitle']?></h5>
        <form id="user_register">
            <div class="form-group">
                <label for="user_name">Full name</label>
                <input type="text" name="user_name" id="user_name" class="form-control">
                <br>
                <label for="user_email">Email address</label>
                <input type="text" name="user_email" id="user_email" class="form-control" placeholder="example@gmail.com">
                <label for="user_password">Password</label>
                <input type="password" name="user_password" id="user_password" class="form-control">
                <br>
                <input type="button" value="Send" class="btn btn-primary" onclick="sendForm('user_register', 'user_register')">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
  </div>
</div>