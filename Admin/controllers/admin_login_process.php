<?php
session_start();
require_once '../config/admin_database.php'; // Chemin mis à jour

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Préparation de la requête SQL pour vérifier les informations d'identification de l'admin
    $stmt = $pdo->prepare('SELECT * FROM admins WHERE username = ?');
    $stmt->execute([$username]);
    $admin = $stmt->fetch();

    if ($admin && password_verify($password, $admin['password'])) {
        $_SESSION['admin_logged_in'] = true;
        $_SESSION['admin_id'] = $admin['id'];
        header('Location: ../dashboard.php');
        exit();
    } else {
        $error = 'Nom d\'utilisateur ou mot de passe incorrect.';
    }
}
?>
