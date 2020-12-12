<?php
class Product{
  private $productid;
  private $productname;
  private $productprice;
  private $productstock;
  private $productdescription;
  private $img;
  private $category;
  //Constructor
  public function __construct($product_id,$product_name,$current_price,$current_stock,$description,$img_link,$category)
  {
    $this->productid=$product_id;
    $this->productname=$product_name;
    $this->productprice=$current_price;
    $this->productstock=$current_stock;
    $this->productdescription=$description;
    $this->img=$img_link;
    $this->category=$category;
  }
  //Get
  public function Get_Product_Id()
  {
    return $this->productid;
  }
  public function Get_Product_Name()
  {
    return $this->productname;
  }
  public function Get_Product_Price()
  {
    return $this->productprice;
  }
  public function Get_Product_Stock()
  {
    return $this->productstock;
  }
  public function Get_Product_Descrition()
  {
    return $this->productdescription;
  }
  public function Get_Product_img()
  {
    return $this->img;
  }
  //Set 
  

}

?>