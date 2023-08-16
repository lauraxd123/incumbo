const happy = document.querySelector(".happy");




happy.addEventListener("click", rellenar("happy", "red"));


function rellenar(color){
    this.style.background=color;
}