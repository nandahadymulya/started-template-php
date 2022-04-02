<?php
// Handling Page Content
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
// View without Login
if ($page == '') {
    require 'view/home.php';
} else if ($page == 'login') {
    $title = 'Login Page';
    require 'view/login.php';
} else if ($page == 'about') {
    $title = 'About Page';
    require 'view/about.php';

    // View for Role: Admin
} else if ($page == "dashboard") {
    $title == 'Dashboard';
    require "view/dashboard.php";
} else if ($page == "profile") {
    require "view/profile/profile.php";
    // Authentication
} else if ($page == "logout") {
    require "view/logout.php";
} else {
    require 'view/blank.php';
}
