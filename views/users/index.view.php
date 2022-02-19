<?php require 'views/partials/header.view.php' ?>
    <section class="container login">
        <ul>
            <?php foreach($users as $user) : ?>
                <li>
                    <a href="user/<?= $user->id ?>">
                        <?= $user->first_name . ' ' . $user->last_name ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
        <a href="/" class="fixlink btn btn-primary">Home</a>
    </section>
<?php require 'views/partials/footer.view.php' ?>