<?php
session_start();
require_once '../Admin/config/admin_database.php';

if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
 
    echo 'Chemin absolu vers login.php: ' . realpath('../views/login.php');
    header('Location: ../views/login.php');
    exit();
}

include 'dashboard.php';
?>
