// ! ---------------- OBJETOS ---------------- ! //
// Productos de muestra del index  
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
        catalogo: "mujer",
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



// ! ---------------- VARIABLES ---------------- ! //
// Genero los filtros del index     
let mujer = document.querySelector("#mujer");
let hombre = document.querySelector("#hombre");
let categorias = document.querySelectorAll(".categorias");
let productosAgregados = document.querySelectorAll(".productos-agregados");

// CARRUSEL DE TESTIMONIOS
let contenedorPadre = document.querySelector(".contenedor-padre")
let parrafosHijos = document.querySelectorAll(".hijo")
let contadorParrafos = 1



// ! ---------------- FUNCIONES ---------------- ! //
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
    div2.setAttribute("class", "productos-agregados col-12 col-sm-6 col-md-4 p-4")

    
    // Organizo los elementos

    div1.appendChild(precio)
    div1.appendChild(nombre)
    div1.appendChild(añadir)

    div2.appendChild(img)
    div2.appendChild(div1)

    contenedorProductosNuevos.appendChild(div2)
})

//Funcion que se encarga de filtar los elementos por categorias
function filtrarCatalagosIndex(x) {
    // x = categoria a filtrar

    x.addEventListener("click", function() {
        let valorActual = x.dataset.categoria

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