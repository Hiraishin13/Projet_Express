<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos - VotreSite</title>
    <link rel="stylesheet" href="public/css/styles.css">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <!-- Include Header -->
    <?php include(__DIR__ . '/../includes/header.php'); ?>

    <div class="container mt-5">
        <h1 class="text-center mb-4">À propos de nous</h1>
        <div class="row">
            <div class="col-md-6">
                <h2>Notre Mission</h2>
                <p>
                    Chez VotreSite, notre mission est de fournir des services et des produits de qualité supérieure à nos clients. Nous nous efforçons de dépasser les attentes et de créer une expérience client inégalée.
                </p>
            </div>
            <div class="col-md-6">
                <h2>Notre Histoire</h2>
                <p>
                    Fondée en 2024, VotreSite a rapidement évolué pour devenir un leader dans le domaine des services en ligne. Grâce à notre dévouement et à notre engagement envers l'excellence, nous avons construit une base de clients fidèles et satisfaits.
                </p>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <h2>Notre Équipe</h2>
                <p>
                    Notre équipe est composée de professionnels dévoués et passionnés par ce qu'ils font. Chacun apporte son expertise et son expérience pour garantir que nos clients reçoivent le meilleur service possible.
                </p>
            </div>
            <div class="col-md-6">
                <h2>Nos Valeurs</h2>
                <ul>
                    <li>Intégrité</li>
                    <li>Innovation</li>
                    <li>Excellence</li>
                    <li>Respect</li>
                    <li>Engagement envers les clients</li>
                </ul>
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
