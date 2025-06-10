<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'kader') {
    header("Location: login.php");
    exit();
}

include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $tinggi = $_POST['tinggi'];
    $berat = $_POST['berat'];
    $kader = $_POST['kader'];

    $sql = "INSERT INTO data_bayi (nama, tinggi, berat, kader) VALUES (?, ?, ?, ?)";
    $row = $conn->execute_query($sql, [$nama, $tinggi, $berat, $kader]);
    header("location: data_bayi.php");

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>input_bayi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form class="bayi-form" method="POST" >
        <h2>Masukkan Data Bayi</h2>
        <input type="text" name="nama" placeholder="nama" required><br>
        <input type="text" name="tinggi" placeholder="tinggi" required><br>
        <input type="text" name="berat" placeholder="berat" required><br>
        <input type="text" name="kader" placeholder="kader" required><br>
        <button type="submit" href="data_bayi.php">Kirim</button><br>
        <div>
            <a href="logout.php">logout</a>
            <a href="data_bayi.php">list bayi</a>
        </div>
    </form>

</body>
</html>