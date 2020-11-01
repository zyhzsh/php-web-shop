<?php
class PostModel extends BaseModel{
    public function GetAllCustomer(){
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