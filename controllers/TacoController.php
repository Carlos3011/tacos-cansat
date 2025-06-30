<?php
require_once __DIR__ . "/../models/taco.php";

class TacoController{
    private $modelo;

    public function __construct($conexion){
        $this->modelo = new Taco($conexion);

    }
    public function index(){
         
        $tacos = $this->modelo->getAll();
         include __DIR__ . "/../views/index.php";
       

    }
    public function create(){
        include __DIR__ . "/../views/create.php";

    }
    public function store($data){
        $imagen = '';
        // Manejo de subida de archivo
        if (isset($_FILES['imagen_file']) && $_FILES['imagen_file']['error'] === UPLOAD_ERR_OK) {
            $nombreArchivo = basename($_FILES['imagen_file']['name']);
            $directorioDestino = __DIR__ . '/../public/image/';
            if (!is_dir($directorioDestino)) {
                mkdir($directorioDestino, 0777, true);
            }
            $rutaDestino = $directorioDestino . $nombreArchivo;
            if (move_uploaded_file($_FILES['imagen_file']['tmp_name'], $rutaDestino)) {
                $imagen = 'public/image/' . $nombreArchivo;
            }
        } elseif (!empty($data['imagen_url'])) {
            $imagen = $data['imagen_url'];
        }
        $this->modelo->insertTaco(
            $data['nombre'],
            $data['descripcion'],
            $data['precio'],
            isset($data['disponibilidad']) ? 1 : 0,
            $imagen
        );
        header("Location: index.php");
    }
     public function edit($id){
        $taco = $this->modelo->getId($id);
        include __DIR__ . "/../views/edit.php";

    }
    public function update($id, $data){
        $this->modelo->update(
            $id,
            $data['nombre'],
            $data['descripcion'],
            $data['precio'],
            isset($data['disponibilidad']) ? 1 : 0,
            $data['imagen']
        );
        header("Location: index.php");
    }
    public function delete($id){
        $this->modelo->deleteTaco($id);
        header("Location: index.php");

    }
}