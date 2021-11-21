<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FAVICON -->
    <link rel="icon" href="#">

    <!-- Bootstrap 5.1.3 CSS -->
    <link rel="stylesheet" href="assets/bootstrap.min.css">

    <!-- CDN Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/main.css" />

    <title>WELCOME!</title>

</head>

<body>

    <?php include '../navbar.php' ?>
    <div class="container">
        <br><br><br><br><br>

        <?= 'Welcome ' . $_SESSION['fullname'] . '!'; ?>
        <?= 'You are ' . $_SESSION['role'] . '!'; ?>

        <a cl href="../../logout.php">Logout</a>
    </div>


    <!-- Bootstrap 5.1.3 JS -->
    <link rel="stylesheet" href="assets/bootstrap.min.js">
    <link rel="stylesheet" href="assets/bootstrap.bundle.min.js">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>