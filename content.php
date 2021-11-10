<?php

if ($view == "") {
  $title = 'Home';
  include "view/home.php";
}
// Untuk umum
else if ($page == "diagnosa") {
  include "view/diagnosa/diagnosa.php";
} else if ($view == "tentang") {
  include "view/tentang/tentang.php";
} else if ($view == "pakar") {
  include "view/admin/login.php";
}


// Untuk admin
else if ($view == "admin") {
  include "view/admin/admin.php";
} else if ($view == "penyakit") {
  include "view/penyakit/penyakit.php";
} else if ($view == "gejala") {
  include "view/gejala/gejala.php";
} else if ($view == 'tambahgejala') {
  include "view/gejala/tambahgejala.php";
} else if ($view == "pengetahuan") {
  include "view/pengetahuan/pengetahuan.php";
} else if ($view == "password") {
  include "view/password/password.php";
} else if ($view == "riwayat") {
  include "view/riwayat/riwayat.php";
} else if ($view == "login") {
  include "login.php";
} else if ($view == "logout") {
  include "logout.php";
} else {
  include 'blank.php';
}
