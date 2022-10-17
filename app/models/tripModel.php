<?php

class ViajeModel {

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

    public function getViaje($id) {
    
        $query = $this->db->prepare("SELECT * FROM viajes WHERE id=?");
        $query->execute(array($id));      
        $viaje = $query->fetch(PDO::FETCH_OBJ); 
        
        return $viaje;
    }

    //Inserta una tarea en la base de datos.
    
    public function insertViaje($origen, $destino, $vendedor) {
        $query = $this->db->prepare("INSERT INTO viajes (origen, destino, vendedor) VALUES (?, ?, ?)");
        $query->execute([$origen, $destino, $vendedor]);

        return $this->db->lastInsertId();
    }

    
    //Edita la tarea por su ID
    
    public function editViajeById($id, $origen, $destino, $vendedor) {
        
        $query = $this->db->prepare("UPDATE viajes SET ID=?, Origen=?, Destino=?, Vendedor=? WHERE viajes.ID=?");

        $viaje=$query->execute([$id, $origen,$destino,$vendedor]);

        return $viaje;

    }

    
    function deleteViajeById($id) {
        $query = $this->db->prepare('DELETE FROM viajes WHERE id = ?');
        $query->execute([$id]);
    }

}
