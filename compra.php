include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $codigo_unico = uniqid(); // Generar código único para el cliente
    $entradas_adulto = $_POST['entradas_adulto'];
    $sillas = $_POST['sillas'];
    $mesas = $_POST['mesas'];

    // Insertar la compra en la base de datos
    $sql = "INSERT INTO ventas (nombre, codigo_unico, entradas_adulto, sillas, mesas) 
            VALUES (:nombre, :codigo_unico, :entradas_adulto, :sillas, :mesas)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nombre' => $nombre,
        ':codigo_unico' => $codigo_unico,
        ':entradas_adulto' => $entradas_adulto,
        ':sillas' => $sillas,
        ':mesas' => $mesas
    ]);

    echo "Compra realizada con éxito. Código único: " . $codigo_unico;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Entradas</title>
</head>
<body>
    <h1>Formulario de Compra</h1>
    <form method="post" action="compra.php">
        <label>Nombre del Cliente:</label>
        <input type="text" name="nombre" required><br>

        <label>Entradas Adulto:</label>
        <input type="number" name="entradas_adulto" required><br>

        <label>Sillas:</label>
        <input type="number" name="sillas" required><br>

        <label>Mesas:</label>
        <input type="number" name="mesas" required><br>

        <button type="submit">Realizar Compra</button>
    </form>
</body>
</html>
