<header>
    <h2>
        <div v-html="brand">{{brand}}</div>
    </h2>
    <shopping ref="shoppingComponent" :cart="cart" :shopping-cart="shoppingCart" :total-quantity="totalQuantity"
        :total-price="totalPrice":cart-b="cartB" :shopping-cart-b="shoppingCartB"
        :total-quantity-b="totalQuantityB" :total-price-b="totalPriceB" :cart-c="cartC" :shopping-cart-c="shoppingCartC"
        :total-quantity-c="totalQuantityC" :total-price-c="totalPriceC">
    </shopping>
    <div class="col-md-2 text-right pr-4">
        <a href="logout">Uitloggen</a>
        <div><?= fullNameFromSession() ?></div>
    </div>
</header>