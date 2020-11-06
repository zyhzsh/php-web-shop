<?php
class ProductController
{
  //
  public function Get_Product_Object_By_Id($productid)
  {
    $productmodel=new ProductModel();
    $product=$productmodel->Get_Product_Object_By_Id_From_Database($productid);
    if($product!=null)
    {
        return $product;
    }
    else 
    {
        return null;
    }
  }
  public function Close_The_Connection()
  {
    $productmodel=new ProductModel();
    $productmodel->Close_Connection();
  }

  public function Get_Product_List()
  {
    $productmodel=new ProductModel();
    $productlist=$productmodel->Get_List_Product_From_Database();
    if($productlist!=null)
    {
      return $productlist;
    }
    else
      return false;
  }
  //Get product list by category
  public function Get_Product_List_By_Category($product_category)
  {
    $productmodel=new ProductModel();
    $productlist=$productmodel->Get_List_Product_From_Database_By_Category($product_category);
    if($productlist!=null)
    {
      return $productlist;
    }
    else
      return false;
  }


}
?>