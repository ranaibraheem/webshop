<?php require 'views/partials/header.view.php' ?>
    <div class="block">
        <div class="sidenav">
            <div id="homeNav">
                <div class="sideBtn">
                    <a href="/products" class="btn btn-primary">Products</a>
                </div>

                <div class="sideBtn">
                    <a href="/login" class="btn btn-primary">Log in</a>
                </div>
                <div class="sideBtn">
                    <a href="/register" class="btn btn-primary">Register</a>
                </div>
                <!-- <div class="sideBtn">
                    <button type="bottom" class="btn btn-primary">
                        <a style="color:#cad2c5" href="/edit">Edit Account</a>
                    </button>
                </div> -->

                <div class="sideBtn">
                    <button class="btn btn-primary" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">More Information &#9662;
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li>
                            <a class="dropdown-item" href="#footer" style="color:#cad2c5"> Contact us</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="https://en.wikipedia.org/wiki/Coffeemaker" style="color:#cad2c5">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <img id="homeImg" src="/public/images/coffeeGif1.gif" alt="animated coffee cup">
    </div>
<?php require 'views/partials/footer.view.php' ?>