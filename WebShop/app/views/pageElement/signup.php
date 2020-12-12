<?php
    if(isset($_SESSION['username']))
    {
        header("Location:userprofile.php");
        exit();
    }
?>
<link rel="stylesheet" href="app/views/css/signup.css">
<main>  
    <div class="signup_form_container">
        <div class="signup_form"><br>
        <h2 class="signup_title">SignUp</h2><br>
    <form action="app/pretreatment/User/signup.php" method="post">
        <input class="signupinput" type="text" name="username" placeholder="Username"><br>
        <input class="signupinput" type="text" name="email" placeholder="Email"><br>
        <input class="signupinput" type="text" name="firstname" placeholder="Firstname"><br>
        <input class="signupinput" type="text" name="lastname" placeholder="Lastname"><br>
        <input class="signupinput" type="password" name="password" placeholder="Password"><br>
        <input class="signupinput" type="password" name="password-repeat" placeholder="Repeat Password"><br><br>
        <button class="ui-button" type="submit" name="signup-submit">Signup</button><br><br>
        <a class="signup_go_login" href="?page=login">Login</a>
    </form>
    </div>
    </div>
    <?php       
            if(isset($_GET['error']))
            {
                if($_GET['error']=="emptyfields")
                {
                    echo '<br><p style="color:red; text-align: center;">Fill in all fields ! </p>';
                }
                else if($_GET['error']=="invaildemailusernamefirstnamelastnamelastname")
                {
                    echo '<br><p style="color:red; text-align: center;">Please Enter the vaild Email, Username,firstname,lastname</p>';
                }
                else if($_GET['error']=="invaildemailusernamefirstname")
                {
                    echo '<br><p style="color:red; text-align: center;">Please Enter the vaild Email, Username,firstname</p>';
                }
                else if($_GET['error']=="invaildemailusernamelastname")
                {
                    echo '<br><p style="color:red; text-align: center;">Please Enter the vaild Email, Username,lastname</p>';
                }
                else if($_GET['error']=="invaildemailandusername")
                {
                    echo '<br><p style="color:red; text-align: center;">Please Enter the vaild Email, Username</p>';
                }
                else if($_GET['error']=="invaildemail")
                {
                    echo '<br><p style="color:red; text-align: center;">Please Enter the vaild Email</p>';
                }
                else if($_GET['error']=="invaildusername")
                {
                    echo '<br><p style="color:red; text-align: center;">Please Enter the vaild username</p>';
                }
                else if($_GET['error']=="invaildlastname")
                {
                    echo '<br><p style="color:red; text-align: center;">Please Enter the vaild lastname</p>';
                }
                else if($_GET['error']=="passwordcheck")
                {
                    echo '<br><p style="color:red; text-align: center;">Please Check Your passcode</p>';
                }
            } 
            else if (isset($_GET['signup']))
                {
                    if($_GET['signup']=="usernameexists")
                    {
                    echo '<br><p style="color:red; text-align: center;">This User name is already in use by someone else. Please try another username.</p>';
                    }
                }
           
            
        ?>
</main>