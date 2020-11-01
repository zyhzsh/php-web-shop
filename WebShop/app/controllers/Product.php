<?php
class Product
{
    private $product_id;
    private $product_name;
    private $current_price;
    private $current_stock;
    private $description;
    private $img_link;
    //Construct
    //Happends When Load it From Database
    public function __construct($product_id,$product_name,$current_price,$description,$img_link)
    {
        $this->product_id=$product_id;
        $this->product_name=$product_name;
        $this->current_price=$current_price;
        $this->description=$description;
        $this->img_link=$img_link;
    }


}
?>