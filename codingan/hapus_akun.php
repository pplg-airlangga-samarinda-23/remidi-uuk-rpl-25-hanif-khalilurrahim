<?php

include 'config.php';


if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $id = $_GET['id'];
    $Sql = 'DELETE FROM user WHERE id=?';
    $row = $conn->execute_query($Sql, [$id]);
    
    if ($row) {
        header("location:data_kader.php");
    }
}
?>