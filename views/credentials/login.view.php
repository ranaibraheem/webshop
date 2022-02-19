<?php require 'views/partials/header.view.php' ?>

<div class="container-fluid col-12">
    <button class= "btn btn-primary">
        <a href="/" class="fixlink">Home</a>
    </button>

<div class="form-group">
    <!-- <div class="center-box login-form"> -->
        <div class="mb-3">
            <div><h3><?= $_ENV['APP_NAME'] ?></h3></div>
        </div>

        <form method="POST" name="frmLogin" onsubmit="return false;" id="logIn" class="row g-3">
            <?= generateFormTokenHTML() ?>
            <div class="col-md-6">
                <label for="email" class="label">Your email address</label>
                <input type="email" class="form-control" name="email" id="email" value="ranaibraheem@mail" required />
            </div>

            <div class="col-md-6">
                <label for="password" class="label">Password</label>
                <input type="password" class="form-control" name="password" id="password"  required />
                <input type="checkbox" onclick="myFunction()">Show
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-primary" value="Login" />
                    </div>
                    <div class="col-md-6">
                        <div id="login-message"></div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

<?php require 'views/partials/footer.view.php' ?>

