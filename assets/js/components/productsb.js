Vue.component('productsb', {
    data() {
        return {
            beanItems: [],
            imagePath: '/assets/images/webshopB/',
        }
    },
    props: {},
    created() {
        this.beanItems = beans;
    },
    methods: {
        updateCart(bean, updateType) {
            this.$root.$emit('update-cart', bean, updateType)
        },
    },

    template: `
<section class="products block">
    <div class="card container-fluid col-md-5" v-for="bean in beanItems" :key="bean.id" v-show="bean.show">
        <a :href="imagePath + bean.image">
            <img :src="imagePath+bean.image" class="card-img-top" :alt="bean.alt">
        </a>
        <div class="card-body">
            <h5>{{bean.name}}</h5>
            <p class="card-text">{{bean.text}}</p>
            <p class="cart-text">Weight: {{bean.weight}} Kg<p>
            <p v-if="bean.onSale30"><b>Sale 30%</b>
                <span class="onSale">{{bean.price}}$</span><br>
                <span class="newPrice30"> New Price: <b>{{bean.newPrice30}}$</b></span>
            </p>
            <p v-else-if="bean.onSale50"><b>Sale 50%</b>
                <span class="onSale">{{bean.price}}$</span><br>
                <span class="newPrice50"> New Price: <b>{{bean.newPrice50}}$</b></span>
            </p>
            <p v-else>Price: {{bean.price}}$</p>
            <p class="soldOut" v-if="bean.stock===0">Sold Out</p>
            <p class="soldOut" v-else-if="bean.stock<=5 && bean.stock>0">Almost Sold Out</p>
            <p v-else-if="bean.stock>5">In Stock</p>
            <span>&#x1F6D2;</span>
            <button class="addToCart btn btn-primary" @click="updateCart(bean,'substract')"
                :disabled="bean.stock === 0 && bean.quantity===0"
                :class="{disabledButton: bean.stock===0 && bean.quantity===0}">-
            </button>
            <span>{{bean.quantity}}</span>
            <button class=" addToCart btn btn-primary" @click="updateCart(bean,'add')"
                :disabled="bean.stock === 0" :class="{disabledButton: bean.stock === 0}">+
            </button>
        </div>
    </div>
</section>
    `,
})