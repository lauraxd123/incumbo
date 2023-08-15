const happy = document.querySelector(".happy");




happy.addEventListener("click", rellenar("happy", "red"));


function rellenar(emoji, color){
    document.querySelector(emoji).style.background=color;
}