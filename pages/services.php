<?php
include_once(__DIR__ . '/../views/auth/auth_check.php'); // Utilisez __DIR__ pour un chemin relatif correct
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - VotreSite</title>
    <link rel="stylesheet" href="../public/css/styles.css">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Votre style personnalisé ici */
        .logout-button-container {
            margin-bottom: 50px; /* Ajustez la valeur selon vos besoins */
        }
        .service-card {
            margin-bottom: 30px;
        }
        .service-card img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <!-- Include Header -->
    <?php include(__DIR__ . '/../includes/header.php'); ?>

    <div class="container mt-5">
        <h2 class="text-center mb-4">Nos Services</h2>
        
        <!-- Service Card -->
        <div class="row">
            <div class="col-md-4 service-card">
                <div class="card">
                    <img src="../public/images/service1.jpg" class="card-img-top" alt="Service 1">
                    <div class="card-body">
                        <h5 class="card-title">Service 1</h5>
                        <p class="card-text">Petite description du Service 1. Lorem ipsum dolor sit amet.</p>
                        <a href="/pages/service_details.php?id=1" class="btn btn-primary">Voir détails</a>
                        <a href="/pages/chat.php?service_id=1" class="btn btn-secondary">Chat avec l'admin</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 service-card">
                <div class="card">
                    <img src="../public/images/service2.jpg" class="card-img-top" alt="Service 2">
                    <div class="card-body">
                        <h5 class="card-title">Service 2</h5>
                        <p class="card-text">Petite description du Service 2. Lorem ipsum dolor sit amet.</p>
                        <a href="/pages/service_details.php?id=2" class="btn btn-primary">Voir détails</a>
                        <a href="/pages/chat.php?service_id=2" class="btn btn-secondary">Chat avec l'admin</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 service-card">
                <div class="card">
                    <img src="../public/images/service3.jpg" class="card-img-top" alt="Service 3">
                    <div class="card-body">
                        <h5 class="card-title">Service 3</h5>
                        <p class="card-text">Petite description du Service 3. Lorem ipsum dolor sit amet.</p>
                        <a href="/pages/service_details.php?id=3" class="btn btn-primary">Voir détails</a>
                        <a href="/pages/chat.php?service_id=3" class="btn btn-secondary">Chat avec l'admin</a>
                    </div>
                </div>
            </div>

            <!-- Ajoutez d'autres cartes de service ici -->
        </div>
        
        <div class="text-center logout-button-container">
            <a href="/views/auth/logout.php" class="btn btn-danger">Déconnexion</a>
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
