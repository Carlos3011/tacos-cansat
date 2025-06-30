<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $cliente = $_POST["cliente"];
    $monto = $_POST["monto"];
    $metodo = $_POST["metodo_pago"];
    $fecha = date("Y-m-d H:i:s");

    // Puedes guardar esto en un archivo o base de datos
    $registro = "$fecha | Cliente: $cliente | Monto: $$monto | Método: $metodo\n";

    // Guardar en archivo
    file_put_contents("pagos.txt", $registro, FILE_APPEND);

    echo "<h3>¡Pago registrado con éxito!</h3>";
    echo "<p><a href='pago.php'>Volver</a></p>";
} else {
    echo "Acceso no permitido.";
}
?>
