<?php

class vendedoresModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=web2-tp1;charset=utf8', 'root', '');
    }

    public function getallVendedores() {
    
        $query = $this->db->prepare("SELECT * FROM vendedores");
        $query->execute();
        
        $vendedores = $query->fetchall(PDO::FETCH_OBJ); 

        return $vendedores;

    }
}