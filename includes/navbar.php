<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Moderne</title>
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
        .search-form {
            margin: 0 auto;
            max-width: 400px;
        }
        .search-form input {
            border-radius: 20px;
            border: 1px solid #ddd;
            padding: 0.25rem 0.75rem;
        }
        .login-icon {
            font-size: 1.5rem;
            color: #007bff;
            margin-left: 1rem;
        }
        .login-icon:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">PRISCA-EXPRESS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/index.php">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pages/services.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pages/about.php">À propos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pages/contact.php">Contact</a>
            </li>
        </ul>
        <form class="d-flex search-form">
            <input class="form-control me-2" type="search" placeholder="Recherche..." aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Recherche</button>
        </form>
        <a href="/views/auth/login.php" class="login-icon">
            <i class="fas fa-user"></i>
        </a>
    </div>
</nav>

<!-- Bootstrap and Custom JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
