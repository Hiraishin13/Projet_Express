<?php
$password = 'admin_password'; // Mot de passe en clair
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
echo $hashed_password;
?>
