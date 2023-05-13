<?php
if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === 'admin') {
        echo "Login success";
    } else {
        echo "<span style='color: red'>Login Error</span>";
    }
}
?>
<!DOCTYPE html>
<html>
<style>
    form {
        border: 1px solid black;
        width: 300px;
        height: 200px;
    }
    label {
        display: block;
        margin-top: 10px;
    }
    input {
        margin-top: 10px;
    }
    button {
        margin-top: 10px;
    }
</style>
<head>
    <title>Login</title>
</head>
<body>
<form method="post">
    <label>Username</label>
    <input type="text" name="username">
    <label>Password</label>
    <input type="password" name="password">
    <button type="submit">Login</button>
</form>
</body>
</html>