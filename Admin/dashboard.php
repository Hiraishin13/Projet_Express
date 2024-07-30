<?php
// dashboard.php : Tableau de bord de l'administrateur
require_once 'header.php';
?>

<div class="container my-5">
    <h1 class="mb-4">Tableau de Bord Admin</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Clients</h5>
                    <p class="card-text"><?= $statistics['total_clients']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Visiteurs Quotidiens</h5>
                    <p class="card-text"><?= $statistics['daily_visitors']; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-body">
                    <h5 class="card-title">Messages Non Lus</h5>
                    <p class="card-text"><?= $statistics['unread_messages']; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>
