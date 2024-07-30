<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Navbar</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        .navbar {
            padding: 0.5rem 1rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
        }
        .navbar-nav .nav-link {
            color: #555 !important;
            padding: 0.75rem 1rem;
        }
        .navbar-nav .nav-link:hover {
            color: #007bff !important;
            background-color: #f8f9fa;
        }
        .navbar-nav .nav-item.active .nav-link {
            color: #007bff !important;
            background-color: #e9ecef;
            border-radius: 0.25rem;
        }
        .login-icon {
            font-size: 1.5rem;
            color: #007bff;
            margin-left: 1rem;
        }
        .login-icon:hover {
            color: #0056b3;
        }
        .hero {
            background-color: #343a40;
            color: #ffffff;
            padding: 5rem 0;
            text-align: center;
        }
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }
        .hero p {
            font-size: 1.25rem;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">PRISCA-EXPRESS Admin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarAdmin" aria-controls="navbarAdmin" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarAdmin">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/admin/dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/services.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/users.php">Utilisateurs</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/messages.php">Messages</a>
            </li>
        </ul>
        <a href="/views/auth/logout.php" class="login-icon">
            <i class="fas fa-sign-out-alt"></i>
        </a>
    </div>
</nav>

<section class="hero">
    <div class="container">
        <h1 class="display-4">Bienvenue sur le Tableau de Bord Admin</h1>
        <p class="lead">Gérez vos services, utilisateurs, et plus encore.</p>
    </div>
</section>

<!-- Bootstrap and Custom JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
