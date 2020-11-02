<?php
if(isset($_POST['signup-submit']))
{
   include_once('Classes.inc.php');
   $postcontroller=new PostController();
   $username=$_POST['username'];
   $password=$_POST['password'];
   $email=$_POST['email'];
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $repeatpassword=$_POST['password-repeat'];
    if(empty($username)||empty($password)||empty($email)||empty($firstname)||empty($lastname)||empty($repeatpassword))
    {
        header("Location:../signup.php?error=emptyfields&username=".$username."&email=".$email."&firstname=".$firstname."&lastname=".$lastname);
        exit();
    } 
    //Invaild email,username,firstname,lastname
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username)&&!preg_match("/^[a-zA-Z0-9]*$/",$firstname)&&!preg_match("/^[a-zA-Z0-9]*$/",$lastname))
    {
        header("Location:../signup.php?error=invaildemailusernamefirstnamelastname");
        exit();
    }
    //Invaild email,username,firstname
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username)&&!preg_match("/^[a-zA-Z0-9]*$/",$firstname))
    {
        header("Location:../signup.php?error=invaildemailusernamefirstname&lastname=".$lastname);
        exit();
    }
    //Invaild email,username,lastname
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username)&&!preg_match("/^[a-zA-Z0-9]*$/",$lastname))
    {
        header("Location:../signup.php?error=invaildemailusernamelastname&firstname=".$firstname);
        exit();
    }
    //Invaild email and username
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username))
    {
        header("Location:../signup.php?error=invaildemailandusername&firstname=".$firstname."&lastname=".$lastname);
        exit();
    }
    //Invaild email
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        header("Location:../signup.php?error=invaildemail&username=".$username."&firstname=".$firstname."&lastname=".$lastname);
        exit();
    }
    //Invaild username
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$username))
    {
        header("Location:../signup.php?error=invaildusername&email=".$email."&firstname=".$firstname."&lastname=".$lastname);
        exit();
    }
    //Invaild firstname
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$firstname))
    {
        header("Location:../signup.php?error=invaildfirstname&email=".$email."&lastname=".$lastname);
        exit();
    }
    //Invaild lastname
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$lastname))
    {
        header("Location:../signup.php?error=invaildlastname&email=".$email."&firstname=".$firstname);
        exit();
    }
    //Invaild Repeat-Password 
    else if($password!==$repeatpassword)
    {
        header("Location:../signup.php?error=passwordcheck&username=".$username."&email=".$email."&firstname=".$firstname."&lastname=".$lastname);
        exit();
    }
    //Sign Up The New Account
    else
    {
        if($postcontroller->SignUp())
        {
            header("Location:../signup.php?signup=success");
            exit();
        } 
        else
        {
            header("Location:../signup.php?signup=faild&username=".$username."&email=".$email."&firstname=".$firstname."&lastname=".$lastname);
            exit();
        }
    }
}
else
{
    header("Location:../signup.php");
        exit();
}
?>