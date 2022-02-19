<?php require 'views/partials/header.view.php' ?>

<div class="form-group">
    <form method="<?= $method ?>" action="<?= $action ?>" id="logIn">
        <div class="container mt-5">
            <div class="row mb-3">
                <div class="col-md-4">
                    <label>First Name:</label><br/>
                    <input type="text" name="first_name" placeholder="Voornaam" value="<?= isset($user) ? $user->first_name : '' ?>">
                </div>

                <div class="col-md-6">
                    <input type="text" name="last_name" placeholder="Achternaam" value="<?= isset($user) ? $user->last_name : '' ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="email" name="email" placeholder="E-mail" value="<?= isset($user) ? $user->email : '' ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <input type="text" name="city" placeholder="Woonplaats" value="<?= isset($user) ? $user->city : '' ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <select name="role">
                        <option value="0">Choose a role...</option>

                        <?php foreach($roles as $role) : ?>
                            <option value="<?= $role->id ?>"><?= $role->friendly_name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-4">
                    <label>Birthday date:</label><br/>
                    <input type="date" name="birthday" value="<?= $user->birthday ?>">
                </div>
            </div>

            <input type="hidden" name="f_token" value="<?= createToken() ?>">

            <input class="btn btn-primary" type="submit" value="Save">
        </div>
    </form>
</div>
<?php require 'views/partials/footer.view.php' ?>