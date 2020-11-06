<?php
 class ShoppingCartModel extends BaseModel
 {
    public static $connection=null;
    public function Load_Shopping_Car_List($customerid)
    {
        try{
            if(self::$connection==null){self::$connection=$this->createConnection();}
            {
                $sql="SELECT * FROM cart WHERE customer_id=?";
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
    

 }

?>