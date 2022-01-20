<button class= "btn btn-primary" style="margin-left:55rem"><a href="?page=home" style="color:beige; font-size:2rem">Home</a></button>

<div class="form-group">
            <form method="POST" action="?page=register&action=store" id="logIn" class="row g-3">
                <div class="col-md-6">
                    <label for="inputEmail4" class="label">First Name</label>
                    <input  type="text" name="first_name" class="form-control" id="inputEmail4" required>
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="label">Last Name</label>
                    <input type="text" name="last_name" class="form-control" id="inputEmail4" required>
                </div>

                <div class="col-md-6">
                    <label for="inputEmail4" class="label">Email</label>
                    <input type="email" name="email" class="form-control" id="inputEmail4" required>
                </div>

                <div class="col-md-6">
                    <label for="inputPassword4" class="label">Password</label>
                    <input type="password" name="password" class="form-control" id="inputPassword4" required>
                </div>
                <div class="col-12">
                    <button type="submit" value="save" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>

