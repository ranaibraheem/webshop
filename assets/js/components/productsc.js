Vue.component('productsc', {
    data() {
        return {
            productsc: [],
            imagePath: '/assets/images/webshop/',
        }
    },
    props: {},
    created() {
        this.productsc = cups;
    },
    methods: {
        updateCartc(productc, updateType) {
            this.$root.$emit('update-cartc', productc, updateType)
        },
    },

    template: `
<section class="products block">
    <div class="card container-fluid col-md-5" v-for="productc in productsc" :key="productc.id" v-show="productc.show">
        <a :href="imagePath + productc.image">
            <img :src="imagePath+productc.image" class="card-img-top" :alt="productc.alt">
        </a>
        <div class="card-body">
            <h5>{{productc.name}}</h5><hr>
            <p class="card-text">{{productc.text}}</p><hr>
            <p class="cart-text">Stucks: {{productc.stucks}}<p>
            <p v-if="productc.onSale30"><b>Sale 30%</b>
                <span class="onSale">{{productc.price}}$</span><br>
                <span class="newPrice30"> New Price: <b>{{productc.newPrice30}}$</b></span>
            </p>
            <p v-else-if="productc.onSale50"><b>Sale 50%</b>
                <span class="onSale">{{productc.price}}$</span><br>
                <span class="newPrice50"> New Price: <b>{{productc.newPrice50}}$</b></span>
            </p>
            <p v-else>Price: {{productc.price}}$</p>
            <p class="soldOut" v-if="productc.stock===0">Sold Out</p>
            <p class="soldOut" v-else-if="productc.stock<=5 && productc.stock>0">Almost Sold Out</p>
            <p v-else-if="productc.stock>5">In Stock</p>
            <span>&#x1F6D2;</span>
            <button class="addToCart btn btn-primary" @click="updateCartc(productc,'substract')"
                :disabled="productc.stock === 0 && productc.quantity===0"
                :class="{disabledButton: productc.stock===0 && productc.quantity===0}">-
            </button>
            <span>{{productc.quantity}}</span>
            <button class=" addToCart btn btn-primary" @click="updateCartc(productc,'add')"
                :disabled="productc.stock === 0" :class="{disabledButton: productc.stock === 0}">+
            </button><hr>
            <a>
                <button class="btn btn-primary" style="margin-left:4rem">More Details</button>
            </a>

        </div>
    </div>
</section>
    `,
})