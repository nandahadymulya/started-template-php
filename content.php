<?php
// Handling Page Content
$view = $_GET['page'];

// View without Login
if ($view == '') {
  require 'view/home.php';
}
// } else if ($view == 'about') {
//   require 'view/about.php';
// } else if ($view == 'login') {
//   require 'login.php';
// }
// // View for Role: Admin
// else if ($view == "dashboard") {
//   $title == 'Dashboard';
//   include "view/dashboard/dashboard.php";
// } else if ($view == "penyakit") {
//   include "view/penyakit/penyakit.php";
// } else if ($view == "gejala") {
//   include "view/gejala/gejala.php";
// } else if ($view == 'tambahgejala') {
//   include "view/gejala/tambahgejala.php";
// } else if ($view == "pengetahuan") {
//   include "view/pengetahuan/pengetahuan.php";
// } else if ($view == "password") {
//   include "view/password/password.php";
// } else if ($view == "riwayat") {
//   include "view/riwayat/riwayat.php";
//   // Authentication
// } else if ($view == "logout") {
//   include "logout.php";
// } else {
//   include 'view/blank.php';
// }
