<?php
if(isset($_POST['login-submit']))
{
    require_once('Classes.inc.php');
    $postcontroller=new PostController();
    $username=$_POST['username'];
    $password=$_POST['password'];
    if(empty($username)||empty($password))
    {
        header("Location:../index.php?error=emptyfields");
        exit();
    }
    //Invaild username 
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$username))
    {
        header("Location:../signup.php?error=invaildusername&email=".$email."&firstname=".$firstname."&lastname=".$lastname);
        exit();
    }
    else
    {        
        if($postcontroller->Login())
        {
            if($_SESSION['accounttype']=='C')
            {
                header("Location:../index.php?login=success");
                exit();
            }
            elseif ($_SESSION['accounttype']=='P')
            {
                header("Location:../productmanager.php?login=success");
                exit();
            }
            
        }
    }
}
else
{
    header("Location:../index.php");
    exit();
}
?>