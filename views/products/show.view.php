<?php require 'views/partials/header.view.php' ?>
<a href="/" class="btn btn-primary">Home</a>
<div class="products block">
    <img src="<?= $image ?>" class="col-5"  height="700px">
    <div class="col-5" id="detail">
        <h3><?= $name ?></h3>
        <h3><?= $text ?></h3>
        <h3><?= $info ?></h3>
        <h3><?= $price ?></h3>
    </div>
</div>
<?php require 'views/partials/footer.view.php' ?>