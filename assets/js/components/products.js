Vue.component('products', {
    data() {
        return {
            machineItems: [],
            imagePath: '/assets/images/webshop/',
        }
    },
    props: {},
    created() {
        this.machineItems = machines;
        this.getProducts();
    },
    methods: {
        updateCart(machine, updateType) {
            this.$root.$emit('update-cart', machine, updateType)
        },

        getProducts() {
            let self = this;

            axios({
                method: 'GET',
                url: '?page=coffeeMachines&action=getdata',
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                }
            }).then(function(response) {
                self.machines = response.data.machines;
            }).catch(function(error) {

            });
        },

    },

    template: `
    <section class="products block">
    <div class="card container-fluid col-md-5" v-for="machine in machineItems" :key="machine.id" v-show="machine.show">
        <a :href="imagePath + machine.image"> <img :src="imagePath+machine.image" class="card-img-top"
                :alt="machine.alt"></a>
        <div class="card-body">
            <h5>{{machine.name}}</h5>
            <h5>{{machine.machineNum}}</h5>
            <p class="card-text">{{machine.text}}</p>

            <p v-if="machine.onSale30"><b>Sale 30%</b>  <span class="onSale">{{machine.price}}$</span><br><span class="newPrice30"> New Price: <b>{{machine.newPrice30}}$</b></span></p>
            <p v-else-if="machine.onSale50"><b>Sale 50%</b>  <span class="onSale">{{machine.price}}$</span><br><span class="newPrice50"> New Price: <b>{{machine.newPrice50}}$</b></span></p>
            <p v-else>Price: {{machine.price}}$</p>

            <p class="soldOut" v-if="machine.stock===0">Sold Out</p>
            <p class="soldOut" v-else-if="machine.stock<=5 && machine.stock>0">Almost Sold Out</p>
            <p v-else-if="machine.stock>5">In Stock</p>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart"
                viewBox="0 0 16 16">
                <path
                    d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
            </svg>
            <button class="addToCart btn btn-primary" @click="updateCart(machine,'substract')"
                :disabled="machine.stock === 0 && machine.quantity===0"
                :class="{disabledButton: machine.stock===0 && machine.quantity===0}">-</button>
            <span>{{machine.quantity}}</span>
            <button class=" addToCart btn btn-primary" @click="updateCart(machine,'add')"
                :disabled="machine.stock === 0" :class="{disabledButton: machine.stock === 0}">+</button>
        </div>
    </div>
</section>
    `,
})