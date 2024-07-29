<?php
session_start();
include_once(__DIR__ . '/../config/database.php'); // Ajustez le chemin si nécessaire

// Vérifiez si l'utilisateur est déjà connecté
if (isset($_SESSION['user_id'])) {
    header("Location: /pages/services.php"); // Rediriger vers la page des services
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';

    // Connexion à la base de données
    $conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        die("Échec de la connexion à la base de données : " . $conn->connect_error);
    }

    // Préparer et exécuter la requête de connexion
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($user_id, $hashed_password);
            $stmt->fetch();

            // Vérifier le mot de passe
            if (password_verify($password, $hashed_password)) {
                $_SESSION['user_id'] = $user_id;
                header("Location: /pages/services.php"); // Rediriger vers la page des services
                exit();
            } else {
                header("Location: /views/auth/login.php?error=Mot de passe incorrect");
                exit();
            }
        } else {
            header("Location: /views/auth/login.php?error=Utilisateur non trouvé");
            exit();
        }
        $stmt->close();
    } else {
        die("Erreur lors de la préparation de la requête : " . $conn->error);
    }

    $conn->close();
}
?>
