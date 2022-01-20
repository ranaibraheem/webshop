<div class="container-fluid">
    <?php foreach($users as $user) : ?>
        <div class="row">
            <div class="col-md-1">
                <a href="?page=user&action=show&id=<?= $user['id'] ?>">
                    <?= $user['id'] ?>
                </a>
            </div>

            <div class="col-md-5"><?= $user['first_name'] . ' ' . $user['last_name'] ?></div>
            <div class="col-md-6"><?= $user['email'] ?></div>
        </div>
    <?php endforeach ?>
</div>