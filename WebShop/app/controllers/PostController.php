<?php
class PostController extends BaseController{


    //SignUp
    public function SignUp()
    {    
        $username=$_POST['username'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $db=new PostModel();        
        if($db->Register($username,$password,$email,$firstname,$lastname)==true)
        {
            return true;
        }
        else
        {   return false;}       
    }
    
}
?>