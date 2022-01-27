Vue.component('detailm', {
    data() {
        return {
            machineItems: [],
            imagePath: '/assets/images/webshop/',
            detailmachine: {},
            machine: {},
        }
    },

    props:{
    },

    created() {
        this.machineItems = machines;
        this.detailmachine = this.machine;
        bus.$on('detail-machine', machine => this.detailmachine = machine);
    },

    mounted() {
    },

    methods: {
        updateCart(machine, updateType) {
            this.$root.$emit('update-cart', machine, updateType)
        },
    },

    template: `
<section>
    <div class="products block">
        <img :src="imagePath + detailmachine.image" class="col-5">
        <div class="col-5" id="detail">
            <h2> {{detailmachine.name}} </h2>
            <h2> {{detailmachine.machineNum}} </h2>
            <h2> {{detailmachine.text}}</h2>
            <h2 v-if="detailmachine.onSale30"><b>Sale 30%</b>
                <span class="onSale">{{detailmachine.price}}$</span><br>
                <span class="newPrice30"> New Price: <b>{{detailmachine.newPrice30}}$</b></span>
            </h2>
            <h2 v-else-if="detailmachine.onSale50"><b>Sale 50%</b>
                <span class="onSale">{{detailmachine.price}}$</span><br>
                <span class="newPrice50"> New Price: <b>{{detailmachine.newPrice50}}$</b></span>
            </h2>
            <h2 v-else>Price: {{detailmachine.price}}$</h2>
            <h2 class="soldOut" v-if="detailmachine.stock===0">Sold Out</h2>
            <h2 class="soldOut" v-else-if="detailmachine.stock<=5 && detailmachine.stock>0">Almost Sold Out</h2>
            <h2 v-else-if="detailmachine.stock>5">In Stock</h2>
            <h2>&#x1F6D2;</h2>
            <h2>
                <button class="addToCart btn btn-primary" @click="updateCart(detailmachine,'substract')"
                    :disabled="detailmachine.stock === 0 && detailmachine.quantity===0"
                    :class="{disabledButton: detailmachine.stock===0 && detailmachine.quantity===0}">-
                </button>
                <span>{{detailmachine.quantity}}</span>
                <button class=" addToCart btn btn-primary" @click="updateCart(detailmachine,'add')"
                    :disabled="detailmachine.stock === 0" :class="{disabledButton: detailmachine.stock === 0}">+
                </button>
            </h2>
        </div>
    </div>
</section>
    `,
})