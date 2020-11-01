<?php

trait constructable
{
    public function __construct() 
    { 
        $a = func_get_args(); 
        $i = func_num_args(); 
        if (method_exists($this,$f='__construct'.$i)) { 
            call_user_func_array([$this,$f],$a); 
        } 
    } 
}
class Customer extends User
{
    use constructable;
    protected $country;
    protected $city;
    protected $street;
    protected $housenumber;
    protected $postcode;
    protected $customer_id;
    //Constructor

    //When Load Customer Object From Database
    public function __construct13($username,$password,$firstname,$lastname,$accounttype,$userprotrait,$email,$country,$city,$street,$housenumber,$postcode,$customer_id)
    {
      $this->username=$username;
      $this->Set_Pass_Word($password);
      Update_Name_Of_User($firstname,$lastname);
      $this->accounttype=$accounttype;
      $this->Update_Portrait_Of_User($userprotrait);
      $this->email=$email;
      $this->country=$country;
      $this->city=$city;
      $this->street=$street;
      $this->housenumber=$housenumber;
      $this->postcode=$customer_id;
    }
    



    //Get information 
    public function Get_Customer_Address_Overview()
    {
        $temp="";
        $temp.="Country:". $this->country;
        $temp.="City:" . $this->city;
        $temp.="Street:" . $this->street;
        $temp.="housenumber:" . $this->housenumber;
        $temp.="postcode:" . $this->postcode;
        return $temp;
    }
    //...

    // Set Information 
    private function Set_Customer_Id($customer_id)
    {
        $this->customer_id=$customer_id;
    }
    // Set Address Information
    public function Update_Address_Info($country,$city,$street,$housenumber,$postcode)
    {
      $this->country=$country;
      $this->city=$city;
      $this->street=$street;
      $this->housenumber=$housenumber;
      $this->postcode=$postcode;
    }
}
?>