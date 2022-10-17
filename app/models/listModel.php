<?php

class listModel {
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=web2-tp1;charset=utf8', 'root', '');
    }

    public function getAllViajes() {
   
        $query = $this->db->prepare("SELECT * FROM viajes");
        $query->execute();

       
        $viajes = $query->fetchAll(PDO::FETCH_OBJ); 
        
        return $viajes;
    }

}