<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h3><?= $user->first_name . ' ' . $user->last_name ?></h3>
        </div>
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


    <a href="/user/<?= $user->id ?>/edit">
        <button class="btn btn-primary">Edit</button>
    </a>
</div>