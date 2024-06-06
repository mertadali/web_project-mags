<?php
session_start();

if ($_SESSION['loggedin'] == true) {
    header('Location: admin_dashboard.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/login.css">
</head>
<body>
    <div class="login-container">
        <h2>Admin Login Page</h2>
        <?php if (isset($_GET['hata'])): ?>
            <p class="error">Kullanıcı adı veya şifre hatalı!</p>
        <?php endif; ?>
        <form action="function.php" method="post">
            <input type="text" name="admin_isim" placeholder="Username" required>
            <input type="password" name="admin_sifre" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
