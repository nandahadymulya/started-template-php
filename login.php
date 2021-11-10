<?php

require 'app/config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5.1.3 CSS -->
    <link rel="stylesheet" href="assets/bootstrap.min.css">

    <!-- CDN Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/main.css" />

    <title>Login System</title>
</head>

<body>
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
                        <form>
                            <div class="mt-4 mb-3 mt-sm-4">
                                <label for="exampleInputEmail1" class="form-label">Username / Email address</label>
                                <input type="email" class="form-control  rounded-pill" id="exampleInputEmail1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control rounded-pill" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="mb-4 mb-sm-4 btn btn-dark form-control form-control-lg border-0 rounded-pill">Login</button>
                        </form>
                    </div>
                    <div class="text-center mt-4">
                        <a class="text-muted" href="./">Back to Home!</a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>