<?php
session_start();

// Vérifier si l'utilisateur est déjà connecté
if (isset($_SESSION['user_id'])) {
    header("Location: /pages/services.php"); // Rediriger vers la page des services
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - VotreSite</title>
    <link rel="stylesheet" href="../../public/css/styles.css">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            margin-bottom: 20px;
            font-size: 1.75rem;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
    </style>
</head>
<body>
    <!-- Include Header -->
    <?php include(__DIR__ . '/../../includes/header.php'); ?>

    <div class="container mt-5 mb-5">
        <div class="login-container">
            <h2 class="text-center mb-4">Connexion</h2>
            <form action="/controllers/login_process.php" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="text-center">
                    <button type="submit" name="login" class="btn btn-primary btn-block">Se connecter</button>
                </div>
                <?php if (isset($_GET['error'])): ?>
                    <p class="text-danger mt-3 text-center"><?php echo htmlspecialchars($_GET['error']); ?></p>
                <?php endif; ?>
            </form>
            <p class="text-center mt-3">Pas encore inscrit ? <a href="/views/auth/register.php">S'inscrire</a></p>
        </div>
    </div>

    <!-- Include Footer -->
    <?php include(__DIR__ . '/../../includes/footer.php'); ?>

    <!-- Bootstrap and Custom JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
