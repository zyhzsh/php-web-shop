<?php
//When the user pressed add to shopping cart
if(isset($_POST['Add_To_Cart']))
{   //Check the customer logged in or not
    session_start();
    //When the customer are logged in || in the mean time it also checked the user type is not the customer
    if(isset($_SESSION['customer_id']))
     {
        //Load the customer shopping cart form database
        
        //Add the new product into the shopping cart

        //do something extra like javescrpit effect here.
     }
    else //two possibility 1. the user is manager 2. the user were not logged in 
    {
        //1. if the user is the manager, which means the user not even have authority to entering here,so redirection to the productmanager.php 
        if(isset($_SESSION['manager_id']))
        {
            header("Location:../login.php");
            exit();
        }
        else//2. the user were not logged in
        {
            //For now make it simplicity, so it will redirection  for the user to the loggin page notice the user to log in, then edit the shopping cart
            header("Location:../login.php?&login=logintheneditshoppingcart");
            exit(); 
        }        
    }
    if(isset($_SESSION['cart']))
    {
        
    }
    else
    {
        $ShoppingCartList=array(
            $_POST['product_id']=>$_POST['product_id']
        );
    }
    $_SESSION['cart'][0]=$ShoppingCartList;
    header("Location:../shoppingcart.php");
    exit();

}
else
{
    //When ther user entering here by wrong way
    header("Location:../index.php");
    exit();
}


?>