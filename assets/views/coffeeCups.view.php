<nav> 
    <h1>
        <div v-html="title">{{title}}</div>
    </h1>
    <div class="container-fluid navlinks">
        <shoppingc ref="shoppingComponent" :cart-c="cartC" :shopping-cart-c="shoppingCartC"
            :total-quantity-c="totalQuantityC" :total-price-c="totalPriceC">
        </shoppingc>

        <select @change="filterCup()" v-model="cup_filter" class="btn btn-primary">
            <option selected value="all">All</option>
            <option value="setCups">Set</option>
            <option value="perstuckCups">Per Stuck</option>
        </select>

        <button class="btn btn-primary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false">Other Products &#9662;
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="/?page=coffeeMachines" style="color:#cad2c5">Coffee Machines</a></li>
            <li><a class="dropdown-item" href="/index-beans.php" style="color:#cad2c5">Coffee Beans</a></li>
        </ul>
        <a href="/index.php" class="btn btn-primary">Home</a>
    </div>
</nav>

<productsc ref="cupsComponent" :sale-30()="sale30()" :sale-50()="sale50()"></productsc>
