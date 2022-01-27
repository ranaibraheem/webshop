let appC = new Vue({
    el: '#appC',
    props: {},
    data: {
        brand: '&#x1D554;&#x1D559;&#x1D556;&#x1D563;&#x1D55C;&#x1D55C;&#x1D560;&#x1D557;&#x1D557;&#x1D55A;&#x1D556;',
        appName: 'Coffee Cups',
        cups: [],
        shoppingCartC: [],
        cup_filter: 'all',
        totalPriceC: 0,
        totalQuantityC: 0,
    },

    created() {
        this.cups = cups
        this.totalPriceC = localStorage.getItem('totalPriceC') !== null ? parseInt(localStorage.getItem('totalPriceC')) : 0;
        this.totalQuantityC = localStorage.getItem('totalQuantityC') !== null ? parseInt(localStorage.getItem('totalQuantityC')) : 0;

        localStorage.getItem('totalQuantityC');
        localStorage.getItem('totalPriceC');
    },

    computed: {
        title() {
            return this.brand + " " + this.appName
        },
        cartC() {
            return this.shoppingCartC = this.cups.filter(cup => cup.quantity > 0)
        },
    },

    methods: {
        sale30() {
            this.cups.forEach(cup => {
                if (cup.onSale30) {
                    cup.newPrice30 = cup.price - (cup.price * 30 / 100)
                } else {
                    cup.price = cup.price
                }
            })
        },
        sale50() {
            this.cups.forEach(cup => {
                if (cup.onSale50) {
                    cup.newPrice50 = cup.price - (cup.price * 50 / 100)
                } else {
                    cup.price = cup.price
                }
            })
        },

        addToCart(cup, updateType) {
            for (let i = 0; i < this.cups.length; i++) {

                if (this.cups[i].id === cup.id) {
                    if (updateType === 'substract') {
                        if (this.cups[i].quantity !== 0) {

                            this.totalQuantityC--

                            this.cups[i].quantity--
                            this.cups[i].stock++;

                            if (this.cups[i].onSale30) {
                                this.totalPriceC -= this.cups[i].newPrice30
                            } else if (this.cups[i].onSale50) {
                                this.totalPriceC -= this.cups[i].newPrice50
                            } else {
                                this.totalPriceC -= this.cups[i].price
                            }
                            this.shoppingCartC = this.cartC
                            localStorage.removeItem('shoppingCartC');
                            localStorage.totalQuantityC = this.totalQuantityC
                            localStorage.totalPriceC = this.totalPriceC
                        }
                    } else {
                        this.cups[i].quantity++
                        this.cups[i].stock--;
                        this.totalQuantityC++;
                        this.shoppingCartC = this.cartC

                        if (this.cups[i].onSale30) {
                            this.totalPriceC += this.cups[i].newPrice30
                        } else if (this.cups[i].onSale50) {
                            this.totalPriceC += this.cups[i].newPrice50
                        } else {
                            this.totalPriceC += this.cups[i].price
                        }

                        localStorage.setItem('totalQuantityC', this.totalQuantityC)
                        localStorage.setItem('totalPriceC', this.totalPriceC)
                    }
                }
            }
        },

        removeAll() {
            this.shoppingCartC.length = this.cartC.length = 0
            this.totalPriceC = 0
            this.totalQuantityC = 0

            localStorage.removeItem('totalQuantityC');
            localStorage.removeItem('totalPriceC');
            localStorage.removeItem('shoppingCartC');

            for (let k = 0; k < this.cups.length; k++) {
                if (this.cups[k].quantity != 0) {
                    this.cups[k].stock += this.cups[k].quantity
                    this.cups[k].quantity = 0
                }
            }
        },

        removeItem(index) {
            this.totalQuantityC -= this.shoppingCartC[index].quantity

            if (this.shoppingCartC[index].onSale30) {
                this.totalPriceC -= this.shoppingCartC[index].newPrice30 * this.shoppingCartC[index].quantity
            } else if (this.shoppingCartC[index].onSale50) {
                this.totalPriceC -= this.shoppingCartC[index].newPrice50 * this.shoppingCartC[index].quantity
            } else {
                this.totalPriceC -= this.shoppingCartC[index].price * this.shoppingCartC[index].quantity
            }

            this.shoppingCartC[index].stock += this.shoppingCartC[index].quantity
            this.shoppingCartC[index].quantity = 0
            this.shoppingCartC.splice(index, 1)

            localStorage.totalQuantityC = this.totalQuantityC
            localStorage.totalPriceC = this.totalPriceC
        },

        filterCup() {
            if (this.cup_filter == 'all') {
                this.cups.forEach(element => {
                    element.show = true;
                });
            } else {
                this.cups.forEach(element => {
                    element.show = element.category != this.cup_filter ? false : true;
                });
            }
        },
    },

    mounted() {
        if (localStorage.shoppingCartC) {
            this.shoppingCartC = JSON.parse(localStorage.shoppingCartC);
        }
        this.cups.forEach(cupItem => {
            this.shoppingCartC.forEach(cartItem => {
                if (cupItem.id === cartItem.id) {
                    cupItem.quantity = cartItem.quantity
                    cupItem.stock = cartItem.stock
                }
            })
        })
        this.$on('update-cart', (cup, updateType) => {
            this.addToCart(cup, updateType)
        })
        this.$on('remove', () => {
            this.removeAll()
        })
        this.$on('remove-item', (index) => {
            this.removeItem(index)
        })
    },

    watch: {
        shoppingCartC: {
            handler(newUpdate) {
                localStorage.shoppingCartC = JSON.stringify(newUpdate);
            },
            deep: true
        },
    },
})

Vue.config.devtools = true
Vue.config.productionTip = false