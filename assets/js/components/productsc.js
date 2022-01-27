Vue.component('productsc', {
    data() {
        return {
            cupsItems: [],
            imagePath: '/assets/images/webshopCups/',
        }
    },
    props: {},
    created() {
        this.cupItems = cups;
    },
    methods: {
        updateCart(cup, updateType) {
            this.$root.$emit('update-cart', cup, updateType)
        },
    },

    template: `
<section class="products block">
    <div class="card container-fluid col-md-5" v-for="cup in cupItems" :key="cup.id" v-show="cup.show">
        <a :href="imagePath + cup.image">
            <img :src="imagePath+cup.image" class="card-img-top" :alt="cup.alt">
        </a>
        <div class="card-body">
            <h5>{{cup.name}}</h5>
            <p class="card-text">{{cup.text}}</p>
            <p class="cart-text">Stucks: {{cup.stucks}}<p>
            <p v-if="cup.onSale30"><b>Sale 30%</b>
                <span class="onSale">{{cup.price}}$</span><br>
                <span class="newPrice30"> New Price: <b>{{cup.newPrice30}}$</b></span>
            </p>
            <p v-else-if="cup.onSale50"><b>Sale 50%</b>
                <span class="onSale">{{cup.price}}$</span><br>
                <span class="newPrice50"> New Price: <b>{{cup.newPrice50}}$</b></span>
            </p>
            <p v-else>Price: {{cup.price}}$</p>
            <p class="soldOut" v-if="cup.stock===0">Sold Out</p>
            <p class="soldOut" v-else-if="cup.stock<=5 && cup.stock>0">Almost Sold Out</p>
            <p v-else-if="cup.stock>5">In Stock</p>
            <span>&#x1F6D2;</span>
            <button class="addToCart btn btn-primary" @click="updateCart(cup,'substract')"
                :disabled="cup.stock === 0 && cup.quantity===0"
                :class="{disabledButton: cup.stock===0 && cup.quantity===0}">-
            </button>
            <span>{{cup.quantity}}</span>
            <button class=" addToCart btn btn-primary" @click="updateCart(cup,'add')"
                :disabled="cup.stock === 0" :class="{disabledButton: cup.stock === 0}">+
            </button>
        </div>
    </div>
</section>
    `,
})