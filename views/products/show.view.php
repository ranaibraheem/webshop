<?php require 'views/partials/header.view.php' ?>
<nav>
    <h1>
        <div v-html="title">{{title}}</div>
    </h1>
    <div class="container-fluid navlinks">
        <a href="/" class="btn btn-primary">Home</a>
        <a href="/products" class="btn btn-primary">Products</a>
    </div>

</nav>

<div class="products block">
    <img src="<?= $image ?>" class="col-5"  height="800px">
    <div class="col-5" id="detail">
        <h3><b>Name: </b><?= $name ?></h3>

        <h3><?= $info ?></h3><hr>

        <h3><b>Description: </b><?= $text ?></h3><hr>

        <?php if($onSale30) : ?>
            <h3><b>Sale 30%</b></h3>
            <h3><b>Old Price: </b><span class="onSale"><?= $price ?></span><br>
                <b>New Price: </b><span class="newPrice30"><?= $price*30/100 ?></span>
            </h3><hr>
        <?php elseif($onSale50) : ?>
            <h3><b>Sale 50%</b>
            <h3><b>Old Price: </b><span class="onSale"><?= $price ?></span><br>
                <b>New Price: </b><span class="newPrice50"><?= $price*50/100 ?></span>
            </h3><hr>
        <?php else : ?>
            <h3><b>Price: </b><?= $price ?></h3><hr>

        <?php endif; ?>
        <?php if($stock == 0) : ?>
            <h3 class="soldOut"><b>Sold Out</b></h3><hr>
        <?php elseif($stock <= 5 & $stock > 0) : ?>
            <h3 class="soldOut"><b>Almost Sold Out</b></h3><hr>
        <?php else : ?>
            <h3><b>In Stock</b></h3><hr>
        <?php endif; ?>

        <h3>&#x1F6D2;
            <button class="addToCart btn btn-primary"><h3>Order</h3></span></button>
        </h3>
    </div>
</div>

<?php require 'views/partials/footer.view.php' ?>



<!-- <div class="products block">
        <img :src="imagePath + detailproduct.image" class="col-5"  height="700px">
        <div class="col-5" id="detail" v-for="detailproduct in detailproducts" :key="detailproduct.id">
            <h3> {{detailproduct.name}} </h3>
            <h3> {{detailproduct.machineNum}} </h3><hr>
            <h4> {{detailproduct.text}}</h4><hr>
            <h3 v-if="detailproduct.onSale30"><b>Sale 30%</b>
                <span class="onSale">{{detailproduct.price}}$</span><br>
                <span class="newPrice30"> New Price: <b>{{detailproduct.newPrice30}}$</b></span>
            </h3>
            <h3 v-else-if="detailproduct.onSale50"><b>Sale 50%</b>
                <span class="onSale">{{detailproduct.price}}$</span><br>
                <span class="newPrice50"> New Price: <b>{{detailproduct.newPrice50}}$</b></span>
            </h3>
            <h3 v-else>Price: {{detailproduct.price}}$</h3>

            <h3 class="soldOut" v-if="detailproduct.stock===0">Sold Out</h3>
            <h3 class="soldOut" v-else-if="detailproduct.stock<=5 && detailproduct.stock>0">Almost Sold Out</h3>
            <h3 v-else-if="detailproduct.stock>5">In Stock</h3>
            <h3>&#x1F6D2;</h3>
            <h3>
                <button class="addToCart btn btn-primary" @click="updateCart(detailproduct,'substract')"
                    :disabled="detailproduct.stock === 0 && detailproduct.quantity===0"
                    :class="{disabledButton: detailproduct.stock===0 && detailproduct.quantity===0}">-
                </button>
                <span>{{detailproduct.quantity}}</span>
                <button class=" addToCart btn btn-primary" @click="updateCart(detailproduct,'add')"
                    :disabled="detailproduct.stock === 0" :class="{disabledButton: detailproduct.stock === 0}">+
                </button>
            </h3>
        </div>
    </div> -->
