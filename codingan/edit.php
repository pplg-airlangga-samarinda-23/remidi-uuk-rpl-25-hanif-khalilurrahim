<?php

include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    $sql = "SELECT * FROM data_bayi WHERE id=?";
    $row = $conn->execute_query($sql, [$id])->fetch_assoc();
}  elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST['nama'];
    $tinggi = $_POST['tinggi'];
    $berat = $_POST['berat'];
    $tanggal = $_POST['tanggal'];
    $kader = $_POST['kader'];
    $id = $_GET['id'];

    $sql = 'UPDATE data_bayi SET nama=?, tinggi=?, berat=?, tanggal=?, kader=? WHERE id=?';
    $row = $conn->execute_query($sql, [$nama, $tinggi, $berat, $tanggal, $kader, $id]);

    if ($row) {
        header("location:data_bayi.php");
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create</title>
</head>
<body>
    <h1>Edit Data</h1>
    
    <form action="" method="POST">
        <div>
            <label for="nama">nama</label>
            <input type="text" name="nama" id="nama" value="<?=$row['nama']?>">
        </div>
        <div>
            <label for="tinggi">tinggi</label>
            <input type="text" name="tinggi" id="tinggi" value="<?=$row['tinggi']?>">
        </div>
        <div>
            <label for="berat">berat</label>
            <input type="text" name="berat" id="berat" value="<?=$row['berat']?>">
        </div>
        <div>
            <label for="tanggal">tanggal</label>
            <input type="date" name="tanggal" id="tanggal" value="<?=$row['tanggal']?>">
        </div>
        <div>
            <label for="kader">kader</label>
            <input type="text" name="kader" id="kader" value="<?=$row['kader']?>">
        </div>
        <button type="submit">Enter</button>
    </form>
</body>
</html>