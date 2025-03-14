let abrirMenu = document.querySelector('#mobile-btn')
let menu = document.querySelector('#abrir')

abrirMenu.addEventListener('click', ()=>{
    menu.classList.add('abrir-menu')
})

menu.addEventListener('click', ()=>{
    menu.classList.remove('abrir-menu')
})
