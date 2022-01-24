<button class= "btn btn-primary" style="margin-left:55rem"><a href="?page=home" style="color:beige; font-size:2rem">Home</a></button>

<div class="form-group row g-3" id="logIn" style="padding:1rem; margin:10rem">
        <div class="col-md-6">
            <label for="inputEmail4" class="label">First Name</label>
            <input type="text" name="first_name" placeholder="First name"  class="form-control" id="inputEmail4" required value="<?= isset($user) ? $user['first_name'] : '' ?>">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="label">Last Name</label>
            <input type="text" name="last_name" placeholder="Last name"  class="form-control" id="inputEmail4" required value="<?= isset($user) ? $user['last_name'] : '' ?>">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="label">Email</label>
            <input type="email" name="email" placeholder="Email address" class="form-control" id="inputEmail4" required value="<?= isset($user) ? $user['email'] : '' ?>">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="label">Password</label><br>
            <input type="password" name="password" placeholder="Password" class="form-control" id="inputPassword4" required>
            <input type="checkbox" onclick="myFunction()">Show
            <script>
            function myFunction() {
                var x = document.getElementById("inputPassword4");
                if (x.type === "password") {
                x.type = "text";
                } else {
                x.type = "password";
                }
            }
            </script>

        </div>
        <div class="col-md-12">
            <input type="submit" value="Save" class="btn btn-primary">
        </div>
</div>
