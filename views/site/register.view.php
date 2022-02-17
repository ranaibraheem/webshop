<?php require 'views/partials/header.view.php' ?>

<div class="login-overlay">
    <div class="center-box register-form">
        <div class="mb-3">
        <button class= "btn btn-primary">
        <a href="/" class="fixlink">Home</a>
    </button>

            <h3>Register</h3>
        </div>
        <div class="form-group">

            <form method="<?= $method ?>" onsubmit="return false;" name="frmRegister" class="row g-3" id="logIn">
                <div class="col-md-6">
                    <label for="first_name" class="form-label">First name</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" maxlength="80" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="last_name" class="form-label">Last name</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" maxlength="80" required>
                </div>
                
                <div class="col-md-12 mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" maxlength="255" required>
                </div>

                <div class="col-md-6">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" maxlength="50" required>
                    <input type="checkbox" onclick="myFunction()">Show
                </div>

                <div class="col-md-6 mb-3">
                    <label for="password_2">Repeat password</label>
                    <input type="password" class="form-control" name="password_2" id="password_2" maxlength="50" required>
                    <input type="checkbox" onclick="myFunction_2()">Show
                </div>

                <input type="hidden" name="f_token" value="<?= createToken() ?>">

                <div class="col-md-12 mb-3">
                    <input type="submit" class="btn btn-primary" value="Submit">
                    <input type="button" class="btn btn-primary" id="register-cancel" value="Cancel">
                </div>
            </form>
    </div>
</div>
</div>

<script src="public/js/partials/register.js"></script>
<script src="public/js/partials/login.js"></script>

<?php require 'views/partials/footer.view.php' ?>