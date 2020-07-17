<?php


if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == 'admin' && $password == 123) {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
</head>

<body>

    <h1>Login Admin</h1>

    <?php if (isset($error)) : ?>
        <span style="color: red; font-style: italic">username / password salah</span>
    <?php endif; ?>


    <ul>
        <form method="post" action="">
            <li>

                <!-- gunakan for dan id untuk menghubungkan antara label dan input -->
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li><input type="submit" value="Login" name="submit"></li>
        </form>
    </ul>

</body>

</html>