<?php require 'views/partials/header.view.php' ?>
    
<div class="form-group login" >
    <h3 class="col-md-1">Admin</h3>
    
    <span><?= fullNameFromSession() ?></span>

    <a href="logout" class="btn btn-primary col-md-1">Logout</a>

    <a href="user" class="btn btn-primary col-md-1">Users</a>

    <a href="/" class="fixlink btn btn-primary col-md-1">Home</a>
</div>

<?php require 'views/partials/footer.view.php' ?>