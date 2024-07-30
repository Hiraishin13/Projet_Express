<?php session_start(); ?>

<?php include '../includes/admin_header.php'; ?>

<section class="py-0" id="acceuil">
    <div class="bg-holder d-none d-md-block" style="background-image:url(assets/img/illustrations/hero-bg.png);background-position:right top;background-size:contain;"></div>
    <div class="bg-holder d-md-none" style="background-image:url(assets/img/illustrations/hero-bg.png);background-position:right top;background-size:contain;"></div>
    <div class="container">
        <div class="row align-items-center min-vh-75 min-vh-lg-100">
            <div class="col-md-7 col-lg-6 col-xxl-5 py-6 text-sm-start text-center">
                <h1 class="mt-6 mb-sm-4 fw-semi-bold lh-sm fs-4 fs-lg-5 fs-xl-6 text-red-perso">Erreur !</h1>
                <p class="mb-4 fs-1">
                    <?php if (isset($_GET['message'])) : ?>
                        <span class="text-black"> <?= htmlspecialchars($_GET['message']) ?> </span>
                    <?php endif ?>
                    <?php
                    if (isset($_SESSION['message'])) {
                        echo '<p class="text-black">' . htmlspecialchars($_SESSION['message']) . '</p>';
                        unset($_SESSION['message']);
                    }
                    ?>
                </p>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/admin_footer.php'; ?>
