<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - VotreSite</title>
    <link rel="stylesheet" href="../public/css/styles.css">
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .register-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .register-container h2 {
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
        <div class="register-container">
            <h2 class="text-center mb-4">S'inscrire</h2>
            <?php
            session_start();
            if (isset($_SESSION['error_message'])) {
                echo '<div class="alert alert-danger">' . $_SESSION['error_message'] . '</div>';
                unset($_SESSION['error_message']);
            }
            ?>
            <form action="/controllers/login_process.php" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirmez le mot de passe</label>
                    <input type="password" id="confirm_password" name="confirm_password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="last_name">Nom</label>
                    <input type="text" id="last_name" name="last_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="first_name">Prénom</label>
                    <input type="text" id="first_name" name="first_name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="tel">Téléphone</label>
                    <input type="text" id="tel" name="tel" class="form-control" required>
                </div>
                <div class="text-center">
                    <button type="submit" name="register" class="btn btn-primary btn-block">S'inscrire</button>
                    <a href="/index.php" class="btn btn-secondary btn-block mt-2">Annuler</a>
                </div>
                <?php if (isset($_GET['error'])): ?>
                    <p class="text-danger mt-3 text-center"><?php echo htmlspecialchars($_GET['error']); ?></p>
                <?php endif; ?>
            </form>
            <p class="text-center mt-3">Déjà inscrit ? <a href="/views/auth/login.php">Se connecter</a></p>
        </div>
    </div>

    <!-- Include Footer -->
    <?php include(__DIR__ . '/../../includes/footer.php'); ?>
</body>
</html>
