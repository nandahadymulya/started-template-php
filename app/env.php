<?php
  $server   = "localhost";
  $username = "root";
  $password = "";
  $database = "started_db";

  $conn = mysqli_connect($server, $username, $password, $database);
  
  // Cek apakah berhasil koneksi ke database
  if (mysqli_connect_errno()) {
    echo "Your Application has Failed to Connected to the Database" . mysqli_connect_error();
    exit();
  } else {
      echo "Your Application has Successfully Connected to the Database";
  }
?> 