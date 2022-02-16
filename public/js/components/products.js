Vue.component('products', {
    data() {
        return {
            products:[],
            imagePath: '/public/images/webshop/',
        }
    },

    props: {
    },

    created() {
        this.products = machines;
    },

    // created() {
    //     let self = this;

    //     // Get all products calling function in controller (Ajax call)
    //     axios({
    //         method: 'GET',
    //         url: 'home/products',
    //         headers: {
    //             "X-Requested-With": "XMLHttpRequest"
    //         }
    //     }).then(function(response) {
    //         self.products = response.data.products;
    //     }).catch(function(response) {

    //     })
    // },


    methods: {
        updateCart(product, updateType) {
            this.$root.$emit('update-cart', product, updateType)
        },
    },

    template: `
<section class="products block">
    <div class="card container-fluid col-md-5" v-for="product in products" :key="product.id" v-show="product.show">
        <a :href="imagePath + product.image">
            <img :src="imagePath+product.image" class="card-img-top" :alt="product.alt" >
        </a>
        <div class="card-body">
            <h5>{{product.name}}</h5><hr>
            <p class="card-text">{{productb.text}}</p><hr>
            <p v-if="product.onSale30"><b>Sale 30%</b> 
                <span class="onSale">{{product.price}}$</span><br>
                <span class="newPrice30"> New Price: <b>{{product.newPrice30}}$</b></span>
            </p>
            <p v-else-if="product.onSale50"><b>Sale 50%</b>
                <span class="onSale">{{product.price}}$</span><br>
                <span class="newPrice50"> New Price: <b>{{product.newPrice50}}$</b></span>
            </p>
            <p v-else>Price: {{product.price}}$</p>
            <p class="soldOut" v-if="product.stock===0">Sold Out</p>
            <p class="soldOut" v-else-if="product.stock<=5 && product.stock>0">Almost Sold Out</p>
            <p v-else-if="product.stock>5">In Stock</p>
            <span>&#x1F6D2;</span>
            <button class="addToCart btn btn-primary" @click="updateCart(product,'substract')"
                :disabled="product.stock === 0 && product.quantity===0"
                :class="{disabledButton: product.stock===0 && product.quantity===0}">-
            </button>
            <span>{{product.quantity}}</span>
            <button class=" addToCart btn btn-primary" @click="updateCart(product,'add')"
                :disabled="product.stock === 0" :class="{disabledButton: product.stock === 0}">+
            </button><hr>
            <a :href="'products/' + product.id">
                <button class="btn btn-primary" style="margin-left:4rem">More Details</button>
            </a>
        </div>
    </div>
</section>

    `,
})


 
