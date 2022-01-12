<div class="form-group">
            <form id="logIn" class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail4" class="label">Email</label>
                    <input v-model="email" type="email" class="form-control" id="inputEmail4" required>
                </div>

                <div class="col-md-6">
                    <label for="inputPassword4" class="label">Password</label>
                    <input v-model="password" type="password" class="form-control" id="inputPassword4" required>
                </div>
                <div class="col-12">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">SIGN IN</button>
                    <button type="button" class="btn btn-primary">SIGN UP</button>

                </div>

            </form>

        </div>
    </div>
