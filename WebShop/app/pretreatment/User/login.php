<?php
if(isset($_POST['login-submit']))
{
    require_once('../mvcclasses.php');
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($username)||empty($password))
    {
        header("Location:../../../?page=login&login=emptyfields");
        exit();
    }
    //Invaild username 
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$username))
    {
        header("Location:../../../?page=login&login=invaildusername&email=".$email."&firstname=".$firstname."&lastname=".$lastname);
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
    header("Location:../../../index.php");
    exit();
}
?>