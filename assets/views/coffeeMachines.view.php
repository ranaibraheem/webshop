<nav>
    <h1>
        <div v-html="title">{{title}}</div>
    </h1>
    <div class="container-fluid navlinks">
    <select @change="filter()" v-model="filters" class="btn btn-primary">
            <option selected value="all">All Products</option>
            <option value="machines">Machines</option>
            <option value="beans">Beans</option>
            <option value="cups">cups</option>
        </select>

        <!-- <button class="btn btn-primary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown"
            aria-expanded="false">Other Products &#9662;
        </button> 
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <select @change="filterProduct()" v-model="product_filter" class="btn btn-primary">
                <option value="all">All Machines</option>
                <option value="bigmachine">Big Machines</option>
                <option value="smallmachine">Small Machines</option>
            </select>
            <select @change="filterProductc()" v-model="productc_filter" class="btn btn-primary">
                <option selected value="all">All Cups</option>
                <option value="setCups">Set Ciuips</option>
                <option value="perstuckCups">Per Stuck Cup</option>
            </select>
            <select @change="filterProductb()" v-model="productb_filter" class="btn btn-primary">
                <option selected value="all">All Beans</option>
                <option value="dark">Dark Beans</option>
                <option value="medium">Medium Beans</option>
                <option value="blond">blond Beans</option>
            </select>
        </ul> -->
        <a href="/index.php" class="btn btn-primary">Home</a>
    </div>
</nav>
<products ref="machinesComponent" :sale-30()="sale30()" :sale-50()="sale50()"></products>
<productsb ref="beansComponent" :saleb-30()="saleb30()" :saleb-50()="saleb50()"></productsb>
<productsc ref="cupsComponent" :salec-30()="salec30()" :salec-50()="salec50()"></productsc>
