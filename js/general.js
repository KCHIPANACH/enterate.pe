const btn_active_menu = document.querySelector(".menu__hidden__icono--button")
const menu_hidden = document.querySelector(".menu__hidden") 

btn_active_menu.addEventListener("click",(e)=>{
   menu_hidden.classList.toggle("active")
})