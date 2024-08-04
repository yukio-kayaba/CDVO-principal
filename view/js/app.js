window.addEventListener("scroll",()=>{
    let header = document.getElementsByClassName("navbar_contenido")[0];
    header.classList.toggle("estylo_abajo",window.scrollY > 0);    
});
const imagenes = document.querySelectorAll('.hero_figure');
console.log(imagenes);

function trigger_animmation(entrada){
    entrada.forEach(entra=>{
        const imagen = entra.target.querySelector('img');
        imagen.classList.toggle('unset',entra.isIntersecting);
    });
}

const option = {
    root:null,
    rootMargin:"0px",
    threshold:1
}

const observador = new IntersectionObserver(trigger_animmation,option);

imagenes.forEach(image =>{
    observador.observe(image);
});

boton_responsive();
function boton_responsive(){
    const boton = document.getElementById("boton_responsive");
    boton.addEventListener("click",()=>{
        let valor = document.getElementsByClassName("botones_navbar")[0];
        let elemento = document.getElementsByClassName("navbar_contenido")[0];
        if(valor.style.display == "block"){
            valor.style.height = "10vh";
            valor.style.display = "none";
            elemento.querySelector("a").style.width = "60%";
        }else{
            valor.style.height = "100vh";
            valor.style.display = "block";
            elemento.querySelector("a").style.width = "80%";

        }
    });
}
