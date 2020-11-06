<?php
    session_start();
    if(isset($_SESSION['username']))
    {
        header("Location:userprofile.php");
        exit();
    }
?>
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
</form>
</div>
</div>
<?php
if(isset($_GET['login']))
{
    if($_GET['login']=="emptyfields")
    {
        echo '<br><p style="color:red; text-align: center;">Please fill the username and password</p>';
    }else if ($_GET['login']=="loginfaild")
    {
        echo '<br><p style="color:red; text-align: center;">Login faild Please Try Again</p>';
    }else if ($_GET['login']=="logintheneditshoppingcart")
    {
        echo '<br><p style="color:green; text-align: center;">Ater logged in you could update the shopping cart</p>';
    }
}else if (isset($_GET['signup']))
{
    if($_GET['signup']=='success')
    echo '<br><p style="color:green; text-align: center;">sign up success you can login now</p>';
}
?>


</main>
