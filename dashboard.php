<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// logout
if (isset($_POST['logout'])) {
    session_unset();    
    session_destroy();
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h3>Selamat datang <?= $_SESSION['username'] ?></h3>
    <form method="POST">
        <button type="submit" name="logout">Logout</button>
    </form>
</body>
</html>
