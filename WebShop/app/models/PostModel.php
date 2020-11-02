<?php
class PostModel extends BaseModel{
   //Register a customer account
   public function Register($username,$password,$email,$firstname,$lastname)
   {
        try{
            $conn=$this->createConnection();
            //1.Check username Exist or not
            $sql="SELECT * FROM account WHERE username=?";
            $stmt=$conn->prepare($sql);
            $stmt->execute([$username]);
            $result=$stmt->fetch();
            if(empty($result))
            {
                $sql="INSERT INTO `account` (`username`, `password`, `Email`, `first_name`, `last_name`, `portrait_link`, `account_type`) VALUES (?,?,?,?,?,'app/views/img/defaultprotrrait.png','C');";
                $stmt=$conn->prepare($sql);               
                $stmt->execute([$username,$password,$email,$firstname,$lastname]);
                $sql="INSERT INTO `customer` (`username`, `customer_id`, `country`, `city`, `street`, `housenumber`, `postcode`) VALUES (?, NULL, NULL, NULL, NULL, NULL, NULL);";
                $stmt=$conn->prepare($sql);
                $stmt->execute([$username]);
                $conn=null;
                return true;
            }
            else
            {
                header("Location:../signup.php?&signup=usernameexists&username=".$username."&email=".$email."&firstname=".$firstname."&lastname=".$lastname);
                exit();
            }
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
            return false;
        }
   }
 
   public function Login($username,$password)
   {
    try
    {
        $conn=$this->createConnection();
        $sql='SELECT * FROM account WHERE username=(?) AND password=(?)';
        $stmt=$conn->prepare($sql);
        $stmt->execute([$username,$password]);
        $result=$stmt->fetch();
        if(empty($result))
        {
            header("Location:../login.php?login=loginfaild");
            $conn=null; 
            exit();
        }
        else
        {   session_start();       
            $_SESSION['username']=$result['username'];
            $_SESSION['accounttype']=$result['account_type'];
            $_SESSION['portrait']=$result['portrait_link'];
            $_SESSION['email']=$result['Email'];
            $_SESSION['firstname']=$result['first_name'];
            $_SESSION['lastname']=$result['last_name'];
            return true;
        }
    }
    catch(PDOException $e)
    {
        //echo $e->getMessage();
        return false;
    }
   }





   public function Check_User_Exist($username)
   {
    try{
        $conn=$this->createConnection();
        $sql="SELECT * FROM account WHERE username=?";
        $stmt=$conn->prepare($sql);
        $stmt->execute([$username]);
        $result=$stmt->fetch();
        if(empty($result))
        {
            $conn=null;
            return true;
        }
        else
        {
            header("Location:../../signup.php");
            $conn=null;
            return true;
            echo $result;
            exit();          
            $conn=null;
            return false;
        }
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
        return false;
    }
   }

}













?>