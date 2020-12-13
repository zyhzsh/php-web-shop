<?php 
    include_once '../mvcclasses.php';
    //Should do Some Security check here
    $customer_id=$_POST['customer_id'];
    $product_id=$_POST['product_id'];
    $product_amount=$_POST['quantity'];
    $db=new ShoppingCartModel();
    $result=$db->Update_Product_Amount_On_Cart($customer_id,$product_id,$product_amount);
    if($result==true)
    {
        echo "1";
    }
    else
    {
        echo "0";
    }

?>