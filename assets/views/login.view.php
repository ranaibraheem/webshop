<div class="form-group">
            <form method="POST" action="?page=register&action=store" id="logIn" class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail4" class="label">Email</label>
                    <input v-model="email" type="email" class="form-control" id="inputEmail4" required>
                </div>

                <div class="col-md-6">
                    <label for="inputPassword4" class="label">Password</label>
                    <input v-model="password" type="password" class="form-control" id="inputPassword4" required>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Log in</button>
                </div>

            </form>

        </div>
    </div>
