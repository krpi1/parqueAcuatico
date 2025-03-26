session_start();
include('config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':username' => $username, ':password' => $password]);
    
    if ($stmt->rowCount() > 0) {
        $_SESSION['admin'] = $username;
        header("Location: admin_dashboard.php");
    } else {
        echo "Credenciales incorrectas";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrador</title>
</head>
<body>
    <h1>Login Administrador</h1>
    <form method="post" action="admin_login.php">
        <label>Usuario:</label>
        <input type="text" name="username" required><br>

        <label>Contraseña:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>
