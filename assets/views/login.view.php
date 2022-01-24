<button class= "btn btn-primary" style="margin-left:55rem"><a href="?page=home" style="color:beige; font-size:2rem">Home</a></button>

<div class="form-group">
    <form method="POST" action="?page=login&action=login" id="logIn" class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail4" class="label">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4" required>
        </div>

        <div class="col-md-6">
            <label for="inputPassword4" class="label">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword4" required>
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
        <div class="col-md-1">
            <button type="submit" class="btn btn-primary">Log in</button>
        </div>
    </form>
</div>
