<?php
if(isset($_POST['signup-submit']))
{
   require_once('../mvcclasses.php');
   $accountcontroller=new AccountController();
   $username=$_POST['username'];
   $password=$_POST['password'];
   $email=$_POST['email'];
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $repeatpassword=$_POST['password-repeat'];
    if(empty($username)||empty($password)||empty($email)||empty($firstname)||empty($lastname)||empty($repeatpassword))
    {
        header("Location:../../../?page=signup&error=emptyfields&username=".$username."&email=".$email."&firstname=".$firstname."&lastname=".$lastname);
        exit();
    } 
    //Invaild email,username,firstname,lastname
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username)&&!preg_match("/^[a-zA-Z0-9]*$/",$firstname)&&!preg_match("/^[a-zA-Z0-9]*$/",$lastname))
    {
        header("Location:../../../?page=signup&error=invaildemailusernamefirstnamelastname");
        exit();
    }
    //Invaild email,username,firstname
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username)&&!preg_match("/^[a-zA-Z0-9]*$/",$firstname))
    {
        header("Location:../../../?page=signup&error=invaildemailusernamefirstname&lastname=".$lastname);
        exit();
    }
    //Invaild email,username,lastname
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username)&&!preg_match("/^[a-zA-Z0-9]*$/",$lastname))
    {
        header("Location:../../../?page=signup&error=invaildemailusernamelastname&firstname=".$firstname);
        exit();
    }
    //Invaild email and username
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL)&&!preg_match("/^[a-zA-Z0-9]*$/",$username))
    {
        header("Location:../../../?page=signup&error=invaildemailandusername&firstname=".$firstname."&lastname=".$lastname);
        exit();
    }
    //Invaild email
    else if(!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        header("Location:../../../?page=signup&error=invaildemail&username=".$username."&firstname=".$firstname."&lastname=".$lastname);
        exit();
    }
    //Invaild username
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$username))
    {
        header("Location:../../../?page=signup&error=invaildusername&email=".$email."&firstname=".$firstname."&lastname=".$lastname);
        exit();
    }
    //Invaild firstname
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$firstname))
    {
        header("Location:../../../?page=signup&error=invaildfirstname&email=".$email."&lastname=".$lastname);
        exit();
    }
    //Invaild lastname
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$lastname))
    {
        header("Location:../../../?page=signup&error=invaildlastname&email=".$email."&firstname=".$firstname);
        exit();
    }
    //Invaild Repeat-Password 
    else if($password!==$repeatpassword)
    {
        header("Location:../../../?page=signup&error=passwordcheck&username=".$username."&email=".$email."&firstname=".$firstname."&lastname=".$lastname);
        exit();
    }
    //Sign Up The New Account
    else
    {
        $accountcontroller->SignUp();
    }
}
else
{
    header("Location:../../../?page=signup");
        exit();
}
?>