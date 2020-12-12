<?php
Class ShoppingCartItem{
  private  $productid;
  private   $productname;
  private  $quantity;
  private  $unitprice;
  private   $img;
    function __construct($productid,$productname,$quantity,$unitprice,$img)
    {
        $this->productid=$productid;
        $this->productname=$productname;
        $this->quantity=$quantity;
        $this->unitprice=$unitprice;
        $this->img=$img;
    }
    public function Get_Productid()
    {
        return $productid;
    }
    public function Get_ProductName()
    {
        return $this->productname;
    }
    public function Get_Quantity()
    {
        return $this->quantity;
    }
    public function Get_UnitPrice()
    {
        return $this->unitprice;
    }
    public function Get_Img()
    {
        return $this->img;
    }
}
?>