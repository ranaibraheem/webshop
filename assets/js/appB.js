let appB = new Vue({
    el: '#appB',
    props: {},
    data: {
        brand: '&#x1D554;&#x1D559;&#x1D556;&#x1D563;&#x1D55C;&#x1D55C;&#x1D560;&#x1D557;&#x1D557;&#x1D55A;&#x1D556;',
        appName: 'Coffee Beans',
        beans: [],
        shoppingCartB: [],
        bean_filter: 'all',
        totalPriceB: 0,
        totalQuantityB: 0,
    },

    created() {
        this.beans = beans
        // this.shoppingCart = this.cart
        this.totalPriceB = localStorage.getItem('totalPriceB') !== null ? parseInt(localStorage.getItem('totalPriceB')) : 0;
        this.totalQuantityB = localStorage.getItem('totalQuantityB') !== null ? parseInt(localStorage.getItem('totalQuantityB')) : 0;

        localStorage.getItem('totalQuantityB');
        localStorage.getItem('totalPriceB');
    },

    computed: {
        title() {
            return this.brand + " " + this.appName
        },
        cartB() {
            return this.shoppingCartB = this.beans.filter(bean => bean.quantity > 0)
        },
    },

    methods: {
        sale30() {
            this.beans.forEach(bean => {
                if (bean.onSale30) {
                    bean.newPrice30 = bean.price - (bean.price * 30 / 100)
                } else {
                    bean.price = bean.price
                }
            })
        },
        sale50() {
            this.beans.forEach(bean => {
                if (bean.onSale50) {
                    bean.newPrice50 = bean.price - (bean.price * 50 / 100)
                } else {
                    bean.price = bean.price
                }
            })
        },

        addToCart(bean, updateType) {
            for (let i = 0; i < this.beans.length; i++) {

                if (this.beans[i].id === bean.id) {
                    if (updateType === 'substract') {
                        if (this.beans[i].quantity !== 0) {

                            this.totalQuantityB--

                            this.beans[i].quantity--
                            this.beans[i].stock++;

                            if (this.beans[i].onSale30) {
                                this.totalPriceB -= this.beans[i].newPrice30
                            } else if (this.beans[i].onSale50) {
                                this.totalPriceB -= this.beans[i].newPrice50
                            } else {
                                this.totalPriceB -= this.beans[i].price

                            }
                            this.shoppingCartB = this.cartB
                            localStorage.removeItem('shoppingCartB');
                            localStorage.totalQuantityB = this.totalQuantityB
                            localStorage.totalPriceB = this.totalPriceB
                        }
                    } else {
                        this.beans[i].quantity++
                        this.beans[i].stock--;
                        this.totalQuantityB++;
                        this.shoppingCartB = this.cartB

                        if (beans[i].onSale30) {
                            this.totalPriceB += this.beans[i].newPrice30
                        } else if (beans[i].onSale50) {
                            this.totalPriceB += this.beans[i].newPrice50
                        } else {
                            this.totalPriceB += this.beans[i].price
                        }

                        localStorage.setItem('totalQuantityB', this.totalQuantityB)
                        localStorage.setItem('totalPriceB', this.totalPriceB)
                    }
                }
            }
        },

        removeAll() {
            this.shoppingCartB.length = this.cartB.length = 0
            this.totalPriceB = 0
            this.totalQuantityB = 0

            localStorage.removeItem('totalQuantityB');
            localStorage.removeItem('totalPriceB');
            localStorage.removeItem('shoppingCartB');

            for (let k = 0; k < this.beans.length; k++) {
                if (this.beans[k].quantity != 0) {
                    this.beans[k].stock += this.beans[k].quantity
                    this.beans[k].quantity = 0
                }
            }
        },

        removeItem(index) {
            this.totalQuantityB -= this.shoppingCartB[index].quantity

            if (this.shoppingCartB[index].onSale30) {
                this.totalPriceB -= this.shoppingCartB[index].newPrice30 * this.shoppingCartB[index].quantity
            } else if (this.shoppingCartB[index].onSale50) {
                this.totalPriceB -= this.shoppingCartB[index].newPrice50 * this.shoppingCartB[index].quantity
            } else {
                this.totalPriceB -= this.shoppingCartB[index].price * this.shoppingCartB[index].quantity

            }

            this.shoppingCartB[index].stock += this.shoppingCartB[index].quantity
            this.shoppingCartB[index].quantity = 0
            this.shoppingCartB.splice(index, 1)

            localStorage.totalQuantityB = this.totalQuantityB
            localStorage.totalPriceB = this.totalPriceB
        },

        filterBean() {
            if (this.bean_filter == 'all') {
                this.beans.forEach(element => {
                    element.show = true;
                });
            } else {
                this.beans.forEach(element => {
                    element.show = element.category != this.bean_filter ? false : true;
                });
            }
        },
    },

    mounted() {
        if (localStorage.shoppingCartB) {
            this.shoppingCartB = JSON.parse(localStorage.shoppingCartB);
        }
        this.beans.forEach(beanItem => {
            this.shoppingCartB.forEach(cartItem => {
                if (beanItem.id === cartItem.id) {
                    beanItem.quantity = cartItem.quantity
                    beanItem.stock = cartItem.stock
                }
            })
        })
        this.$on('update-cart', (bean, updateType) => {
            this.addToCart(bean, updateType)
        })
        this.$on('remove', () => {
            this.removeAll()
        })
        this.$on('remove-item', (index) => {
            this.removeItem(index)
        })

    },

    watch: {
        shoppingCartB: {
            handler(newUpdate) {
                localStorage.shoppingCartB = JSON.stringify(newUpdate);
            },
            deep: true
        },
    },
})

Vue.config.devtools = true
Vue.config.productionTip = false