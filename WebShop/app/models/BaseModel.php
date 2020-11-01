<?php
abstract class BaseModel{
    private $username='root';
    private $password='';
    private $host='localhost';
    private $db='wad';

    //Create Connection To Database
    protected function createConnection(){
        try{
            $conn= new PDO("mysql:host=$this->host;dbname=$this->db",$this->username,$this->password);
            $conn=setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conn;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
    
}
?>