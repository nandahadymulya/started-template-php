<?php
error_reporting(0);
session_start();

require "app/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- FAVICON -->
    <link rel="icon" href="#">

    <!-- Bootstrap 5.1.3 CSS -->
    <link rel="stylesheet" href="assets/bootstrap.min.css">

    <!-- CDN Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/main.css" />
    <title>
        Started Template PHP by Nans
        <!-- <?= $title == ['Started Template PHP by Nans', $newtitle]; ?> -->
    </title>
</head>

<body>
    <!-- NAVBAR -->
    <?php require 'view/navbar.php'; ?>
    <!-- END NAVBAR -->

    <!-- CONTENT -->
    <?php require 'content.php'; ?>
    <!-- <?php require 'view/section.php'; ?> -->
    <!-- END CONTENT -->

    <!-- FOOTER -->
    <?php require 'view/footer.php' ?>
    <!-- END FOOTER -->


    <!-- Bootstrap 5.1.3 JS -->
    <link rel="stylesheet" href="assets/bootstrap.min.js">
    <link rel="stylesheet" href="assets/bootstrap.bundle.min.js">

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>