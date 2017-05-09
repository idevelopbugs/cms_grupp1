<?php
    include "header.php";
?>

<div class="container">
<div class="card" style="width: 20rem;">
  <div class="card-block">
    <form method="post" action="includes/login.php" id="loginform" name="loginform"> 
        <div class="form-login">
            <h4>Login</h4>
            <input type="text" class="form-control" id="username" placeholder="Username" maxlength="20" name="username" autocomplete="off">
            <br>
            <input type="password" class="form-control" id="password" placeholder="Password" maxlength="20" name="password" autocomplete="off">
            <br>
            <div class="wrapper">
            <span class="group-btn">     
            <button class="btn btn-primary" type="submit" name="login" value="Login">Login</button>
            </span>
            </div>
        </div>
    </form>
  </div>
</div>
</div>
