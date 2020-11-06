<?php
class ShoppingCartController
{
    //functions
    public function Load_Shopping_Cart_Info($customerid)
    {
        $db=new ShoppingCartModel();
        $shoppingcartlist=$db->Load_Shopping_Car_List($customerid);
        return $shoppingcartlist;
    }

    public function Add_Product_To_Shopping_Cart($customerid,$product_id,$product_quantity)
    {
        $db=new ShoppingCartModel();
        $db->Add_Prodcut($customerid,$product_id,$product_quantity);
    }

    public function Delete_Product_From_Shoppping_Cart($customerid,$product_id)
    {
        $db=new ShoppingCartModel();
        $db->Delet_Product($customerid,$product_id);
    }

    public function UpDate_Product_Quantity_To_Shopping_Cart($customerid,$product_id,$product_quantity)
    {
        $db=new ShoppingCartModel();
        $db->Update_Quantity($customerid,$product_id);
    }

    public function Close_Connection()
    {
        $db=new ShoppingCartModel();
        $db->Close_The_Connection();
    }
}


?>