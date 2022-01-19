Vue.component('shoppingb', {
    data() {
        return {
            beanItems: [],
        }
    },
    props: {
        shoppingCartB: {
            type: Array,
        },
        totalQuantityB: {
            type: Number,
            default: 0,
        },
        totalPriceB: {
            type: Number,
            default: 0,
        },
        // method: {
        //     default: 'POST',
        // }

    },

    created() {
        this.beanItems = beans;
    },

    methods: {
        remove() {
            this.$root.$emit('remove')
        },
        removeItem(index) {
            this.$root.$emit('remove-item', index)
        },
        // sentToBackEnd() {
        //     this.$root.$emit('save-cart')
        // }

    },

    template: `            
<span>
    <button type="button" class="btn btn-primary position-relative" data-bs-toggle="modal"
        data-bs-target="#staticBackdrop">
        &#x1F6D2;<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            <div id=cartButton>
                <div class="cart">
                    <span class="total-quantity">{{totalQuantityB}}</span>
                </div>
            </div>
        </span>

    </button>
    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div id="cartBorder" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Shopping Cart:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <hr>

                <div class="modal-body">
                    <h6>Cart Items:</h6>
                    <div id="border">
                        <ol id="shoppingCart">
                        <li v-for="(bean, index) in shoppingCartB" :key="bean.id" >
                            <span id="shopping">Name:</span>
                            {{bean.name}}<br>
                            <span id="shopping">Quantity:</span>
                            ({{bean.quantity}})
                            <br>
                            <span id="shopping">Price:</span>
                            <span v-if="bean.onSale30"> <span class="newPrice30"> <b>$ {{(bean.price - (bean.price * 30 / 100))*bean.quantity}}</b> <span id="saleBorder">Sale 30%</span></span></span>
                            <span v-else-if="bean.onSale50"> <span class="newPrice50"> <b>$ {{(bean.price - (bean.price * 50 / 100))*bean.quantity}}</b> <span id="saleBorder"> Sale 50%</span></span></span>
                            <span v-else><b>$ {{bean.price*bean.quantity}}</b></span>
                            <br>
                            <span><span id="shopping">Delete:</span><i class="fa fa-trash-o" id="deletBtn" @click=" removeItem(index)"></i></span><hr></li>
                        </ol>
                        <ul id="shoppingCart">
                            <li> <span id="shopping">Total Price:</span>
                            <span><b>$ {{totalPriceB}}</b></span>
                            </li>
                            <li><span id="shopping">Remove All:</span><i class="fa fa-trash-o" id="deletBtn"
                                    @click="remove()"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Order</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</span>
`,

})