<?php
    session_start();
    if(isset($_SESSION['username']))
    {
        header("Location:?page=profile");
        exit();
    }
    //Pretreatment When Recevied the Login Faild or other senario will dispaly Feedback for the user
    function LoginFeedBack()
    {
        if(isset($_GET['login']))
        {
            if($_GET['login']=="emptyfields")
        {
        echo '<br><p style="color:red; text-align: center;">Please fill the username and password</p>';
        }
            else if ($_GET['login']=="loginfaild")
        {
            echo '<br><p style="color:red; text-align: center;">Login faild Please Try Again</p>';
        }   
        else if ($_GET['login']=="logintheneditshoppingcart")
        {
            echo '<br><p style="color:green; text-align: center;">After logged in you could update the shopping cart</p>';
        }
        }
       else if (isset($_GET['signup']))
        {
            if($_GET['signup']=='success')
            echo '<br><p style="color:green; text-align: center;">sign up success you can login now</p>';
        }
    }
?>
<link rel="stylesheet" href="app/views/css/login.css">
<main>
<div class="login_form_container">
<div class="login_form">
<br>
<h2 class="login_title">Login</h2>
<br><br>
<form action="app/pretreatment/User/login.php" method="post" >
<p><input class="logininput" type="text" name="username"  placeholder="Username"></p>
<br>
<p><input class="logininput"  type="password" name="password"  placeholder="Password"></p>
<br>
<button class="ui-button" type = "submit" name="login-submit">Login</button>
</form><br>
<a class="login_go_signup" href="?page=signup">Signup</a>
</form>
</div>
</div>
<?php
    LoginFeedBack();
?>


</main>
