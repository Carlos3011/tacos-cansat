<?php
 require_once __DIR__ . "/../db/connection.php";
 //  /../ es porque no estamos en la misma carpeta (modelos y conection)

//GET Y CREATE
//lo demas metodos quedan pendientess
//controller y una vista
class Taco {
    
    private $conn;
    

    public function __construct($conexion) {
        $this->conn = $conexion;
    }
    public function getAll(){
        return $this->conn->query("SELECT * FROM tacos");
    }

    public function getId($id) {
        $stmt = $this->conn->prepare("SELECT * FROM tacos WHERE id = ?"); //cuando se complete la query se intercambia el ? por del dato real
        $stmt->bind_param('i', $id); //la i es porque se trabaja con una variable random como un indice auxiliar vaya
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
    public function insertTaco( $nombre, $descripcion, $precio, $disponibilidad, $imagen){
        $stmt = $this->conn->prepare("INSERT INTO tacos (nombre, descripcion, precio, disponibilidad, imagen) VALUES ( ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssdis", $nombre, $descripcion, $precio, $disponibilidad, $imagen );
        return $stmt->execute();

    }
    public function update( $id, $nombre, $descripcion, $precio, $disponibilidad, $imagen){
        $stmt = $this->conn->prepare("UPDATE tacos SET nombre = ?, descripcion = ?, precio = ?, disponibilidad = ?, imagen = ? WHERE id = ?");
        $stmt->bind_param("ssdisi", $nombre, $descripcion, $precio, $disponibilidad, $imagen, $id );
        return $stmt->execute();
    }
    public function deleteTaco( $id ){
        $stmt = $this -> conn -> prepare ("DELETE FROM tacos WHERE id = ?");
        $stmt->bind_param('i',$id);
        return $stmt->execute();
    }


}