<?php
include_once(__DIR__ . '/../config/database.php');
include_once(__DIR__ . '/../views/auth/auth_check.php'); // Assurez-vous que l'utilisateur est connecté

// Connexion à la base de données
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupération des données du formulaire
$service_id = isset($_POST['service_id']) ? intval($_POST['service_id']) : 0;
$message = isset($_POST['message']) ? trim($_POST['message']) : '';
$user_id = $_SESSION['user_id']; // ID de l'utilisateur connecté

if ($service_id > 0 && !empty($message)) {
    // Préparation et exécution de la requête d'insertion
    $sql = "INSERT INTO chat_messages (service_id, user_id, message, created_at) VALUES (?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('iis', $service_id, $user_id, $message);

    if ($stmt->execute()) {
        // Redirection vers la page de chat
        header("Location: /pages/chat.php?service_id=" . $service_id);
        exit();
    } else {
        echo "Erreur lors de l'envoi du message: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Données manquantes ou invalides.";
}

$conn->close();
?>
