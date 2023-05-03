let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

let shoppingCart = document.querySelector('.shopping-cart');

document.querySelector('#cart-btn').onclick = () =>{
    shoppingCart.classList.toggle('active');
    searchForm.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}

let loginForm = document.querySelector('.login-form');

document.querySelector('#login-btn').onclick = () =>{
    loginForm.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    navbar.classList.remove('active');
}

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
}

window.onscroll = () =>{
    searchForm.classList.remove('active');
    shoppingCart.classList.remove('active');
    loginForm.classList.remove('active');
    navbar.classList.remove('active');
}


var swiper = new Swiper(".review-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});

function Avaliar(estrela) {
 var url = window.location;
 url = url.toString()
 url = url.split("review.html");
 url = url[0];

 var s1 = document.getElementById("s1").src;
 var s2 = document.getElementById("s2").src;
 var s3 = document.getElementById("s3").src;
 var s4 = document.getElementById("s4").src;
 var s5 = document.getElementById("s5").src;
 
 var avaliacao = 0;

if (estrela == 5){ 
 if (s5 == url + "image/estrelavazia.png") {
 document.getElementById("s1").src = "image/estrelacheia.png";
 document.getElementById("s2").src = "image/estrelacheia.png";
 document.getElementById("s3").src = "image/estrelacheia.png";
 document.getElementById("s4").src = "image/estrelacheia.png";
 document.getElementById("s5").src = "image/estrelacheia.png";

 avaliacao = 5;
 } else {
 document.getElementById("s1").src = "image/estrelacheia.png";
 document.getElementById("s2").src = "image/estrelacheia.png";
 document.getElementById("s3").src = "image/estrelacheia.png";
 document.getElementById("s4").src = "image/estrelacheia.png";
 document.getElementById("s5").src = "image/estrelavazia.png";
 
 avaliacao = 4;
}}
 
 //ESTRELA 4
if (estrela == 4){ 
 if (s4 == url + "image/estrelavazia.png") {
 document.getElementById("s1").src = "image/estrelacheia.png";
 document.getElementById("s2").src = "image/estrelacheia.png";
 document.getElementById("s3").src = "image/estrelacheia.png";
 document.getElementById("s4").src = "image/estrelacheia.png";
 document.getElementById("s5").src = "image/estrelavazia.png";
 avaliacao = 4;
 } else {
 document.getElementById("s1").src = "image/estrelacheia.png";
 document.getElementById("s2").src = "image/estrelacheia.png";
 document.getElementById("s3").src = "image/estrelacheia.png";
 document.getElementById("s4").src = "image/estrelavazia.png";
 document.getElementById("s5").src = "image/estrelavazia.png";
 avaliacao = 3;
}}

//ESTRELA 3
if (estrela == 3){ 
 if (s3 == url + "image/estrelavazia.png") {
 document.getElementById("s1").src = "image/estrelacheia.png";
 document.getElementById("s2").src = "image/estrelacheia.png";
 document.getElementById("s3").src = "image/estrelacheia.png";
 document.getElementById("s4").src = "image/estrelavazia.png";
 document.getElementById("s5").src = "image/estrelavazia.png";
 avaliacao = 3;
 } else {
 document.getElementById("s1").src = "image/estrelacheia.png";
 document.getElementById("s2").src = "image/estrelacheia.png";
 document.getElementById("s3").src = "image/estrelavazia.png";
 document.getElementById("s4").src = "image/estrelavazia.png";
 document.getElementById("s5").src = "image/estrelavazia.png";
 avaliacao = 2;
}}
 
//ESTRELA 2
if (estrela == 2){ 
 if (s2 == url + "image/estrelavazia.png") {
 document.getElementById("s1").src = "image/estrelacheia.png";
 document.getElementById("s2").src = "image/estrelacheia.png";
 document.getElementById("s3").src = "image/estrelavazia.png";
 document.getElementById("s4").src = "image/estrelavazia.png";
 document.getElementById("s5").src = "image/estrelavazia.png";
 avaliacao = 2;
 } else {
 document.getElementById("s2").src = "image/estrelacheia.png";
 document.getElementById("s2").src = "image/estrelavazia.png";
 document.getElementById("s3").src = "image/estrelavazia.png";
 document.getElementById("s4").src = "image/estrelavazia.png";
 document.getElementById("s5").src = "image/estrelavazia.png";
 avaliacao = 1;
}}
 
 //ESTRELA 1
if (estrela == 1){ 
 if (s1 == url + "image/estrelavazia.png") {
 document.getElementById("s1").src = "image/estrelacheia.png";
 document.getElementById("s2").src = "image/estrelavazia.png";
 document.getElementById("s3").src = "image/estrelavazia.png";
 document.getElementById("s4").src = "image/estrelavazia.png";
 document.getElementById("s5").src = "image/estrelavazia.png";
 avaliacao = 1;
 } else {
 document.getElementById("s1").src = "image/estrelavazia.png";
 document.getElementById("s2").src = "image/estrelavazia.png";
 document.getElementById("s3").src = "image/estrelavazia.png";
 document.getElementById("s4").src = "image/estrelavazia.png";
 document.getElementById("s5").src = "image/estrelavazia.png";
 avaliacao = 0;
}}
 
 document.getElementById('rating').innerHTML = avaliacao;
 
}