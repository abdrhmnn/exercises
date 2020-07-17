<?php


if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == "admin" && $password == 123) {
        echo "<i>Login Berhasil !</i>";
    } else {
        $result = true;
    }
}





?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>

<body>

    <form method="post" action="">
        <?php if (isset($result)) : ?>
            <p style="color: red;">Login gagal !</p>
        <?php endif; ?>
        <h2>Login Here</h2>
        Username : <input type="text" name="username"><br>
        Password : <input type="password" name="password"><br>
        <input type="submit" value="Click Me!" name="submit">
        <input type="reset" name="reset">
    </form>

</body>

</html>