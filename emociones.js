const happy = document.querySelector(".happy");
const sad = document.querySelector(".sad");
const angry = document.querySelector(".angry");
const sick = document.querySelector(".sick");



happy.addEventListener("click", ()=>{rellenar(".happy", "green")});
sad.addEventListener("click", ()=>{rellenar(".sad", "blue")});
angry.addEventListener("click", ()=>{rellenar(".angry", "red")});
sick.addEventListener("click", ()=>{rellenar(".sick", "orange")});


function rellenar(emoji, color){
    document.querySelector(emoji).style.background=color;
    document.querySelector(emoji).style.color="white";
}