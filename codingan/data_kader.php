<?php
session_start();
require 'config.php';
$sql = "select * from user";
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
                <th>username</th>
                <th>password</th>
                <th>role</th>
                <th>action</th>
                </thead>
                <tbody>
                    <?php $no=0; foreach ($rows as $row) : ?>
                        <tr>
                            <td><?=++$no?></td>
                            <td><?=$row['username']?></td>
                            <td><?=$row['password']?></td>
                            <td><?=$row['role']?></td>
                            <td>
                                <a href="hapus_akun.php?id=<?=$row['id']?>">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="input_akun.php">kembali</a>
        </div>
</body>
</html>