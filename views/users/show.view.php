<?php require 'views/partials/header.view.php' ?>

<div class="container-fluid">
    <div class="row login">
        <div class="col-md-12">
            <h3><?= $user->first_name . ' ' . $user->last_name ?></h3>
        </div>

        <div class="row">
            <div class="col-md-2">E-mail</div>
            <div class="col-md-9"><?= $user->email ?></div>
        </div>

        <div class="row">
            <div class="col-md-2">Birthday date:</div>
            <div class="col-md-9"><?= date('d-m-Y', strtotime($user->birthday)) ?></div>
        </div>
        <div class="row">
            <div class="col-md-2">Role</div>
            <div class="col-md-9"><?= $user->role ?></div>
        </div>

        <a href="/user/<?= $user->id ?>/edit" class="btn btn-primary col-md-1">Edit</a>
        <a href="/" class="fixlink btn btn-primary col-md-1">Home</a>

    </div>
</div>
<?php require 'views/partials/footer.view.php' ?>