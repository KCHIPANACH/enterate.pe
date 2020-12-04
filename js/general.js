const btn_active_menu = document.querySelector(".menu__hidden__icono--button")
const menu_hidden = document.querySelector(".menu__hidden") 
const switch_input = document.getElementById("switch-input")

console.log(btn_active_menu)

btn_active_menu.addEventListener("click",(e)=>{
   menu_hidden.classList.toggle("active")
})

let btnPasoUno = document.querySelectorAll(".pasouno__enlaces button")

btnPasoUno.forEach(element=>{
   element.addEventListener("click", ()=>{
      document.querySelector(".content_deseapublicar__pasouno").style.display="none";
      document.querySelector(".content_deseapublicar__pasodos").style.display="block";
   })
})


let btnDeseaPublicar = document.querySelector(".enterate__menu--publicar button");
let contenidoPublicar = document.querySelector(".contenedor_desea_publicar");
btnDeseaPublicar.addEventListener("click", ()=>{
   contenidoPublicar.classList.add("active");
})

contenidoPublicar.addEventListener("click", (e)=>{
   if(e.target == e.currentTarget){
      contenidoPublicar.classList.remove("active")
   }
})

/* endpoint anonimo */

window.btnAnonimo.onclick = ()=>{
   const urlEndpoint = `${URL_BASE}/login-with-anonimus/`;

   fetch(urlEndpoint, {
      method: 'POST'
   })
   .then(resp =>resp.json())
   .catch(err => console.log(err))
   .then(res => location.href=res)
}

switch_input.addEventListener("click",({target})=>{
   if(target.checked){
      let likes_data = Array.from(JSON.parse(localStorage.getItem("likePost")))
      let send_JSON = {
         "like":likes_data
      }

      let formData = new FormData()
      formData.append("id_post", JSON.stringify(send_JSON))

      const urlEndpoint = `${URL_BASE}/getfavoritesapi/`;

      fetch(urlEndpoint, {
         method: 'POST',
         body: formData
      })
      .then(response => response.json())
      .then(data => console.log(res))
   }

   else{

   }
})