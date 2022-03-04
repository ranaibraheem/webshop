<header>
    <h2>
        <div v-html="brand">{{brand}}</div>
        <img src="/public/images/favicon.ico">

    </h2>
    <shopping ref="shoppingComponent" :cart="cart" :shopping-cart="shoppingCart" :total-quantity="totalQuantity"
        :total-price="totalPrice">
    </shopping>
    <!-- <a href="logout" class="btn btn-primary">Login/Logout</a><?= fullNameFromSession() ?> -->
</header>