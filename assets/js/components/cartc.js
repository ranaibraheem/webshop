Vue.component('shoppingc', {
    data() {
        return {
            cupItems: [],
        }
    },
    props: {
        shoppingCartC: {
            type: Array,
        },
        totalQuantityC: {
            type: Number,
            default: 0,
        },
        totalPriceC: {
            type: Number,
            default: 0,
        },
    },

    created() {
        this.cupItems = cups;
    },

    methods: {
        remove() {
            this.$root.$emit('remove')
        },
        removeItem(index) {
            this.$root.$emit('remove-item', index)
        },
    },

    template: `            
<span>
    <button type="button" class="btn btn-primary position-relative" data-bs-toggle="modal"
        data-bs-target="#staticBackdrop">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            class="bi bi-cart" viewBox="0 0 16 16">
            <path
                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </svg><span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
            <div id=cartButton>
                <div class="cart">
                    <span class="total-quantity">{{totalQuantityC}}</span>
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
                        <li v-for="(cup, index) in shoppingCartC" :key="cup.id" >
                            <span id="shopping">Name:</span>
                            {{cup.name}}<br>
                            <span id="shopping">Quantity:</span>
                            ({{cup.quantity}})
                            <br>
                            <span id="shopping">Price:</span>
                            <span v-if="cup.onSale30"> <span class="newPrice30"> <b>$ {{(cup.price - (cup.price * 30 / 100))*cup.quantity}}</b> <span id="saleBorder">Sale 30%</span></span></span>
                            <span v-else-if="cup.onSale50"> <span class="newPrice50"> <b>$ {{(cup.price - (cup.price * 50 / 100))*cup.quantity}}</b> <span id="saleBorder"> Sale 50%</span></span></span>
                            <span v-else><b>$ {{cup.price*cup.quantity}}</b></span>
                            <br>
                            <span><span id="shopping">Delete:</span><i class="fa fa-trash-o" id="deletBtn" @click=" removeItem(index)"></i></span><hr></li>
                        </ol>
                        <ul id="shoppingCart">
                            <li> <span id="shopping">Total Price:</span>
                            <span><b>$ {{totalPriceC}}</b></span>
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