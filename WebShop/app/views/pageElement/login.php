<link rel="stylesheet" href="app/views/css/login.css">
<main>
<div class="login_form_container">
<div class="login_form">
<br>
<h2 class="login_title">Login</h2>
<br><br>
<form action="includes/login.inc.php" method="post" >
<p><input class="logininput" type="text" name="username"  placeholder="Username"></p>
<br>
<p><input class="logininput"  type="password" name="password"  placeholder="Password"></p>
<br>
<button type = "submit" name="login-submit">Login</button>
</form><br>
<a class="login_go_signup" href="signup.php">Signup</a>
<form action="includes/logout.inc.php" method="post" ><br>
<button class="" type = "submit" name="logout-submit">Logout</button>
</form>
</div>
</div>
</main>
