<?php
class UserModel extends BaseModel{
   
    public function Get_User(){
       try {
        $conn=$this->createConnection();
        $sql='SELECT * FROM customer;';
        $stm=$conn->prepare($sql);
        $stm->execute();

        $result=$stm->fectchAll();
        $conn=null;
       }catch(PDOException $e)
       {
           echo $e->getMessage();
       }
    }
}
?>