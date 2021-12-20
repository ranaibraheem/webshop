// // $(document).ready(function() {
// //     $('.image-link').magnificPopup({type:'image'});
// //   });

// // const card =document.getElementsByClassName("card");

// // const card=document.querySelector(".card");
// // document.querySelectorAll(".card");

// // const machines = [{
// //     name: "Simple and tasty",
// //     image: "simplecoffem.jpg",
// //     machineNum: "CM357e",
// //     price: 45,
// //     stock: 10,
// //     id: 1
// // },

// // {
// //     name: "Profitional",
// //     image: "profitionalcoffem.jpg",
// //     machineNum: "CM359e",
// //     price: 899,
// //     stock: 4,
// //     id: 2

// // },

// // {
// //     name: "Fresh",
// //     image: "freshcoffeem.jpg",
// //     machineNum: "CM356f",
// //     price: 150,
// //     stock: 8,
// //     id: 3

// // },

// // {
// //     name: "Filter",
// //     image: "filtercoffeem.jpg",
// //     machineNum: "CM352f",
// //     price: 200,
// //     stock: 12,
// //     id: 4

// // },

// // {
// //     name: "Easy",
// //     image: "easycoffeem.jpg",
// //     machineNum: "CM363f",
// //     price: 450,
// //     stock: 25,
// //     id: 5

// // },

// // {
// //     name: "Silver",
// //     image: "silvercoffeem.jpg",
// //     machineNum: "CM365f",
// //     price: 130,
// //     stock: 30,
// //     id: 6

// // },

// // {
// //     name: "Small & Red",
// //     image: "smallcoffeem.jpg",
// //     machineNum: "CM368e",
// //     price: 99,
// //     stock: 5,
// //     id: 7

// // },

// // {
// //     name: "Take away and enjoy",
// //     image: "takeawaycoffeem.jpg",
// //     machineNum: "CM369e",
// //     price: 55,
// //     stock: 60,
// //     id: 8

// // },

// // {
// //     name: "Handy and tasty",
// //     image: "handycoffeem.jpg",
// //     machineNum: "CM363e",
// //     price: 80,
// //     stock: 20,
// //     id: 9

// // },

// // {
// //     name: "Super Machine",
// //     image: "soprofitionalcoffeem.jpg",
// //     machineNum: "CM370f",
// //     price: 999,
// //     stock: 8,
// //     id: 10

// // },

// // {
// //     name: "Everyday Coffee",
// //     image: "everydaycoffeem.jpg",
// //     machineNum: "CM373e",
// //     price: 80,
// //     stock: 15,
// //     id: 11

// // },

// // {
// //     name: "Modern",
// //     image: "moderncoffeem.jpg",
// //     machineNum: "CM377f",
// //     price: 199,
// //     stock: 12,
// //     id: 12

// // },

// // {
// //     name: "Super easy",
// //     image:"supereasycoffeem.jpg",
// //     machineNum: "CM371e",
// //     price: 50,
// //     stock: 22,
// //     id: 13

// // },

// // {
// //     name: "Arabic",
// //     image:"arabiccoffeem.jpg",
// //     machineNum: "CM378e",
// //     price: 80,
// //     stock: 10,
// //     id: 14

// // },

// // {
// //     name: "Super profitional",
// //     image:"superprofitionalcoffeem.jpg",
// //     machineNum: "CM380f",
// //     price: 1982,
// //     stock: 2,
// //     id: 15

// // },
// // ];

// const basket = document.querySelector('#cart');
// const addButton = document.querySelectorAll('.addToCart');
// const price = document.querySelector('#price');
// const remove = document.querySelector("#remove");
// let add_to_cart = document.querySelectorAll('.addToCart');
// let total = 0;
// let current2 = price.innerText;
// addButton.forEach(function (element, index) {




//     element.addEventListener('click', function (event) {

//         let product_id = this.getAttribute("product_id");
//         let current = basket.innerText;
//         let cart_button = document.querySelector('#cartButton');

//         total = total + machines[product_id-1].price;
//         price.innerText = current2 + total + "$";

//         add_to_cart.forEach(function (el, ind) {
//             cart_button.innerText = 1;

//             el.addEventListener('click', function (e) {
//                 cart_button.innerText++;
//             })


//             remove.addEventListener('click', function (e2) {
//                 price.innerText = current2;
//                 cart_button.innerText = 0;
//                 basket.innerText = "Shopping Cart: ";

//             })

//             // remove.addEventListener('click', function (e2) {
//             //     function refreshPage(){
//             //         window.location.reload();
//             //     } 
//             //     refreshPage();
//             // })
//         })
//         basket.innerText = current + "  ____" + machines[product_id-1].name + ":" + " " + machines[product_id-1].price + "$";

//     })


// })




// // localStorage.setItem("basket", "Rana");
// console.log(localStorage.getItem("basket"));



//pop up
// var myModal = document.getElementById('myModal')
// var myInput = document.getElementById('myInput')

// myModal.addEventListener('shown.bs.modal', function () {
//     myInput.focus()
// })