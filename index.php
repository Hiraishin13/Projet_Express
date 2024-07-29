<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - VotreSite</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/css/styles.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
    <!-- Navbar -->
    <?php include(__DIR__ . '/includes/navbar.php'); ?>

    <!-- Main Content -->
    <main class="d-flex flex-column justify-content-center align-items-center vh-100 bg-primary text-white">
        <div class="text-center">
            <h1 class="display-4 animate__animated animate__fadeIn animate__delay-1s">Bienvenue sur VotreSite</h1>
            <p class="lead animate__animated animate__fadeIn animate__delay-2s">Découvrez nos services et produits de qualité avec une expérience inégalée.</p>
            <!-- Buttons Container -->
            <div class="btn-group mt-4 animate__animated animate__fadeIn animate__delay-3s">
                <a href="/views/auth/login.php" class="btn btn-light btn-lg mx-2">Se Connecter</a>
                <a href="/views/auth/register.php" class="btn btn-outline-light btn-lg mx-2">S'inscrire</a>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <?php include(__DIR__ . '/includes/footer.php'); ?>

    <!-- Bootstrap and Custom JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
