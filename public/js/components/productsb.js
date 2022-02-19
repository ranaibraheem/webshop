Vue.component('productsb', {
    data() {
        return {
            productsb: [],
            imagePath: '/public/images/webshop/',
        }
    },
    props: {
    },

    created() {
        let self = this;
        this.productsb = beans;

        // Get all products calling function in controller (Ajax call)
        axios({
            method: 'GET',
            url: 'home/products',
            headers: {
                "X-Requested-With": "XMLHttpRequest"
            }
        }).then(function(response) {
            self.beans = response.data.beans;
        }).catch(function(response) {

        })
    },



    methods: {
        updateCartb(productb, updateType) {
            this.$root.$emit('update-cartb', productb, updateType)
        },

    },

    template: `
<section class="products block">
    <div class="card container-fluid col-md-5" v-for="productb in productsb" :key="productb.id" v-show="productb.show">
        <a :href="imagePath + productb.image">
            <img :src="imagePath+productb.image" class="card-img-top" :alt="productb.alt">
        </a>
        <div class="card-body">
            <h5>{{productb.name}}</h5><hr>
            <p class="card-text">{{productb.text}}</p><hr>
            <p class="cart-text">Weight: {{productb.weight}} Kg<p>
            <p v-if="productb.onSale30"><b>Sale 30%</b>
                <span class="onSale">{{productb.price}}$</span><br>
                <span class="newPrice30"> New Price: <b>{{productb.newPrice30}}$</b></span>
            </p>
            <p v-else-if="productb.onSale50"><b>Sale 50%</b>
                <span class="onSale">{{productb.price}}$</span><br>
                <span class="newPrice50"> New Price: <b>{{productb.newPrice50}}$</b></span>
            </p>
            <p v-else>Price: {{productb.price}}$</p>
            <p class="soldOut" v-if="productb.stock===0">Sold Out</p>
            <p class="soldOut" v-else-if="productb.stock<=5 && productb.stock>0">Almost Sold Out</p>
            <p v-else-if="productb.stock>5">In Stock</p>
            <span>&#x1F6D2;</span>
            <button class="addToCart btn btn-primary" @click="updateCartb(productb,'substract')"
                :disabled="productb.stock === 0 && productb.quantity===0"
                :class="{disabledButton: productb.stock===0 && productb.quantity===0}">-
            </button>
            <span>{{productb.quantity}}</span>
            <button class=" addToCart btn btn-primary" @click="updateCartb(productb,'add')"
                :disabled="productb.stock === 0" :class="{disabledButton: productb.stock === 0}">+
            </button><hr>
            <a :href="'productsb/' + productb.id">
                <button class="btn btn-primary" style="margin-left:4rem">More Details</button>
            </a>
        </div>
    </div>
</section>
    `,
})