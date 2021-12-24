<?php
$server   = "localhost";
$username = "root";
$password = "root";
$database = "started_db";

$conn = mysqli_connect($server, $username, $password, $database);

// Cek apakah berhasil koneksi ke database
// if (mysqli_connect_errno()) {
//   echo "
//         <div class='alert alert-danger'>
//           Your application has Failed to connected to the Database
//         </div>
//     " . mysqli_connect_error();
//   exit();
// } else {
//   echo "
//         <div class='alert alert-success text-center'>
//           Your application has <span class='fw-bold'>Successfully</span> connected to the <span class='fw-bold'>Database</span>!
//         </div>
//       ";
// }
