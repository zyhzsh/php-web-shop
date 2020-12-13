<?php 
    class SeachModel extends BaseModel{
    public static $connection=null;
    public function GetItem($text)
     {
        if($text==""){return null;}
        $SerchItem=array();
        try{
            if(self::$connection==null){self::$connection=$this->createConnection();}
            {
    
                //$sql='SELECT * FROM `product` WHERE product_name like "%?%" OR description LIKE "%?%"';
                $sql='SELECT * FROM `product` WHERE product_name like ? ';
                //$sql='SELECT * FROM `product` WHERE product_name like "%Bag%" OR description LIKE "%Bag%" order BY product_name';
                $stmt=self::$connection->prepare($sql);
                $likely='%'.$text.'%';
                $stmt->execute([$likely]);
                $result=$stmt->fetchAll();
                if(!empty($result))
                {
                    for($i=0;$i<count($result);$i++)
                    {
                        $url='?page=productinfo&product='.$result[$i]['product_id'];
                        $x=new SearchItem($result[$i]['product_name'],$result[$i]['img_link'],$url,$result[$i]['description']);
                        $SerchItem[]=$x;
                    }
                 self::$connection=null;
                 return $SerchItem;
                }
                self::$connection=null;
                return $SerchItem;
            }
        }
        catch(PDOException $e)
        {
            self::$connection=null;
            return $SerchItem;
        }
     }





    }

?>