Vue.component('products', {
    data() {
        return {
            machineItems: [],
            imagePath: '/assets/images/webshop/',
            detailPath: '/?page=detail-machine',
        }
    },

    props: {
        machine: Object,
        detailmachine: Object,
    },

    created() {
        this.machineItems = machines;
    },

    methods: {
        updateCart(machine, updateType) {
            this.$root.$emit('update-cart', machine, updateType)
        },
        detailMachine() {
            this.machines.forEach(machine => {
                this.detailmachine = machine;
            });
            bus.$emit('detail-machine', machine);
        },
    },

    template: `
<section class="products block">
    <div class="card container-fluid col-md-5" v-for="machine in machineItems" :key="machine.id" v-show="machine.show">
        <a @click="detailMachine()" :href="detailPath">
            <img :src="imagePath+machine.image" class="card-img-top" :alt="machine.alt" >
        </a>
        <div class="card-body">
            <h5>{{machine.name}}</h5>
            <h5>{{machine.machineNum}}</h5>
            <p class="card-text">{{machine.text}}</p>
            <p v-if="machine.onSale30"><b>Sale 30%</b> 
                <span class="onSale">{{machine.price}}$</span><br>
                <span class="newPrice30"> New Price: <b>{{machine.newPrice30}}$</b></span>
            </p>
            <p v-else-if="machine.onSale50"><b>Sale 50%</b>
                <span class="onSale">{{machine.price}}$</span><br>
                <span class="newPrice50"> New Price: <b>{{machine.newPrice50}}$</b></span>
            </p>
            <p v-else>Price: {{machine.price}}$</p>
            <p class="soldOut" v-if="machine.stock===0">Sold Out</p>
            <p class="soldOut" v-else-if="machine.stock<=5 && machine.stock>0">Almost Sold Out</p>
            <p v-else-if="machine.stock>5">In Stock</p>
            <span>&#x1F6D2;</span>
            <button class="addToCart btn btn-primary" @click="updateCart(machine,'substract')"
                :disabled="machine.stock === 0 && machine.quantity===0"
                :class="{disabledButton: machine.stock===0 && machine.quantity===0}">-
            </button>
            <span>{{machine.quantity}}</span>
            <button class=" addToCart btn btn-primary" @click="updateCart(machine,'add')"
                :disabled="machine.stock === 0" :class="{disabledButton: machine.stock === 0}">+
            </button>
        </div>
    </div>
</section>
    `,
})