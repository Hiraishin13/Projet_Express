<?php include 'app/views/layouts/admin_header.php'; ?>
<?php include 'app/views/layouts/admin_navbar.php'; ?>

<div class="container mt-4">
    <h1>Liste des Messages</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Expéditeur</th>
                <th>Sujet</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($messages as $message): ?>
                <tr>
                    <td><?php echo $message['id']; ?></td>
                    <td><?php echo $message['sender']; ?></td>
                    <td><?php echo $message['subject']; ?></td>
                    <td><?php echo $message['date']; ?></td>
                    <td>
                        <a href="/admin/messages.php?action=view&id=<?php echo $message['id']; ?>" class="btn btn-info btn-sm">Voir</a>
                        <a href="/admin/messages.php?action=delete&id=<?php echo $message['id']; ?>" class="btn btn-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'app/views/layouts/admin_footer.php'; ?>
