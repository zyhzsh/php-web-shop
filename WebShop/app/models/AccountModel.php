<?php
class AccountModel extends BaseModel
{
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
                $sql="INSERT INTO `account` (`username`, `password`, `Email`, `first_name`, `last_name`, `portrait_link`, `account_type`) VALUES (?,?,?,?,?,'app/views/img/defaultprotrait.PNG','C');";
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
                $conn=null;
                header("Location:../../../?page=signup&signup=usernameexists&username=".$username."&email=".$email."&firstname=".$firstname."&lastname=".$lastname);
                exit();
            }
        }
        catch(PDOException $e)
        {
            $conn=null;
            return false;
        }
   } 

   //Login
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
            header("Location:../../../?page=login&login=loginfaild");
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
            //CheckUser type
            if($result['account_type']=='C')
            {
                $sql='SELECT * FROM customer WHERE username=?';
                $stmt=$conn->prepare($sql);
                $stmt->execute([$result['username']]);
                $result=$stmt->fetch();
                $_SESSION['customer_id']=$result['customer_id'];
                $_SESSION['country']=$result['country'];
                $_SESSION['city']=$result['city'];
                $_SESSION['street']=$result['street'];
                $_SESSION['housenumber']=$result['housenumber'];
                $_SESSION['postcode']=$result['postcode'];           
                $conn=null;
                return true;
            }
            else if ($result['accounttype']=='P')
            {
                $sql='SELECT * FROM productmanager WHERE username=?';
                $stmt=$conn->prepare($sql);
                $stmt->execute([$result['username']]);
                $result=$stmt->fetch();
                $_SESSION['manager_id']=$result['manager_id'];
                $conn=null;
                return true;
            }
        }
    }
    catch(PDOException $e)
    {
        $conn=null;
        return false;
    }
   }
   public function UpDateProfile($firstname,$lastname,$email,$country,$city,$street,$housenumber,$postcode,$img)
   {
    try
    {
        $conn=$this->createConnection();
        $sql_one='UPDATE `customer` SET `country`=?,`city`=?,`street`=?,`housenumber`=?,`postcode`=? WHERE customer_id=?';
        $sql_two='UPDATE `account` SET `portrait_link`=?,`Email`=?,`first_name`=?,`last_name`=? WHERE username=?';
        $stmt=$conn->prepare($sql_one);
        $stmt->execute([$country,$city,$street,$housenumber,$postcode,$_SESSION['customer_id']]);
        $stmt=$conn->prepare($sql_two);
        $stmt->execute(["app/views/img/defaultprotrait.PNG",$email,$firstname,$lastname,$_SESSION['username']]);
        return true;
    }
    catch(PDOException $e)
    {
        $conn=null;
        return false;
    }

   }

}


?>