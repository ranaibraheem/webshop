<form method="POST" action="?page=user&action=updateUser&id=<?= $user['id'] ?>">
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/users/partials/user-form.view.php'; ?>
</form>