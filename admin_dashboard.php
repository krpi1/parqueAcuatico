session_start();
include('config.php');

if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
    exit;
}

// Mostrar ventas realizadas
$sql = "SELECT * FROM ventas";
$stmt = $pdo->query($sql);
$ventas = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administrador</title>
</head>
<body>
    <h1>Ventas Realizadas</h1>
    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Código Único</th>
            <th>Entradas Adulto</th>
            <th>Sillas</th>
            <th>Mesas</th>
        </tr>
        <?php foreach ($ventas as $venta): ?>
        <tr>
            <td><?php echo $venta['nombre']; ?></td>
            <td><?php echo $venta['codigo_unico']; ?></td>
            <td><?php echo $venta['entradas_adulto']; ?></td>
            <td><?php echo $venta['sillas']; ?></td>
            <td><?php echo $venta['mesas']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
