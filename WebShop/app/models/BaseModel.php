<?php
abstract class BaseModel{
    private $username='root';
    private $password='root';
    private $host='localhost';
    private $db='wad';
    
    //Create Connection To Database
    protected function createConnection(){
        try{
            $conn= new PDO("mysql:host=$this->host;dbname=$this->db",$this->username,$this->password);
            return $conn;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }
}
?>