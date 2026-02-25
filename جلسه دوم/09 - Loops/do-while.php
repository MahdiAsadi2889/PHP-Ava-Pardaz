<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <input type="password" name="password">
        <button type="submit">Send</button>
    </form>
    <?php
    $correctPassword = "1234";
    do {
        $password = $_POST['password'];
        if ($correctPassword !== $password) {
            echo "Enter Correct Password";
        }
    } while ($password != "1234");
    echo "Welcome";

    ?>
</body>

</html>