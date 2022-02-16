// Vue.component('detailm', {
//     data() {
//         return {
//             products:[],
//             machines:[],
//             imagePath: '/public/images/webshop/',
//             detailproducts: [],
//         }
//     },

//     props:{
//     },

//     created() {
//         this.products = machines;

//     },

//     mounted() {
//     },

//     methods: {
//         updateCart(product, updateType) {
//             this.$root.$emit('update-cart', product, updateType)
//         },
//         detailProduct(product) {
//             this.$root.$emit('detail-product', product)
//         },

//     },

//     template: `
// <section>
//     <div class="products block">
//         <img :src="imagePath + detailproduct.image" class="col-5"  height="700px">
//         <div class="col-5" id="detail" v-for="detailproduct in detailproducts" :key="detailproduct.id">
//             <h3> {{detailproduct.name}} </h3>
//             <h3> {{detailproduct.machineNum}} </h3><hr>
//             <h4> {{detailproduct.text}}</h4><hr>
//             <h3 v-if="detailproduct.onSale30"><b>Sale 30%</b>
//                 <span class="onSale">{{detailproduct.price}}$</span><br>
//                 <span class="newPrice30"> New Price: <b>{{detailproduct.newPrice30}}$</b></span>
//             </h3>
//             <h3 v-else-if="detailproduct.onSale50"><b>Sale 50%</b>
//                 <span class="onSale">{{detailproduct.price}}$</span><br>
//                 <span class="newPrice50"> New Price: <b>{{detailproduct.newPrice50}}$</b></span>
//             </h3>
//             <h3 v-else>Price: {{detailproduct.price}}$</h3>
//             <h3 class="soldOut" v-if="detailproduct.stock===0">Sold Out</h3>
//             <h3 class="soldOut" v-else-if="detailproduct.stock<=5 && detailproduct.stock>0">Almost Sold Out</h3>
//             <h3 v-else-if="detailproduct.stock>5">In Stock</h3>
//             <h3>&#x1F6D2;</h3>
//             <h3>
//                 <button class="addToCart btn btn-primary" @click="updateCart(detailproduct,'substract')"
//                     :disabled="detailproduct.stock === 0 && detailproduct.quantity===0"
//                     :class="{disabledButton: detailproduct.stock===0 && detailproduct.quantity===0}">-
//                 </button>
//                 <span>{{detailproduct.quantity}}</span>
//                 <button class=" addToCart btn btn-primary" @click="updateCart(detailproduct,'add')"
//                     :disabled="detailproduct.stock === 0" :class="{disabledButton: detailproduct.stock === 0}">+
//                 </button>
                
//             </h3>
//         </div>
//     </div>
// </section>
//     `,
// })