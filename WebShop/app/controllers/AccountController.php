<?php
class AccountController
{
     //Login
     public function Login($username,$password)
     {
         $db=new AccountModel();
         $result=$db->Login($username,$password);
         if($result)
         {
             if($_SESSION['accounttype']=='C')
             {
                header("Location:../index.php?login=success");
                exit();
             }
             else if ($_SESSION['accounttype']='P')
             {
                header("Location:../index.php?login=success");
                exit();
             }
         }
         else
         {
            header("Location:../login.php?login=faild");
         }
     }
     //SignUp a Customer account
     public function SignUp()
     {    
         $username=$_POST['username'];
         $password=$_POST['password'];
         $email=$_POST['email'];
         $firstname=$_POST['firstname'];
         $lastname=$_POST['lastname'];
         $db=new AccountModel();        
         if($db->Register($username,$password,$email,$firstname,$lastname)==true)
         {
            header("Location:../login.php?signup=success");
            exit();
         }
         else
         {   header("Location:../signup.php?signup=faild&username=".$username."&email=".$email."&firstname=".$firstname."&lastname=".$lastname);
            exit();
         }                 
      }

}


?>