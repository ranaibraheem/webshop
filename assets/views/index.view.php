<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cherkkoffie</title>

    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <script src="/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/assets/css/style.css">

    <script src="/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

    <script src="/node_modules/vue/dist/vue.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="/assets/js/machines.js"></script>


    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico" />
</head>
<body>
    <main id="app">
            <header>
                <h2>
                    <div v-html="brand">{{brand}}></div>
                </h2>
            </header>

        <div class="block">
            <div class="sidenav">
                <div id="homeNav">
                    <div class="container-fluid navlinks">
                        <button class="btn btn-primary" type="button"><a href="index.html" class="navlinks">cherkkoffie</a></button>
                    </div>

                    <div class="sideBtn"><a href="/coffeeMachines.html" class="btn btn-primary">Coffee Machines</a></div>

                    <div class="sideBtn"><a href="/coffeeBeans.html" class="btn btn-primary">Coffee Beans</a></div>

                    <div class="sideBtn"><a href="/coffeeCups.html" class="btn btn-primary">Coffee Cups</a></div>

                    <div class="sideBtn"> <a href="/signIn.html" class="btn btn-primary">LOG IN</a></div>

                    <div class="sideBtn">
                        <button class="btn btn-primary" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">More Information &#9662;
                        </button>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#footer" style="color:#cad2c5"> Contact us</a></li>
                                <li><a class="dropdown-item" href="https://en.wikipedia.org/wiki/Coffeemaker"
                                        style="color:#cad2c5">About</a></li>
                            </ul>
                    </div>
                </div>
            </div>
                <img id="homeImg" src="/assets/images/coffeeGif1.gif" alt="animated coffee cup">
        </div>
    </main>
    <script src="/assets/js/app.js"></script>
</body>
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top" id="footer">
    <p class="col-md-4 mb-0 text-muted">&copy; 2021 Cherkkoffie</p>
    <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
        <li><a href="https://www.facebook.com/" class="fa fa-facebook"></a>
        </li>
        <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a>
        </li>
        <li><a href="https://www.instagram.com/" class=" fa fa-instagram"></a>
        </li>
    </ul>
</footer>

</html>

