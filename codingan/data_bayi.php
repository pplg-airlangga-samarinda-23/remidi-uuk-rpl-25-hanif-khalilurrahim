<?php
session_start();
require 'config.php';
$sql = "select * from data_bayi";
$rows = $conn->execute_query($sql)->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <div>
            <table>
                <thead>
                <th>Nama</th>
                <th>Tinggi</th>
                <th>Berat</th>
                <th>kader</th>
                </thead>
                <tbody>
                    <?php $no=0; foreach ($rows as $row) : ?>
                        <tr>
                            <td><?=++$no?></td>
                            <td><?=$row['nama']?></td>
                            <td><?=$row['tinggi']?></td>
                            <td><?=$row['berat']?></td>
                            <td><?=$row['kader']?></td>
                            <td>
                                <a href="edit.php?id=<?=$row['id']?>">Edit</a>
                                <a href="hapus_bayi.php?id=<?=$row['id']?>">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="input_bayi.php">kembali</a>
        </div>
</body>
</html>