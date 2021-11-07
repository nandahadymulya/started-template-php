<?php
  $server   = "localhost";
  $username = "root";
  $password = "";
  $database = "started_db";

  $conn = mysqli_connect($server, $username, $password, $database);
  
  // Cek apakah berhasil koneksi ke database
  if (mysqli_connect_errno()) {
    echo "
        <div class='alert alert-danger'>
          Your Application has Failed to Connected to the Database
        </div>
    " . mysqli_connect_error();
    exit();
  } else {
      echo "
        <div class='alert alert-success text-center'>
          Your Application has <span class='fw-bold'>Successfully</span> Connected to the Database!
        </div>
      ";
  }