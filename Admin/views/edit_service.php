<?php
// edit_service.php : Formulaire de modification de service
require_once 'header.php';
?>

<div class="container my-5">
    <h1 class="mb-4">Modifier le Service</h1>
    <form action="/admin/services/edit/<?= $service['id']; ?>" method="POST">
        <div class="form-group">
            <label for="name">Nom du Service</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= $service['name']; ?>" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="4" required><?= $service['description']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="price">Prix</label>
            <input type="number" class="form-control" id="price" name="price" value="<?= $service['price']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</div>

<?php require_once 'footer.php'; ?>
