// Vue.component('product', {
//     data: function () {
//         return {

//         }

//     },


//     props: {
//         machine_data: {},
//     },
//     template: 
//     `    <section class="products block">
//     <div class="card container-fluid col-md-5" v-for="machine in machines" :key="machine.id">
//         <a :href="imagePath+machine_data.image"> <img :src="imagePath+machine_data.image" class="card-img-top"
//                 :alt="machine_data.alt"></a>
//         <div class="card-body">
//             <h5>{{machine_data.name}}</h5>
//             <h5>{{machine_data.machineNum}}</h5>
//             <p class="card-text">{{machine_data.text}}</p>
//             <p>Price: {{machine_data.price}}$</p>
//             <p class="soldOut" v-if="machine_data.stock===0">Sold Out</p>
//             <p class="soldOut" v-else-if="machine_data.stock<=5 && machine_data.stock>0">Almost Sold Out</p>
//             <p v-else-if="machine_data.stock>5">In Stock</p>
//             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart"
//                 viewBox="0 0 16 16">
//                 <path
//                     d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
//             </svg>
//             <button class="addToCart btn btn-primary" @click="updateCart(machine,'substract')"
//                 :disabled="machine_data.stock === 0 && machine_data.quantity===0"
//                 :class="{disabledButton: machine_data.stock===0 && machine_data.quantity===0}">-</button>
//             <span>{{machine_data.quantity}}</span>
//             <button class=" addToCart btn btn-primary" @click="updateCart(machine,'add')"
//                 :disabled="machine_data.stock === 0" :class="{disabledButton: machine_data.stock===0}">+</button>
//         </div>
//     </div>
// </section>
// `

// })



// `<div>
//         <a :href="imagePath+machine_data.image"> <img :src="imagePath+machine_data.image" class="card-img-top"
//                 :alt="machine_data.alt"></a>
//         <div class="card-body">
        
//             <h5>{{machine_data.name}} </h5>
//             <h5>{{machine_data.machineNum}}</h5>
//             <p class="card-text">{{machine_data.text}}</p>
//             <p>Price: {{machine_data.price}}$</p>
//             <p class="soldOut"> Almost Sold Out</p>
//             <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart"
//                 viewBox="0 0 16 16">
//                 <path
//                     d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
//             </svg>
//             <button :product_id="machine_data.id" class="addToCart btn btn-primary" :disabled="machine_data.stock === 0"
//                 @click="addToCart(fruit_data.id)">Add to Cart</button>
//         </div>
//     </div>`



