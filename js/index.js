//! CARRUSEL de Index

let conocenosCarrusel = document.querySelector(".carrusel-conocenos")
let tituloCarrusel = document.querySelector(".carrusel-titulo")
let ofertaCarrusel = document.querySelector(".carrusel-oferta")
let carruselFondo = document.querySelector(".carrusel")
let carruselFondo2 = document.querySelector(".carrusel2")
let redondo = document.querySelectorAll(".btn > div")
let contador = 1 //? Contador para las repeticiones del carrusel

let carruselIndex = [
    {
        oferta: "*Solo hoy ofrecemos envío gratis",
        titulo: "Tendencias de la moda",
        conocenos: "Conoce la coleccion",
        fondo: 'url("../imagenes/seccion2/cart-1.jpg")',
        id: "a"
    },
    {
        oferta: "*Solo hoy ofrecemos envío gratis",
        titulo: "Moda de mujer",
        conocenos: "Conoce la coleccion",
        fondo: 'url("../imagenes/seccion2/cart-2.jpg")',
        id: "b"
    },
    {
        oferta: "*Solo hoy ofrecemos envío gratis",
        titulo: "Lo ultimo en moda",
        conocenos: "Conoce la coleccion",
        fondo: 'url("../imagenes/seccion2/cart-3.png")',
        id: "b"
    }
]

// Genero la animacion del carrusel para cambiar el contenido cada 3 segundos

function carrusel1(){

    if(contador < 3){
        
        carruselFondo.style.background = carruselIndex[contador].fondo
        carruselFondo.style.left = contador * 100;
        ofertaCarrusel.innerText = carruselIndex[contador].oferta

        tituloCarrusel.innerText = carruselIndex[contador].titulo

        conocenosCarrusel.innerText = carruselIndex[contador].conocenos
        contador++
        mostrarRedondo(contador, redondo)
    } else {
        contador = 0
    }
}

function mostrarRedondo(x, objeto){
    objeto.forEach((el) => {
        el.style.opacity = 0
    })

    redondo[x - 1].style.opacity = 1
}

function carruselDefault(){
    carruselFondo.style.background = carruselIndex[0].fondo
    ofertaCarrusel.innerText = carruselIndex[0].oferta
    tituloCarrusel.innerText = carruselIndex[0].titulo
    conocenosCarrusel.innerText = carruselIndex[0].conocenos
    mostrarRedondo(contador, redondo)
    carruselFondo.style.left = 0
}

carruselDefault()
setInterval(carrusel1,3000)

// Evento que se encarga de cambiar el orden del carrusel por los botones

//! PRODUCTOS NUEVOS

let productosNuevos = [
    {
        nombre: "Saco de vestir blanco",
        precio: "$ 32.000",
        catalogo: "mujer",
        foto: "./imagenes/seccion3/producto-1.jpg",
        id: "a"
    },
    {
        nombre: "Remera Bones",
        precio: "$ 18.000",
        catalogo: "mujer",
        foto: "./imagenes/seccion3/producto-2.jpg",
        id: "b"
    },
    {
        nombre: "Conjunto Homegir",
        precio: "$ 43.000",
        catalogo: "mujeres",
        foto: "./imagenes/seccion3/producto-3.jpg",
        id: "c"
    },
    {
        nombre: "Hombre",
        precio: "$ 32.000",
        catalogo: "hombre",
        foto: "./imagenes/seccion3/producto-4.jpg",
        id: "d"
    },
    {
        nombre: "Hombre",
        precio: "$ 32.000",
        catalogo: "hombre",
        foto: "./imagenes/seccion3/producto-5.jpg",
        id: "e"
    },
    {
        nombre: "Hombre",
        precio: "$ 32.000",
        catalogo: "hombre",
        foto: "./imagenes/seccion3/producto-7.jpg",
        id: "f"
    }
]

// Genero el catalogo de productos del index

productosNuevos.forEach((el) => {


    //? Contenedor Final
    let contenedorProductosNuevos = document.querySelector(".contenedor-pruductos-nuevos")

    // Creo los elementos dinamicos

    let añadir = document.createElement("span")
    añadir.setAttribute("class", "nuevos-añadir mt-3 mb-5")
    añadir.innerText = "Añadir al carrito"

    let nombre = document.createElement("span")
    nombre.setAttribute("class", "nuevos-nombre")
    nombre.innerText = el.nombre

    let precio = document.createElement("span")
    precio.setAttribute("class", "nuevos-precio")
    precio.innerText = el.precio

    let div1 = document.createElement("div")
    div1.setAttribute("class", "d-flex flex-column")

    let img = document.createElement("img")
    img.setAttribute("src", el.foto)
    img.setAttribute("class", "img-fluid mb-3")

    let div2 = document.createElement("div")
    div2.setAttribute("data-categoria", el.catalogo)
    div2.setAttribute("class", "productos-agregados")

    
    // Organizo los elementos

    div1.appendChild(precio)
    div1.appendChild(nombre)
    div1.appendChild(añadir)

    div2.appendChild(img)
    div2.appendChild(div1)

    contenedorProductosNuevos.appendChild(div2)
})


// Genero los filtros del index     

let mujer = document.querySelector("#mujer");
let hombre = document.querySelector("#hombre");
let categorias = document.querySelectorAll(".categorias");
let productosAgregados = document.querySelectorAll(".productos-agregados");

//Funcion que se encarga de filtar los elementos por categorias

function filtrarCatalagosIndex(x) {
    // x = categoria a filtrar

    x.addEventListener("click", function() {
        let valorActual = x.dataset.categoria
        // valorActual = nombre de la categoria

        // productosAgregados = todas las tarjetas de productos
        productosAgregados.forEach((el)=>{
            el.style.display = "none"
            if(el.dataset.categoria == valorActual){
                el.style.display = "block"
            }
        })
    });
}

filtrarCatalagosIndex(mujer);
filtrarCatalagosIndex(hombre);


//! Creo el carrusel que contiene los parrafos

let contenedorPadre = document.querySelector(".contenedor-padre")
let parrafosHijos = document.querySelectorAll(".hijo")
let contadorParrafos = 1

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