<?php
class PostController extends BaseController{
    //Get Page Element
    public function GetElement($element)
    {
        $this->includePageElement($element);
    }


    private $user;
    //Login
    public function Login()
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        //handling the error typo.....
        //then...
        $db=new PostModel();
        if($db->Login($username,$password))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
 







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
 

    public function Logout()
    {

    }
    //Route Page
    public function RoutePage()
    {   
        //Not logged in
        if(is_null($this->user))
        {   
            if(isset($_GET['route']))
            {
                $temp=$_GET['route'];
                $this->includeView($temp);
                exit();
            }
        }
        // Logged in
        else
        {
            
        }
    }
    /* public function RoutePage()
    {   
        //Not logged in
        if(is_null($this->user))
        {   
            if(isset($_POST['route']))
            {
                $temp=$_POST['route'];
                $this->includeView("$temp.php");
                exit();
            }
        }
        // Logged in
        else
        {
            
        }
    }
    */
    //

}
?>