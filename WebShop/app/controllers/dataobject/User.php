<?php
abstract class User
{
    protected $username;
    protected $password;
    protected $firstname;
    protected $lastname;
    protected $accounttype;
    protected $userportrait;
    protected $email;
    //Get information 
    public function Get_User_Type()
    {
        return $this->accounttype;
    }
    public function Get_Name_Of_User()
    {
        return "$this->firstname"."$this->lastname";
    } 
    public function Get_Portrait()
    {
        return $this->userportrait;
    }
    //Set information 
    protected function Set_Pass_Word($password)
    {
        $this->password=$password;
    }
    public function Update_Name_Of_User($firstname,$lastname)
    {
        $this->firstname=$firstname;
        $this->lastname=$lastname;
    }
    public function Update_Portrait_Of_User($userprotrait)
    {
        if($userprotrait=="")
        {
            $userprotrait="defaultprotrait.PNG";
        }
        else
        {
            $this->userportrait=$userprotrait;     
        }   
    }
    

}


?>