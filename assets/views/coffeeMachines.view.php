<header>
    <h1>
        <div v-html="title">{{title}}</div>
    </h1>
    <div class="container-fluid navlinks">

        <shopping ref="shoppingComponent" :cart="cart" :shopping-cart="shoppingCart" :total-quantity="totalQuantity"
            :total-price="totalPrice">
        </shopping>

        <select @change="filterMachine()" v-model="machine_filter" class="btn btn-primary">
            <option selected value="all">All</option>
            <option value="bigmachine">Big</option>
            <option value="smallmachine">Small</option>
        </select>

        <button class="btn btn-primary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false">Other Products &#9662;
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="/coffeeBeans.html" style="color:#cad2c5">Coffee Beans</a></li>
            <li><a class="dropdown-item" href="/coffeeCups.html" style="color:#cad2c5">Coffee Cups</a></li>
        </ul>

        <a href="/index.html" class="btn btn-primary">Home</a>
    </div>


</header>

<products ref="machinesComponent" :sale-30()="sale30()" :sale-50()="sale50()"></products>
