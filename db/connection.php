<?php

 
  $host = "localhost";
 $usuario = "root";
  $password = "";
  $bd = "db_tacos";



    $conn = new mysqli($host, $usuario, $password, $bd); //connection
    
    if( $conn -> connect_error ){
        die("Conexion fallida: ".$conn->connect_error);

    }
    

