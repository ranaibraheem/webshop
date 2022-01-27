Vue.component('shopping', {
    data() {
        return {
            machineItems: [],
        }
    },
    props: {
        shoppingCart: {
            type: Array,
        },
        totalQuantity: {
            type: Number,
            default: 0,
        },
        totalPrice: {
            type: Number,
            default: 0,
        },
    },

    created() {
        this.machineItems = machines;
    },

    methods: {
        remove() {
            this.$root.$emit('remove')
        },
        removeMachine(index) {
            this.$root.$emit('remove-machine', index)
        },

    },

    template: `            
<span>
    <button type="button" class="btn btn-primary position-relative" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        <span>&#x1F6D2;<span>
        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            <div id=cartButton>
                <div class="cart">
                    <span class="total-quantity">{{totalQuantity}}</span>
                </div>
            </div>
        </span>
    </button>
    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div id="cartBorder" class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Shopping Cart:</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                    </button>
                </div>
                <hr>
                <div class="modal-body">
                    <h6>Cart Items:</h6>
                    <div id="border">
                        <ol id="shoppingCart">
                            <li v-for="(machine, index) in shoppingCart" :key="machine.id" >
                                <span id="shopping">Name:</span> {{machine.name}}<br> 
                                <span id="shopping">Quantity:</span>({{machine.quantity}})<br>
                                <span id="shopping">Price:</span>
                                <span v-if="machine.onSale30">
                                    <span class="newPrice30"> <b>$ {{(machine.price - (machine.price * 30 / 100))*machine.quantity}}</b>
                                        <span id="saleBorder">Sale 30%</span>
                                    </span>
                                </span>
                                <span v-else-if="machine.onSale50">
                                    <span class="newPrice50"> <b>$ {{(machine.price - (machine.price * 50 / 100))*machine.quantity}}</b>
                                        <span id="saleBorder"> Sale 50%</span>
                                    </span>
                                </span>
                                <span v-else><b>$ {{machine.price*machine.quantity}}</b></span><br>
                                <span>
                                    <span id="shopping">Delete:</span>
                                        <i class="fa fa-trash-o" id="deletBtn" @click=" removeMachine(index)"></i>
                                    </span><hr>
                            </li>
                        </ol>
                        <ul id="shoppingCart">
                            <li> <span id="shopping">Total Price:</span>
                                <span><b>$ {{totalPrice}}</b></span>
                            </li>
                            <li><span id="shopping">Remove All:</span>
                                <i class="fa fa-trash-o" id="deletBtn" @click="remove()"></i>
                            </li>
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