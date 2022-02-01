<nav>
    <h1>
        <div v-html="title">{{title}}</div>
    </h1>
    <div class="container-fluid navlinks">
        <shopping ref="shoppingComponent" :cart="cart" :shopping-cart="shoppingCart" :total-quantity="totalQuantity"
            :total-price="totalPrice">
        </shopping>


        <button class="btn btn-primary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false">Other Products &#9662;
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="/index-beans.php" style="color:#cad2c5">Coffee Beans</a></li>
            <li><a class="dropdown-item" href="/index-cups.php" style="color:#cad2c5">Coffee Cups</a></li>
        </ul>
        <a href="/index.php" class="btn btn-primary">Home</a>
    </div>
</nav>
<detailm ref="detailmComponent" :sale-30()="sale30()" :sale-50()="sale50()" :detailproduct="detailproduct" @detail-product()="detailm()"></detailm>
