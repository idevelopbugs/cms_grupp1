<?php
    include "header.php";
?>

<div class="container">
<div class="card" style="width: 20rem;">
  <div class="card-block">
    <form method="post" action="signup.php" id="signupform" name="loginform">
        <div class="form-login">
            <h4>Sign up</h4>
            <input type="text" class="form-control" id="username" placeholder="Username" maxlength="20" name="username" required>
            </br>
            <input type="password" class="form-control" id="password" placeholder="Password" maxlength="20" name="password" required>
            </br>
            <div class="wrapper">
            <span class="group-btn">     
            <button class="btn btn-primary" type="submit" name="signup" value="Login">Sign up</button>
            </span>
            </div>
        </div>
    </form>
  </div>
</div>
</div>
