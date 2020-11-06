<?php 
class ProductModel extends BaseModel
{
   //fileds
   public static $connection=null;
   
   //functions
   
   //Get product Objection Form database by ProductId
   public function Get_Product_Object_By_Id_From_Database($productid)
   {
    try
    {
      if(self::$connection==null){self::$connection=$this->createConnection();}
      $sql="SELECT * from product WHERE product_id=?";
      $stmt=self::$connection->prepare($sql);
      $stmt->execute([$productid]);
      $result=$stmt->fetch();
      //If there is a product exsit
      if(!empty($result))
      {
        $product_id=$result['product_id'];
        $product_name=$result['product_name'];
        $current_price=$result['current_price'];
        $current_stock=$result['current_stock'];
        $description=$result['description'];
        $img=$result['img_link'];
        $category=$result['category'];
        $product=new Product($product_id,$product_name,$current_price,$current_stock,$description,$img,$category);
        return $product;
      }
      else
      {
        return null;
      }
    }
    catch(PDOException $e)
    {
        return null;
    }
   }

   //Get all product from the database
   public function Get_List_Product_From_Database()
   {
     try
     {
      if(self::$connection==null){self::$connection=$this->createConnection();}
      {
        $sql="SELECT * FROM product";
        $stmt=self::$connection->prepare($sql);
        $stmt->execute();
        $result=$stmt->fetchAll();
        if(!empty($result))
        {
         self::$connection=null;
         return $result;
        }
        self::$connection=null;
        return null;
      }
     }
     catch(PDOException $e)
     {
         return null;
     }
   }
   //Get all product list from the database by category
   public function Get_List_Product_From_Database_By_Category($product_Category)
   {
    try
    {
      if(self::$connection==null){self::$connection=$this->createConnection();}
      {
        $sql="SELECT * FROM product where category=?";
        $stmt=self::$connection->prepare($sql);
        $stmt->execute([$product_Category]);
        $result=$stmt->fetchAll();
        if(!empty($result))
        {
          self::$connection=null;
          return $result;
        }
        self::$connection=null;
        return null;
      }
    }
    catch(PDOException $e)
    {
        return null;
    }
    
   }
   //
   public function Close_Connection()
   {
        self::$connection=null;
   }

}

?>