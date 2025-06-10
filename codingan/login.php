<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form class="login-form" method="POST" action="login.proses.php">
        <h2>Login</h2>
        <input type="text" name="username" placeholder="username" required><br>
        <input type="password" name="password" placeholder="password" required><br>
        <button type="submit">Login</button>
        <div>
            <a href="index.php">beranda</a>
        </div>
    </form>

</body>
</html>