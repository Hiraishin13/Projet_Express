<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - VotreSite</title>
    <link rel="stylesheet" href="../public/css/styles.css">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Google Maps API for embedding map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY" async defer></script>
</head>
<body>
    <!-- Include Header -->
    <?php include(__DIR__ . '/../includes/header.php'); ?>

    <!-- Include Navbar -->
    <?php include(__DIR__ . '/../includes/navbar.php'); ?>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Contactez-Nous</h1>
        <div class="row">
            <div class="col-md-6">
                <h2>Formulaire de Contact</h2>
                <form action="/path/to/your/form/handler.php" method="post">
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Informations de Contact</h2>
                <p>
                    <strong>Adresse :</strong> 123 Rue de Exemple, Ville, Code Postal, Pays
                </p>
                <p>
                    <strong>Téléphone :</strong> +123 456 7890
                </p>
                <p>
                    <strong>Email :</strong> contact@votresite.com
                </p>
                <h2>Nous Trouver</h2>
                <div id="map" style="height: 300px; width: 100%;"></div>
                <script>
                    function initMap() {
                        var location = { lat: -34.397, lng: 150.644 }; // Remplacez par les coordonnées de votre adresse
                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 15,
                            center: location
                        });
                        var marker = new google.maps.Marker({
                            position: location,
                            map: map
                        });
                    }
                    // Initialize map
                    window.onload = initMap;
                </script>
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
