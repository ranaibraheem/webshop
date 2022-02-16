<form method="<?= $method ?>" action="<?= $action ?>">
    <div class="container mt-5">
        <div class="row mb-3">
            <div class="col-md-4">
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
                    <option value="0">Kies een rol...</option>

                    <?php foreach($roles as $role) : ?>
                        <option value="<?= $role->id ?>"><?= $role->friendly_name ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-md-4">
                <label>Geboortedatum</label><br/>
                <input type="date" name="birthday" value="<?= $user->birthday ?>">
            </div>
        </div>

        <input type="hidden" name="f_token" value="<?= createToken() ?>">

        <input type="submit" value="Opslaan">
    </div>
</form>