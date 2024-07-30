<?php
// services.php : Liste des services
require_once 'header.php';
?>

<div class="container my-5">
    <h1 class="mb-4">Liste des Services</h1>
    <a href="/admin/services/add" class="btn btn-primary mb-3">Ajouter un Service</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($services as $service) : ?>
                <tr>
                    <td><?= $service['id']; ?></td>
                    <td><?= $service['name']; ?></td>
                    <td><?= $service['description']; ?></td>
                    <td><?= $service['price']; ?></td>
                    <td>
                        <a href="/admin/services/edit/<?= $service['id']; ?>" class="btn btn-warning btn-sm">Modifier</a>
                        <a href="/admin/services/delete/<?= $service['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce service ?');">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php require_once 'footer.php'; ?>
