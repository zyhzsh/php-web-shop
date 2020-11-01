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
       if(isset($_POST['username'])&&isset($_POST['password']))
       {
            $username=$_POST['username'];
            $password=$_POST['password'];

            $db=new PostModel();
            $conn= $db->createConnection();
            $sql='SELECT * FROM account WHERE username=(?) AND password=(?)';
            $stmt=$conn->prepare($sql);
            $result=$stmt->fectch();
            if(empty($result))
            {
                return false;
            }
            else 
            {
                //Start Session
                //$this->user=new ;
                echo"Logged in";
                includeView("index.php");
            }
        }else
        {
            
        }    
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