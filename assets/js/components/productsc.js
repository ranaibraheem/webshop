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
        <a :href="imagePath + cup.image"> <img :src="imagePath+cup.image" class="card-img-top"
                :alt="cup.alt"></a>
        <div class="card-body">
            <h5>{{cup.name}}</h5>
            <p class="card-text">{{cup.text}}</p>
            <p class="cart-text">Stucks: {{cup.stucks}}<p>

            <p v-if="cup.onSale30"><b>Sale 30%</b>  <span class="onSale">{{cup.price}}$</span><br><span class="newPrice30"> New Price: <b>{{cup.newPrice30}}$</b></span></p>
            <p v-else-if="cup.onSale50"><b>Sale 50%</b>  <span class="onSale">{{cup.price}}$</span><br><span class="newPrice50"> New Price: <b>{{cup.newPrice50}}$</b></span></p>
            <p v-else>Price: {{cup.price}}$</p>

            <p class="soldOut" v-if="cup.stock===0">Sold Out</p>
            <p class="soldOut" v-else-if="cup.stock<=5 && cup.stock>0">Almost Sold Out</p>
            <p v-else-if="cup.stock>5">In Stock</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart"
                viewBox="0 0 16 16">
                <path
                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg>
            <button class="addToCart btn btn-primary" @click="updateCart(cup,'substract')"
                :disabled="cup.stock === 0 && cup.quantity===0"
                :class="{disabledButton: cup.stock===0 && cup.quantity===0}">-</button>
            <span>{{cup.quantity}}</span>
            <button class=" addToCart btn btn-primary" @click="updateCart(cup,'add')"
                :disabled="cup.stock === 0" :class="{disabledButton: cup.stock === 0}">+</button>
        </div>
    </div>
</section>
    `,
})