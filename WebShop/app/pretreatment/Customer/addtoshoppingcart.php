<?php
// //When the user pressed add to shopping cart
if(isset($_POST['Add_To_Cart']))
{   //Check the customer logged in or not
    include_once '../mvcclasses.php';
    session_start();
    //When the customer are logged in || in the mean time it also checked the user type is not the customer
    if(isset($_SESSION['customer_id']))
     {
        $shoppingcart=new ShoppingCartController();
        $result=$shoppingcart->Add_Product_To_Shopping_Cart($_SESSION['customer_id'],$_POST['product_id'],$_POST['quantity']);
        if($result)
        {
            if($_POST['page']=="productinfo"){
                header('Location:../../../?page='.$_POST['page'].'&product='.$_POST['product_id']);
            }
            else{
                header('Location:../../../?page='.$_POST['page']);
            }
        }
     }
    else //two possibility 1. the user is manager 2. the user were not logged in 
    {
        //1. if the user is the manager, which means the user not even have authority to entering here,so redirection to the productmanager.php 
        if(isset($_SESSION['manager_id']))
        {
            header("Location:../../../?page=login");
            exit();
        }
        else//2. the user were not logged in
        {
            //For now make it simplicity, so it will redirection  for the user to the loggin page notice the user to log in, then edit the shopping cart
            header("Location:../../../?page=login&login=logintheneditshoppingcart");
            exit(); 
        }        
    }
}
else
{
    //When ther user entering here by wrong way
    header("Location:../index.php");
    exit();
}
?>
