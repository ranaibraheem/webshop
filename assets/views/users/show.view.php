<div class="container">
    <div class="row">
        <div class="col-md-2">
            <label>First name:</label>
        </div>
        <div class="col-md-10">
            <?= $user['first_name'] ?>
        </div>

        <div class="col-md-2">
            <label>Last name:</label>
        </div>
        <div class="col-md-10">
            <?= $user['last_name'] ?>
        </div>

        <div class="col-md-2">
            <label>Email:</label>
        </div>
        <div class="col-md-10">
            <?= $user['email'] ?>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-12">
            <a href="?page=user&function=edit&id=<?= $user['id'] ?>">
                <button>Edit user</button>
            </a>
        </div>
    </div>
</div>