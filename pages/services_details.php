<?php
// Inclure la connexion à la base de données
include_once(__DIR__ . '/../config/database.php');
include_once(__DIR__ . '/../views/auth/auth_check.php'); // Vérifie que l'utilisateur est connecté

// Récupérer l'ID du service depuis la requête GET
$service_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($service_id <= 0) {
    echo 'ID de service invalide.';
    exit;
}

// Préparer la requête SQL pour récupérer les détails du service
$sql = 'SELECT * FROM services WHERE id = ?';
$stmt = $conn->prepare($sql);
$stmt->bind_param('i', $service_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo 'Service non trouvé.';
    exit;
}

$service = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Service - VotreSite</title>
    <link rel="stylesheet" href="../public/css/styles.css">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Votre style personnalisé ici */
        .service-detail-container {
            margin-top: 30px;
        }
        .service-detail-image {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <!-- Include Header -->
    <?php include(__DIR__ . '/../includes/header.php'); ?>

    <div class="container service-detail-container">
        <h2 class="text-center mb-4"><?php echo htmlspecialchars($service['name']); ?></h2>
        <div class="row">
            <div class="col-md-6">
                <img src="../public/img/<?php echo htmlspecialchars($service['image']); ?>" class="service-detail-image" alt="<?php echo htmlspecialchars($service['name']); ?>">
            </div>
            <div class="col-md-6">
                <p><strong>Description :</strong> <?php echo nl2br(htmlspecialchars($service['description'])); ?></p>
                <p><strong>Prix :</strong> <?php echo htmlspecialchars($service['price']); ?> FC</p>
                <a href="/pages/chat.php?service_id=<?php echo $service_id; ?>" class="btn btn-secondary">Chat avec l'admin</a>
            </div>
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
