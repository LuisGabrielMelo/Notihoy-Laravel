const btnCategorias = document.getElementById("btnCategorias")
const categorias = document.getElementById("categorias")
let contador = 0

const mostrarCategorias = (btn, nav) => {
    btn.addEventListener("click", (e) => {
        e.preventDefault()
        if(contador == 0){
            mostrarNavAnimado(btn, nav)
            contador = 1
        }else{
            contador = 0
            ocultarNavAnimado(btn, nav)
        }
    })
}

const mostrarNavAnimado = (btn, nav) => {
    nav.classList.remove("hidden", "fadeOut")
    nav.classList.add("fadeIn")
    btn.textContent = "Ver menos"
}
const ocultarNavAnimado = (btn, nav) => {
    nav.classList.add("fadeOut")
    setTimeout(() => {
        nav.classList.add("hidden")
        nav.classList.remove("fadeIn")
    }, 450)
    btn.textContent = "Ver mas"
}

mostrarCategorias(btnCategorias, categorias)