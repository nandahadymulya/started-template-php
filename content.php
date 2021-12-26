<?php
// Handling Page Content
$view = $_GET['page'];

// View without Login
if ($view == '') {
    require 'view/home.php';
} else if ($view == 'login') {
    $title = 'Login Page';
    require 'login.php';

    // View for Role: Admin
} else if ($view == "dashboard") {
    $title == 'Dashboard';
    require "view/dashboard/dashboard.php";
} else if ($view == "profile") {
    require "view/profile/profile.php";
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
} else if ($view == "logout") {
    require "logout.php";
} else {
    require 'view/blank.php';
}
