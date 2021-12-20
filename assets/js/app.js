let app = new Vue({
    el: '#app',
    data: {

        brand: '&#x1D554;&#x1D559;&#x1D556;&#x1D563;&#x1D55C;&#x1D55C;&#x1D560;&#x1D557;&#x1D557;&#x1D55A;&#x1D556;',
        appName: 'Coffee Machines',
        imagePath: '/assets/images/webshop/',
        totalPrice: {
            type: Number,
            default: 0,
        },
        totalQuantity: {
            type: Number,
            default: 0,
        },
        shoppingCart: [],





        machines: [{
                name: "Simple and tasty",
                image: "simplecoffem.jpg",
                alt: "Photo by mentatdgt from Pexels",
                machineNum: "CM357e",
                text: "A simple coffee machine that makes a tasty coffee, takes no space in the kitchen.",
                price: 45,
                stock: 10,
                id: 1,
                quantity: 0

            },

            {
                name: "Profitional",
                image: "profitionalcoffem.jpg",
                alt: "Photo by Eka Sutrisno from Pexels",
                machineNum: "CM359e",
                text: "For coffee lovers, this is the one you need.",
                price: 899,
                stock: 4,
                id: 2,
                quantity: 0


            },

            {
                name: "Fresh",
                image: "freshcoffeem.jpg",
                alt: "Photo by Matt Jerome Connor from Pexels",
                machineNum: "CM356f",
                text: "Always fresh coffee. With or without milk, so tasty.",
                price: 150,
                stock: 8,
                id: 3,
                quantity: 0


            },

            {
                name: "Filter",
                image: "filtercoffeem.jpg",
                alt: "Photo by Thirdman from Pexels",
                machineNum: "CM352f",
                text: "A wonderfull coffee machine. For people who love filtered coffee, this is the best.",
                price: 200,
                stock: 12,
                id: 4,
                quantity: 0


            },

            {
                name: "Easy",
                image: "easycoffeem.jpg",
                alt: "Photo by Ketut Subiyanto from Pexels",
                machineNum: "CM363f",
                text: "Nice set. Making coffee with this set is an easy and wonderfull experience.",
                price: 450,
                stock: 25,
                id: 5,
                quantity: 0


            },

            {
                name: "Silver",
                image: "silvercoffeem.jpg",
                alt: "Photo by Karolina Grabowska from Pexels",
                text: "A beautifull silver coffee machine, tasty espresso and cappuccino.",
                machineNum: "CM365f",
                price: 130,
                stock: 30,
                id: 6,
                quantity: 0


            },

            {
                name: "Small & Red",
                image: "smallcoffeem.jpg",
                alt: "Photo by Hiago Italo from Pexels",
                machineNum: "CM368e",
                text: "Small but tasty. A beautifull red coffee machine that makes a tasty coffee.",
                price: 99,
                stock: 0,
                id: 7,
                quantity: 0


            },

            {
                name: "Take away and enjoy",
                image: "takeawaycoffeem.jpg",
                alt: "Photo by Taryn Elliott from Pexels",
                machineNum: "CM369e",
                text: "So tasty, so easy to use. Take it with you wherever you go.",
                price: 55,
                stock: 60,
                id: 8,
                quantity: 0


            },

            {
                name: "Handy and tasty",
                image: "handycoffeem.jpg",
                alt: "Photo by Maria Orlova from Pexels",
                machineNum: "CM363e",
                text: "Handy and easy to use coffee machine. Makes very tasty coffee.",
                price: 80,
                stock: 20,
                id: 9,
                quantity: 0


            },

            {
                name: "Super Machine",
                image: "soprofitionalcoffeem.jpg",
                alt: "Photo by Ivan Samkov from Pexels",
                machineNum: "CM370f",
                text: "A profitional coffee machine, for coffee lovers.",
                price: 999,
                stock: 8,
                id: 10,
                quantity: 0


            },

            {
                name: "Everyday Coffee",
                image: "everydaycoffeem.jpg",
                alt: "Photo by Cleyder Duque from Pexels",
                machineNum: "CM373e",
                text: "Tasty coffee for your everyday life, for you, for your guests, for everybody.",
                price: 80,
                stock: 15,
                id: 11,
                quantity: 0


            },

            {
                name: "Modern",
                image: "moderncoffeem.jpg",
                alt: "Photo by Jonathan Borba from Pexels",
                machineNum: "CM377f",
                text: "Modern coffee machine, so beautifull and tasty.",
                price: 199,
                stock: 12,
                id: 12,
                quantity: 0

            },

            {
                name: "Super easy",
                image: "supereasycoffeem.jpg",
                alt: "Photo by Svetlana Ponomareva from Pexels",
                machineNum: "CM371e",
                text: "Super easy coffee machine, for who wants tasty coffee fast.",
                price: 50,
                stock: 22,
                id: 13,
                quantity: 0


            },

            {
                name: "Arabic",
                image: "arabiccoffeem.jpg",
                alt: "Photo by Michaela S. from Pexels",
                machineNum: "CM378e",
                text: "Set for fresh bewed arabic coffee, so tasty, you'll never regret it.",
                price: 80,
                stock: 10,
                id: 14,
                quantity: 0


            },

            {
                name: "Super profitional",
                image: "superprofitionalcoffeem.jpg",
                alt: "Photo by Pavel Danilyuk from Pexels",
                machineNum: "CM380f",
                text: "Super profitional coffee machine. Tasty coffee, it's worth it.",
                price: 1982,
                stock: 2,
                id: 15,
                quantity: 0


            }
        ],
    },


    created() {
        this.totalPrice = localStorage.getItem('totalPrice') !== null ? parseInt(localStorage.getItem('totalPrice')) : 0;
        this.totalQuantity = localStorage.getItem('totalQuantity') !== null ? parseInt(localStorage.getItem('totalQuantity')) : 0;
        // this.totalPrice = parseFloat(localStorage.getItem("totalPrice"))
        // this.totalQuantity = parseInt(localStorage.getItem("totalQuantity"))
        localStorage.getItem('totalQuantity');
        localStorage.getItem('totalPrice');
        localStorage.getItem('shoppingCart');
    },

    computed: {
        title() {
            return this.brand + " " + this.appName
        },
        cart() {
            return this.machines.filter(machine => machine.quantity > 0)
        },
    },


    methods: {
        updateCart(machine, updateType) {
            for (let i = 0; i < this.machines.length; i++) {
                if (this.machines[i].id === machine.id) {
                    if (updateType === 'substract') {
                        if (this.machines[i].quantity !== 0) {
                            this.totalQuantity--
                            this.machines[i].quantity--
                            this.machines[i].stock++;
                            this.totalPrice -= this.machines[i].price
                            this.shoppingCart = this.cart

                            localStorage.removeItem('shoppingCart');
                            localStorage.totalQuantity = this.totalQuantity
                            localStorage.totalPrice = this.totalPrice


                        }
                    } else {
                        this.machines[i].quantity++
                        this.machines[i].stock--;
                        this.totalQuantity++
                        this.totalPrice += this.machines[i].price
                        this.shoppingCart = this.cart

                        localStorage.setItem('totalQuantity', this.totalQuantity)
                        localStorage.setItem('totalPrice', this.totalPrice)

                    }
                    break;
                }

            }
        },


        remove() {
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

        removeMachine(index) {
            this.totalQuantity -= this.shoppingCart[index].quantity
            this.totalPrice -= this.shoppingCart[index].price * this.shoppingCart[index].quantity
            this.shoppingCart[index].stock += this.shoppingCart[index].quantity
            this.shoppingCart[index].quantity = 0
            this.shoppingCart.splice(index, 1)

            localStorage.totalQuantity = this.totalQuantity
            localStorage.totalPrice = this.totalPrice
            localStorage.machines = localStorage.shoppingCart


        }
    },


    watch: {
        shoppingCart: {
            handler(newUpdate) {
                localStorage.shoppingCart = JSON.stringify(newUpdate);
            },
            deep: true

        },
        machines: {
            handler(newUpdate) {
                localStorage.machines = JSON.stringify(newUpdate);
            },
            deep: true

        },

    },
    mounted() {
        if (localStorage.shoppingCart) {
            this.shoppingCart = JSON.parse(localStorage.shoppingCart);
            //if there is data in localStorage it will update the value
        }
        if (localStorage.machines) {
            this.machines = JSON.parse(localStorage.machines);
            //if there is data in localStorage it will update the value
        }
    },

})



Vue.config.devtools = true
Vue.config.productionTip = false







// let app = new Vue({
//     el: '#app',

//     data: {
//         appName: 'Coffee Machines',
//         products: [],
//     },
//     })

// Vue.config.devtools = true
// Vue.config.productionTip = false