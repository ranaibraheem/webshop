var app = new Vue({
	el: '#app',
	props: {
	},
	data: {
		brand: '&#x1D554;&#x1D559;&#x1D556;&#x1D563;&#x1D55C;&#x1D55C;&#x1D560;&#x1D557;&#x1D557;&#x1D55A;&#x1D556;',
		appName: 'Coffee Products',
		shoppingCart: [],
		products:[],
		product_filter: 'all',
		filters :'all',
		totalPrice: 0,
		totalQuantity: 0,
	},

	created() {
		this.products = machines;

		this.totalPrice = localStorage.getItem('totalPrice') !== null ? parseInt(localStorage.getItem('totalPrice')) : 0;
		this.totalQuantity = localStorage.getItem('totalQuantity') !== null ? parseInt(localStorage.getItem('totalQuantity')) : 0;

		localStorage.getItem('totalQuantity');
		localStorage.getItem('totalPrice');

	},

	computed: {
		title() {
			return this.brand + " " + this.appName
		},
		cart() {
			return this.shoppingCart = this.products.filter(product => product.quantity > 0)
		},
	},

	methods: {
		        /**
         * Adds a new product to the cart or changes the amount of an 
         *  existing product in the cart
         * 
         * @param product (object)
         * @returns void
         */


		sale30() {
			this.products.forEach(product => {
				if (product.onSale30) {
					product.newPrice30 = product.price - (product.price * 30 / 100)
				} else {
					product.price = product.price
				}
			})
		},

		sale50() {
			this.products.forEach(product => {
				if (product.onSale50) {
					product.newPrice50 = product.price - (product.price * 50 / 100)
				} else {
					product.price = product.price
				}
			})
		},

		addToCart(product, updateType) {
			for (let i = 0; i < this.products.length; i++) {

				if (this.products[i].id === product.id) {
					if (updateType === 'substract') {
						if (this.products[i].quantity !== 0) {

							this.totalQuantity--

							this.products[i].quantity--
							this.products[i].stock++;

							if (this.products[i].onSale30) {
								this.totalPrice -= this.products[i].newPrice30
							} else if (this.products[i].onSale50) {
								this.totalPrice -= this.products[i].newPrice50
							} else {
								this.totalPrice -= this.products[i].price
							}
							this.shoppingCart = this.cart
							localStorage.removeItem('shoppingCart');
							localStorage.totalQuantity = this.totalQuantity
							localStorage.totalPrice = this.totalPrice
						}
					} else {
						this.products[i].quantity++
						this.products[i].stock--;
						this.totalQuantity++;
						this.shoppingCart = this.cart

						if (this.products[i].onSale30) {
							this.totalPrice += this.products[i].newPrice30
						} else if (this.products[i].onSale50) {
							this.totalPrice += this.products[i].newPrice50
						} else {
							this.totalPrice += this.products[i].price
						}

						localStorage.setItem('totalQuantity', this.totalQuantity)
						localStorage.setItem('totalPrice', this.totalPrice)
					}
				}
			}
		},


		removeAll() {
			this.shoppingCart.length = this.cart.length = 0
			this.totalPrice = 0
			this.totalQuantity = 0

			localStorage.removeItem('totalQuantity');
			localStorage.removeItem('totalPrice');
			localStorage.removeItem('shoppingCart');

			for (let k = 0; k < this.products.length; k++) {
				if (this.products[k].quantity != 0) {
					this.products[k].stock += this.products[k].quantity
					this.products[k].quantity = 0
				}
			}
		},

		removeItem(index) {
			this.totalQuantity -= this.shoppingCart[index].quantity

			if (this.shoppingCart[index].onSale30) {
				this.totalPrice -= this.shoppingCart[index].newPrice30 * this.shoppingCart[index].quantity
			} else if (this.shoppingCart[index].onSale50) {
				this.totalPrice -= this.shoppingCart[index].newPrice50 * this.shoppingCart[index].quantity
			} else {
				this.totalPrice -= this.shoppingCart[index].price * this.shoppingCart[index].quantity
			}

			this.shoppingCart[index].stock += this.shoppingCart[index].quantity
			this.shoppingCart[index].quantity = 0
			this.shoppingCart.splice(index, 1)

			localStorage.totalQuantity = this.totalQuantity
			localStorage.totalPrice = this.totalPrice
		},


		// filter(){
		// 	if(this.product_filter == 'all') {
		// 		this.products.forEach(element => {
		// 			element.show =true;
		// 		})
		// 	}
		// 	if (this.product_filter == 'machiens') {
		// 		this.products.forEach(element1 => {
		// 			if (!element1.category === 'bigmachine' && element1.category === 'smallmachine'){
		// 				element1.show = false;
		// 			}
		// 		})
		// 	}
		// 		if (this.product_filter == 'beans') {
		// 			this.products.forEach(element2 => {
		// 				if (!element2.category === 'dark' && element2.category === 'medium' && element2.category === 'blond'){
		// 					element2.show = false;
		// 				}
		// 			})
		// 		}

		// 		if (this.product_filter == 'cups') {
		// 			this.products.forEach(element3 => {
		// 				if (!element3.category === 'setCups' && element3.category === 'perstuckCups'){
		// 					element3.show = false;
		// 				}
		// 			})
		// 		} 
		// 	}					

	},

	mounted() {
		if (localStorage.shoppingCart) {	
			this.shoppingCart = JSON.parse(localStorage.shoppingCart);
		}
		this.products.forEach(productItem => {
			this.shoppingCart.forEach(cartItem => {
				if (productItem.id === cartItem.id) {
					productItem.quantity = cartItem.quantity
					productItem.stock = cartItem.stock
				}
			})
		})


		this.$on('update-cart', (product, updateType) => {
			this.addToCart(product, updateType)
		})

		this.$on('remove', () => {
			this.removeAll()
		})

		this.$on('remove-product', (index) => {
			this.removeItem(index)
		})
	},

	watch: {

		shoppingCart: {
			handler(newUpdate) {
				localStorage.shoppingCart = JSON.stringify(newUpdate);
			},
			deep: true
		},
    },
})

Vue.config.devtools = true
Vue.config.productionTip = false