<?php
    include_once 'pdo.php'; 
class cateModel{
    public $conn;
    function __construct()
    {
        $this->conn=connectDB();

    }
    function allCate(){
        $sql = "SELECT * FROM category";
        return pdo_execute($sql);  
    }   
    function addCategory($id,$cate){
        $sql = "INSERT INTO danhmuc VALUES (NULL,'$cate')";
        pdo_execute($sql);

    }

}           