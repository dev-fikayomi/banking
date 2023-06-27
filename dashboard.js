var ham = document.querySelector(".hamburger");
var nav = document.querySelector("nav");
var link = document.querySelectorAll(".link");

ham.addEventListener("click", () =>{
    nav.classList.toggle("active")
    ham.classList.toggle("active")
});

function dissapearNav (){
    nav.classList.remove("active")
}