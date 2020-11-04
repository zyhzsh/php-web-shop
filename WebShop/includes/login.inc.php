<?php
if(isset($_POST['login-submit']))
{
    require_once('Classes.inc.php');
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($username)||empty($password))
    {
        header("Location:../login.php?login=emptyfields");
        exit();
    }
    //Invaild username 
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$username))
    {
        header("Location:../signup.php?login=invaildusername&email=".$email."&firstname=".$firstname."&lastname=".$lastname);
        exit();
    }
    else
    {        
        $accountcontroller=new AccountController();
        $accountcontroller->Login($username,$password);       
    }
}
else
{
    header("Location:../index.php");
    exit();
}
?>