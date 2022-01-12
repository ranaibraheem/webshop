// Set config defaults when creating the instance
// const instance = axios.create();
  
// Alter defaults after instance has been created
// instance.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';



var app = new Vue({
	el: '#app',
	props: {},
	data: {
		brand: '&#x1D554;&#x1D559;&#x1D556;&#x1D563;&#x1D55C;&#x1D55C;&#x1D560;&#x1D557;&#x1D557;&#x1D55A;&#x1D556;',
		appName: 'Coffee Machines',
		machines: [],
		shoppingCart: [],
		machine_filter: 'all',
		totalPrice: 0,
		totalQuantity: 0,
		// axiosInstance: '',
	},

	created() {
		this.machines = machines
		// this.shoppingCart = this.cart
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
			return this.shoppingCart = this.machines.filter(machine => machine.quantity > 0)
		},
	},

	methods: {
		sale30() {
			this.machines.forEach(machine => {
				if (machine.onSale30) {
					machine.newPrice30 = machine.price - (machine.price * 30 / 100)
				} else {
					machine.price = machine.price
				}
			})
		},
		sale50() {
			this.machines.forEach(machine => {
				if (machine.onSale50) {
					machine.newPrice50 = machine.price - (machine.price * 50 / 100)
				} else {
					machine.price = machine.price
				}
			})
		},

		addToCart(machine, updateType) {
			for (let i = 0; i < this.machines.length; i++) {

				if (this.machines[i].id === machine.id) {
					if (updateType === 'substract') {
						if (this.machines[i].quantity !== 0) {

							this.totalQuantity--

							this.machines[i].quantity--
							this.machines[i].stock++;

							if (this.machines[i].onSale30) {
								this.totalPrice -= this.machines[i].newPrice30
							} else if (this.machines[i].onSale50) {
								this.totalPrice -= this.machines[i].newPrice50
							} else {
								this.totalPrice -= this.machines[i].price

							}
							this.shoppingCart = this.cart
							localStorage.removeItem('shoppingCart');
							localStorage.totalQuantity = this.totalQuantity
							localStorage.totalPrice = this.totalPrice
						}
					} else {
						this.machines[i].quantity++
						this.machines[i].stock--;
						this.totalQuantity++;
						this.shoppingCart = this.cart

						if (this.machines[i].onSale30) {
							this.totalPrice += this.machines[i].newPrice30
						} else if (this.machines[i].onSale50) {
							this.totalPrice += this.machines[i].newPrice50
						} else {
							this.totalPrice += this.machines[i].price
						}

						localStorage.setItem('totalQuantity', this.totalQuantity)
						localStorage.setItem('totalPrice', this.totalPrice)
					}
				}
			}
		},

		// saveToBackEnd() {
        //     let form = new FormData

        //     form.append('machines', JSON.stringify(this.machines))
            
        //     // Header must be set to tell back-end that this is an Ajax call
        //     axios.post('?page=coffeeMachines&action=savecard', form, {
        //         headers: {
        //             "X-Requested-With": "XMLHttpRequest"
        //         }
        //     }).then(function (response) {
        //         console.log(response.data)
        //     }).catch(function (error) {

        //     })
        // },


		removeAll() {
			this.shoppingCart.length = this.cart.length = 0
			this.totalPrice = 0
			this.totalQuantity = 0

			localStorage.removeItem('totalQuantity');
			localStorage.removeItem('totalPrice');
			localStorage.removeItem('shoppingCart');

			for (let k = 0; k < this.machines.length; k++) {
				if (this.machines[k].quantity != 0) {
					this.machines[k].stock += this.machines[k].quantity
					this.machines[k].quantity = 0
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

		filterMachine() {
			if (this.machine_filter == 'all') {
				this.machines.forEach(element => {
					element.show = true;
				});
			} else {
				this.machines.forEach(element => {
					element.show = element.category != this.machine_filter ? false : true;
				});
			}
		},
	},

	mounted() {
		if (localStorage.shoppingCart) {
			this.shoppingCart = JSON.parse(localStorage.shoppingCart);
		}
		this.machines.forEach(machineItem => {
			this.shoppingCart.forEach(cartItem => {
				if (machineItem.id === cartItem.id) {
					machineItem.quantity = cartItem.quantity
					machineItem.stock = cartItem.stock
				}
			})
		})
		this.$on('update-cart', (machine, updateType) => {
			this.addToCart(machine, updateType)
		})
		// this.$on('save-cart', () => {
        //     this.saveToBackEnd()
        // })

		this.$on('remove', () => {
			this.removeAll()
		})
		this.$on('remove-machine', (index) => {
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