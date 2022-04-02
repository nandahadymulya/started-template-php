<?php
session_start();
require 'app/config.php';
require 'app/function.php';

// Check Cookie
if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // Get username from id
    $result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // Check cookie & username
    if ($key === hash('sha256', $row['username'])) {
        $_SESSION['login'] = true;
    }
}

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST["login"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // Check username
    if (mysqli_num_rows($result) === 1) {

        // Check password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // Set Session
            $_SESSION["login"] = true;

            // Check Remember Me
            if (isset($_POST['remember'])) {
                // Make Cookie
                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['username']), time() + 60);
            }

            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}
?>
<main class="vh-100 d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 mx-auto">
                <div class="mb-4 mb-sm-5">
                    <img src="assets/icons/binoculars-fill.svg" width="50" alt="">
                </div>
                <h2 class="mb-4 mb-sm-5 fw-blod">
                    Let's Begin!
                </h2>
                <div class="card p-4 p-md-3 p-lg-4 shadow-lg">
                    <?php if (isset($error)) : ?>
                        <p style="color: red; font-style: italic;">username / password salah</p>
                    <?php endif; ?>

                    <form action="" method="POST">
                        <div class="mt-4 mb-3 mt-sm-4">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control  rounded-pill" id="username" name="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control rounded-pill" id="password" name="password">
                        </div>
                        <button type="submit" class="mb-4 mb-sm-4 btn btn-dark form-control form-control-lg border-0 rounded-pill" name="login">Login</button>
                    </form>
                </div>
                <div class="text-center mt-4">
                    <a class="text-muted" href="./">Back to Home!</a>
                </div>
            </div>
        </div>
    </div>
</main>