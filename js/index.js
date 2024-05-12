// ! ---------------- VARIABLES ---------------- ! //
// CARRUSEL DE TESTIMONIOS
let contenedorPadre = document.querySelector(".contenedor-padre")
let parrafosHijos = document.querySelectorAll(".hijo")
let contadorParrafos = 1



// ! ---------------- FUNCIONES ---------------- ! //
//Funcion que se encarga crear el carrusel de TESTIMONIOS
function carrusel2(){
    if(contadorParrafos >= parrafosHijos.length){
        contenedorPadre.style.transition = "none"
        contadorParrafos = 0
    } else {
        contenedorPadre.style.transition = "all 0.3s ease-in"
    }   
    contenedorPadre.style.transform = `translateX(-${100 * contadorParrafos}%)`;
    contadorParrafos++
}

setInterval(carrusel2,3000)