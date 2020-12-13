<?php
 class ShoppingCartModel extends BaseModel
 {
    public static $connection=null;
    public function Load_Shopping_Car_List($customerid)
    {
        try{
            if(self::$connection==null){self::$connection=$this->createConnection();}
            {
                //$sql="SELECT * FROM cart WHERE customer_id=?";
                $sql="SELECT * FROM cart as C INNER JOIN product as P on C.product_id=P.product_id WHERE customer_id=?";
                $stmt=self::$connection->prepare($sql);
                $stmt->execute([$customerid]);
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
    public function Delet_Product($customerid,$productid)
    {
        try{
            if(self::$connection==null){self::$connection=$this->createConnection();}
            {
                //$sql="SELECT * FROM cart WHERE customer_id=?";
                $sql="DELETE FROM `cart` WHERE customer_id=? AND product_id=?";
                $stmt=self::$connection->prepare($sql);
                $stmt->execute([$customerid,$productid]);
                self::$connection=null;
            }
        }
        catch(PDOException $e)
        {
            self::$connection=null;
            return null;
        }

    }
    public function Add_Prodcut($customerid,$productid,$product_quantity)
    {
        try{
            if(self::$connection==null){self::$connection=$this->createConnection();}
            {
                $sql="SELECT * FROM cart WHERE customer_id=? AND product_id=?";
                $stmt=self::$connection->prepare($sql);
                $stmt->execute([$customerid,$productid]);
                $result=$stmt->fetchAll();
                if(empty($result))
                {
                    $sql="INSERT INTO `cart`(`customer_id`, `product_id`, `quantity`) VALUES (?,?,?);";
                    $stmt=self::$connection->prepare($sql);
                    $stmt->execute([$customerid,$productid,$product_quantity]);
                    self::$connection=null;
                    return true;
                }
                else//when product exsits
                {
                    $sql="UPDATE `cart` SET quantity=? WHERE customer_id=? AND product_id=?";
                    $stmt=self::$connection->prepare($sql);
                    $product_quantity=$product_quantity+$result[0]['quantity'];
                    $stmt->execute([$product_quantity,$customerid,$productid]);
                    self::$connection=null;
                    return true;
                }   
            }
        }
        catch(PDOException $e)
        {
            self::$connection=null;
            return false;
        }
    }
    public function Update_Product_Amount_On_Cart($customerid,$productid,$quantity)
    {
        try{
            if(self::$connection==null){self::$connection=$this->createConnection();}
            {
                $sql="SELECT * FROM cart WHERE customer_id=? AND product_id=?";
                $stmt=self::$connection->prepare($sql);
                $stmt->execute([$customerid,$productid]);
                $result=$stmt->fetchAll();
                if(empty($result))
                {
                    return false;
                }
                else//when product exsits
                {
                    $sql="UPDATE `cart` SET quantity=? WHERE customer_id=? AND product_id=?";
                    $stmt=self::$connection->prepare($sql);
                    $stmt->execute([$quantity,$customerid,$productid]);
                    self::$connection=null;
                    return true;
                }   
            }
        }
        catch(PDOException $e)
        {
            self::$connection=null;
            return false;
        }
    }


 }

?>