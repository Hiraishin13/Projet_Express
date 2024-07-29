<?php
include_once(__DIR__ . '/../views/auth/auth_check.php'); // Vérifiez que l'utilisateur est connecté
include_once(__DIR__ . '/../config/database.php');

// Récupérez l'ID du service depuis l'URL
$service_id = isset($_GET['service_id']) ? intval($_GET['service_id']) : 0;

if ($service_id <= 0) {
    die("Service ID invalide.");
}

// Connexion à la base de données
$conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupérer les messages pour ce service
$sql = "SELECT * FROM chat_messages WHERE service_id = ? ORDER BY created_at ASC";
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $service_id);
$stmt->execute();
$result = $stmt->get_result();

// Assurez-vous que les messages sont correctement récupérés
if ($result) {
    $messages = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $messages = []; // Initialiser $messages comme un tableau vide si la requête échoue
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat - VotreSite</title>
    <link rel="stylesheet" href="../public/css/styles.css">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .chat-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            background-color: #f9f9f9;
            height: 600px;
            overflow-y: scroll;
            display: flex;
            flex-direction: column;
        }
        .message {
            margin-bottom: 15px;
            padding: 10px;
            border-radius: 8px;
            position: relative;
            max-width: 75%;
        }
        .message.admin {
            align-self: flex-start;
            background-color: #e9ecef;
        }
        .message.user {
            align-self: flex-end;
            background-color: #007bff;
            color: #fff;
        }
        .message.admin::after,
        .message.user::after {
            content: '';
            position: absolute;
            width: 0;
            height: 0;
            border: 10px solid transparent;
        }
        .message.admin::after {
            border-right-color: #e9ecef;
            left: -10px;
            top: 10px;
        }
        .message.user::after {
            border-left-color: #007bff;
            right: -10px;
            top: 10px;
        }
        .message-time {
            font-size: 0.85rem;
            color: #888;
            text-align: right;
        }
        .form-container {
            margin-top: 20px; /* Espacement entre le formulaire et la zone de chat */
            margin-bottom: 50px; /* Espacement entre le formulaire et le footer */
        }
        .form-control {
            border-radius: 20px;
            padding: 10px; /* Réduit l'espace intérieur de la zone de texte */
            font-size: 0.875rem; /* Réduit la taille de la police */
            max-width: 100%; /* Ajuste la largeur du champ de texte */
        }
        .btn-primary {
            border-radius: 20px;
        }
        .form-group {
            margin-bottom: 0; /* Évite l'espacement supplémentaire sous la zone de texte */
        }
    </style>
</head>
<body>
    <!-- Include Header -->
    <?php include(__DIR__ . '/../includes/header.php'); ?>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Chat pour le Service <?php echo htmlspecialchars($service_id); ?></h2>
        <div class="chat-container">
            <?php if (!empty($messages)): ?>
                <?php foreach ($messages as $message): ?>
                    <div class="message <?php echo ($message['user_id'] == 1) ? 'admin' : 'user'; ?>">
                        <p><?php echo htmlspecialchars($message['message']); ?></p>
                        <p class="message-time"><?php echo $message['created_at']; ?></p>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>Aucun message à afficher.</p>
            <?php endif; ?>
        </div>
        <div class="form-container">
            <form action="/pages/chat_process.php" method="POST">
                <input type="hidden" name="service_id" value="<?php echo htmlspecialchars($service_id); ?>">
                <div class="form-group">
                    <textarea name="message" class="form-control" rows="3" placeholder="Écrivez votre message..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        </div>
    </div>

    <!-- Include Footer -->
    <?php include(__DIR__ . '/../includes/footer.php'); ?>

    <!-- Bootstrap and Custom JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
