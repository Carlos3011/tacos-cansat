<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pago del servicio</title>
</head>
<body>
    <h2>Selecciona método de pago</h2>
    <form action="procesar_pago.php" method="POST">
        <label for="cliente">Nombre del cliente:</label>
        <input type="text" name="cliente" required><br><br>

        <label for="monto">Monto a pagar:</label>
        <input type="number" name="monto" step="0.01" required><br><br>

        <label>Método de pago:</label><br>
        <input type="radio" name="metodo_pago" value="Efectivo" required> Efectivo<br>
        <input type="radio" name="metodo_pago" value="Tarjeta" required> Tarjeta<br><br>

        <button type="submit">Confirmar pago</button>
    </form>
</body>
</html>
