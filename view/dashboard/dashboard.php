<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME!</title>
</head>

<body>
    <?= 'Welcome ' . $_SESSION['name'] . '!'; ?>
    <?= 'You are ' . $_SESSION['role'] . '!'; ?>

    <a href="../../logout.php">Logout</a>
</body>

</html>