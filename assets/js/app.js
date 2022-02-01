var app = new Vue({
	el: '#app',
	props: {
	},
	data: {
		brand: '&#x1D554;&#x1D559;&#x1D556;&#x1D563;&#x1D55C;&#x1D55C;&#x1D560;&#x1D557;&#x1D557;&#x1D55A;&#x1D556;',
		appName: 'Coffee Products',
		shoppingCart: [],
		shoppingCartB: [],
		shoppingCartC: [],
		products:[],
		productsb:[],
		productsc:[],
		product_filter: 'all',
		productb_filter: 'all',
		productc_filter: 'all',
		filters :'all',
		totalPrice: 0,
		totalQuantity: 0,
		totalPriceB: 0,
        totalQuantityB: 0,
		totalPriceC: 0,
        totalQuantityC: 0,
		detailproduct:{}
	},

	created() {
		this.products = machines;
		this.productsb = beans;
		this.productsc = cups;

		this.totalPrice = localStorage.getItem('totalPrice') !== null ? parseInt(localStorage.getItem('totalPrice')) : 0;
		this.totalQuantity = localStorage.getItem('totalQuantity') !== null ? parseInt(localStorage.getItem('totalQuantity')) : 0;

		this.totalPriceB = localStorage.getItem('totalPriceB') !== null ? parseInt(localStorage.getItem('totalPriceB')) : 0;
        this.totalQuantityB = localStorage.getItem('totalQuantityB') !== null ? parseInt(localStorage.getItem('totalQuantityB')) : 0;

		this.totalPriceC = localStorage.getItem('totalPriceC') !== null ? parseInt(localStorage.getItem('totalPriceC')) : 0;
        this.totalQuantityC = localStorage.getItem('totalQuantityC') !== null ? parseInt(localStorage.getItem('totalQuantityC')) : 0;

		localStorage.getItem('totalQuantity');
		localStorage.getItem('totalPrice');

		localStorage.getItem('totalQuantityB');
        localStorage.getItem('totalPriceB');

		localStorage.getItem('totalQuantityC');
        localStorage.getItem('totalPriceC');
	},

	computed: {
		title() {
			return this.brand + " " + this.appName
		},
		cart() {
			return this.shoppingCart = this.products.filter(product => product.quantity > 0)
		},
		cartB() {
            return this.shoppingCartB = this.productsb.filter(productb => productb.quantity > 0)
        },
		cartC() {
            return this.shoppingCartC = this.productsc.filter(productc => productc.quantity > 0)
        },

	},

	methods: {

		sale30() {
			this.products.forEach(product => {
				if (product.onSale30) {
					product.newPrice30 = product.price - (product.price * 30 / 100)
				} else {
					product.price = product.price
				}
			})
		},
		saleb30() {
            this.productsb.forEach(productb => {
                if (productb.onSale30) {
                    productb.newPrice30 = productb.price - (productb.price * 30 / 100)
                } else {
                    productb.price = productb.price
                }
            })
        },
		salec30() {
            this.productsc.forEach(productc => {
                if (productc.onSale30) {
                    productc.newPrice30 = productc.price - (productc.price * 30 / 100)
                } else {
                    productc.price = productc.price
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
		saleb50() {
            this.productsb.forEach(productb => {
                if (productb.onSale50) {
                    productb.newPrice50 = productb.price - (productb.price * 50 / 100)
                } else {
                    productb.price = productb.price
                }
            })
        },
		salec50() {
            this.productsc.forEach(productc => {
                if (productc.onSale50) {
                    productc.newPrice50 = productc.price - (productc.price * 50 / 100)
                } else {
                    productc.price = productc.price
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
		addToCartb(productb, updateType) {
            for (let i = 0; i < this.productsb.length; i++) {

                if (this.productsb[i].id === productb.id) {
                    if (updateType === 'substract') {
                        if (this.productsb[i].quantity !== 0) {

                            this.totalQuantityB--

                            this.productsb[i].quantity--
                            this.productsb[i].stock++;

                            if (this.productsb[i].onSale30) {
                                this.totalPriceB -= this.productsb[i].newPrice30
                            } else if (this.productsb[i].onSale50) {
                                this.totalPriceB -= this.productsb[i].newPrice50
                            } else {
                                this.totalPriceB -= this.productsb[i].price
                            }
                            this.shoppingCartB = this.cartB
                            localStorage.removeItem('shoppingCartB');
                            localStorage.totalQuantityB = this.totalQuantityB
                            localStorage.totalPriceB = this.totalPriceB
                        }
                    } else {
                        this.productsb[i].quantity++
                        this.productsb[i].stock--;
                        this.totalQuantityB++;
                        this.shoppingCartB = this.cartB

                        if (this.productsb[i].onSale30) {
                            this.totalPriceB += this.productsb[i].newPrice30
                        } else if (this.productsb[i].onSale50) {
                            this.totalPriceB += this.productsb[i].newPrice50
                        } else {
                            this.totalPriceB += this.productsb[i].price
                        }

                        localStorage.setItem('totalQuantityB', this.totalQuantityB)
                        localStorage.setItem('totalPriceB', this.totalPriceB)
                    }
                }
            }
        },

		addToCartc(productc, updateType) {
            for (let i = 0; i < this.productsc.length; i++) {

                if (this.productsc[i].id === productc.id) {
                    if (updateType === 'substract') {
                        if (this.productsc[i].quantity !== 0) {

                            this.totalQuantityC--

                            this.productsc[i].quantity--
                            this.productsc[i].stock++;

                            if (this.productsc[i].onSale30) {
                                this.totalPriceC -= this.productsc[i].newPrice30
                            } else if (this.productsc[i].onSale50) {
                                this.totalPriceC -= this.productsc[i].newPrice50
                            } else {
                                this.totalPriceC -= this.productsc[i].price
                            }
                            this.shoppingCartC = this.cartC
                            localStorage.removeItem('shoppingCartC');
                            localStorage.totalQuantityC = this.totalQuantityC
                            localStorage.totalPriceC = this.totalPriceC
                        }
                    } else {
                        this.productsc[i].quantity++
                        this.productsc[i].stock--;
                        this.totalQuantityC++;
                        this.shoppingCartC = this.cartC

                        if (this.productsc[i].onSale30) {
                            this.totalPriceC += this.productsc[i].newPrice30
                        } else if (this.productsc[i].onSale50) {
                            this.totalPriceC += this.productsc[i].newPrice50
                        } else {
                            this.totalPriceC += this.productsc[i].price
                        }

                        localStorage.setItem('totalQuantityC', this.totalQuantityC)
                        localStorage.setItem('totalPriceC', this.totalPriceC)
                    }
                }
            }
        },

		removeAll() {
			this.shoppingCart.length = this.cart.length = 0
			this.totalPrice = 0
			this.totalQuantity = 0

			this.shoppingCartB.length = this.cartB.length = 0
            this.totalPriceB = 0
            this.totalQuantityB = 0

			this.shoppingCartC.length = this.cartC.length = 0
            this.totalPriceC = 0
            this.totalQuantityC = 0

			localStorage.removeItem('totalQuantity');
			localStorage.removeItem('totalPrice');
			localStorage.removeItem('shoppingCart');

			localStorage.removeItem('totalQuantityB');
            localStorage.removeItem('totalPriceB');
            localStorage.removeItem('shoppingCartB');

			localStorage.removeItem('totalQuantityC');
            localStorage.removeItem('totalPriceC');
            localStorage.removeItem('shoppingCartC');

			for (let k = 0; k < this.products.length; k++) {
				if (this.products[k].quantity != 0) {
					this.products[k].stock += this.products[k].quantity
					this.products[k].quantity = 0
				}
			}
			for (let k = 0; k < this.productsb.length; k++) {
				if (this.productsb[k].quantity != 0) {
					this.productsb[k].stock += this.productsb[k].quantity
					this.productsb[k].quantity = 0
				}
			}
			for (let k = 0; k < this.productsc.length; k++) {
                if (this.productsc[k].quantity != 0) {
                    this.productsc[k].stock += this.productsc[k].quantity
                    this.productsc[k].quantity = 0
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
		removeItemb(index) {
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
		removeItemc(index) {
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

		filter(){
			if (this.filters == 'all') {
				this.products.forEach(elementm => {
					elementm.show = true;
				});
				this.productsb.forEach(elementb => {
					elementb.show = true;
				});
				this.productsc.forEach(elementc => {
					elementc.show = true;
				});
			}else if (this.filters == 'machines'){
				this.products.forEach(element =>{
					element.show = true;
				})
				this.productsb.forEach(el => {
					el.show =false;
				});
				this.productsc.forEach(ele => {
					ele.show =false;
				})

			}else if (this.filters == 'beans'){
				this.productsb.forEach(elb =>{
					elb.show = true;
				})
				this.products.forEach(e => {
					e.show =false;
				});
				this.productsc.forEach(ec => {
					ec.show =false;
				})
			}else if (this.filters == 'cups'){
				this.productsc.forEach(element =>{
					element.show = true;
				})
				this.products.forEach(el => {
					el.show =false;
				});
				this.productsb.forEach(ele => {
					ele.show =false;
				})
			}
		},

		filterProduct() {
			if (this.product_filter == 'all') {
				this.products.forEach(element => {
					element.show = true;
				});
				this.productsb.forEach(el => {
					el.show =false;
				});
				this.productsc.forEach(ele => {
					ele.show =false;
				})

			} else {
				this.products.forEach(element => {
					element.show = element.category != this.product_filter ? false : true;
				});
				this.productsb.forEach(el => {
					el.show =false;
				});
				this.productsc.forEach(ele => {
					ele.show =false;
				})
			}
		},
		filterProductb() {
            if (this.productb_filter == 'all') {
                this.productsb.forEach(element => {
                    element.show = true;
                });
            } else {
                this.productsb.forEach(element => {
                    element.show = element.category != this.productb_filter ? false : true;
                });
            }
        },
		filterProductc() {
            if (this.productc_filter == 'all') {
                this.productsc.forEach(element => {
                    element.show = true;
                });
            } else {
                this.productsc.forEach(element => {
                    element.show = element.category != this.productc_filter ? false : true;
                });
            }
        },

        detailProduct(product){
			for (let d = 0; d < this.products.length; d++) {
				if(this.products[d].id === product.id){
					this.detailproducts.push(this.products[d]);
				}
			}
		},

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
		if (localStorage.shoppingCartB) {	
			this.shoppingCartB = JSON.parse(localStorage.shoppingCartB);
		}
		this.productsb.forEach(productItemb => {
			this.shoppingCartB.forEach(cartItemb => {
				if (productItemb.id === cartItemb.id) {
					productItemb.quantity = cartItemb.quantity
					productItemb.stock = cartItemb.stock
				}
			})
		})
		if (localStorage.shoppingCartC) {
            this.shoppingCartC = JSON.parse(localStorage.shoppingCartC);
        }
        this.productsc.forEach(productItemc => {
            this.shoppingCartC.forEach(cartItemc => {
                if (productItemc.id === cartItemc.id) {
                    productItemc.quantity = cartItemc.quantity
                    productItemc.stock = cartItemc.stock
                }
            })
        })


		this.$on('update-cart', (product, updateType) => {
			this.addToCart(product, updateType)
		})
		this.$on('update-cartb', (productb, updateType) => {
			this.addToCartb(productb, updateType)
		})
		this.$on('update-cartc', (productc, updateType) => {
            this.addToCartc(productc, updateType)
        })

		this.$on('remove', () => {
			this.removeAll()
		})

		this.$on('remove-product', (index) => {
			this.removeItem(index)
		})
		this.$on('remove-productb', (index) => {
            this.removeItemb(index)
        })
		this.$on('remove-productc', (index) => {
            this.removeItemc(index)
        })

		this.$on('detail-product', (product) => {
			this.detailm(product)
		})
	},

	watch: {
		shoppingCartB: {
            handler(newUpdateb) {
                localStorage.shoppingCartB = JSON.stringify(newUpdateb);
            },
            deep: true
        },

		shoppingCart: {
			handler(newUpdate) {
				localStorage.shoppingCart = JSON.stringify(newUpdate);
			},
			deep: true
		},

        shoppingCartC: {
            handler(newUpdatec) {
                localStorage.shoppingCartC = JSON.stringify(newUpdatec);
            },
            deep: true
        },
    },
})

Vue.config.devtools = true
Vue.config.productionTip = false