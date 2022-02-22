<?php
namespace MVC\model;

class ProductModel
{
    public $connect;
    public function __construct()
    {
        $db = new DBConnect();
        $this->connect=$db->connect();
    }

    public function getAll()
    {
        $sql = "select * from products";
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }



}