<?php require 'views/partials/header.view.php' ?>
<div class="form-group" >
    <button class= "btn btn-primary">
            <a href="/" class="fixlink">Home</a>
    </button>

    <div>
        <div class="row">
            <div class="col-md-10">
                <h3>Admin</h3>
            </div>
            <div class="col-md-6">
                <a href="user" class="btn btn-primary">Users</a>
            </div>

            <div class="col-md-6">
                <a href="logout" class="btn btn-primary">Logout</a>
                <div><?= fullNameFromSession() ?></div>
            </div>
        </div>
    </div>
</div>
<?php require 'views/partials/footer.view.php' ?>