<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: login.php");
    exit();
}

include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sql = "INSERT INTO user (username, password, role) VALUES (?, ?, ?)";
    $row = $conn->execute_query($sql, [$username, $password, $role]);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="akun-form" method="post">
    <h1>Create Account</h1>
        <div>
            <input type="text" name="username" id="username" placeholder="username">
        </div>
        <div>
            <input type="password" name="password" id="password" placeholder="password">
        </div>
        <div>
            <select name="role" id="role">
                <option values=""></option>
                <option values="kader">kader</option>
            </select>
        </div>
        <button type="submit">Enter</button><br>
        <div>
            <a href="login.php">kembali</a>
            <a href="data_kader.php">data kader</a>
        </div>
    </form>
</body>
</html>