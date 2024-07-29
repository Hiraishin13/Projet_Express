<?php
// Définir les constantes de connexion à la base de données
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'e_database');

// Créer une connexion
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);

// Vérifiez la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}
?>
