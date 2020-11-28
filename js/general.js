const btn_active_menu = document.querySelector(".menu__hidden__icono--button")
const menu_hidden = document.querySelector(".menu__hidden") 

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

/* funciones render */

function getTemplateCardsPosts(datos){
   let template = `
   <div class="contenedorGrillas__item">
       <div class="icon_love_card" data-id="${datos.id}" onclick="handleLikePost(event,'${datos.id}')">
       <i class="fab fa-gratipay"></i>
       </div>
       <a href="${datos.url}">
       <div class="contenedorGrillas__item-title">
           <h4 class="m_0"> ${datos.titulo}</h4>
       </div>
       <div class="contenedorGrillas__item-fecha">
           <h5 class="m_0"> ${datos.date} </h5>
       </div>
       <div class="contenedorGrillas__item-img">
           <img
               class="w_100_cover"
               src="${datos.imagen}" 
               alt="Imagen Loop">
       </div>
       </a>
       <div class="contenedorGrillas__item-icons">
       <div class="contenedorGrillas__item-icons__item iconshare">
           <i class="fas fa-share-alt"></i>
       </div>
       <div class="contenedorGrillas__item-icons__item">
           <i class="fas fa-comment"></i>
           <span class="cant_comment"> 12 </span>
       </div>
       </div>
 </div>`

   return template;
}

const templatePlaceload = `<div class="contenedorGrillas__item fade-in-bottom" >
 <div class="placeload-background" style="height: 90px;margin-bottom:7px;"></div>
 <div class="placeload-background" style="height: 15px;margin-bottom:2px;"></div>
 <div class="placeload-background" style="height: 150px;margin-bottom:7px;"></div>
 <div class="placeload-background" style="height: 20px;margin-bottom:7px;"></div>
 <div class="flex-placeload">
   <div class="placeload-background" style="height: 18px;margin-right:5px"></div>
   <div class="placeload-background" style="height: 18px;"></div>
 </div>
</div>`

function activeLove(){
   let icons = document.querySelectorAll(".icon_love_card");
   let iconLocalStorage = Array.from(JSON.parse(localStorage.getItem("likePost")));
   icons.forEach(element=>{
      iconLocalStorage.map(item =>{
           if(parseInt(item) == parseInt(element.getAttribute("data-id"))){
               element.classList.add("active");
           }
       })
   })
}

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




const switch_input = document.getElementById("switch-input")

switch_input.addEventListener("click",({target})=>{
   if(target.checked){
      
      window.contenedorGrila.innerHTML=""
      Array.from([1,2,3,4,5,6,7,8]).map(item=>{
         window.contenedorGrila.insertAdjacentHTML("beforeend",templatePlaceload)
      })

      let likes_data = Array.from(JSON.parse(localStorage.getItem("likePost")))
      let send_JSON = {
         "like":likes_data
      }

      let formData = new FormData()
      formData.append("id_post",JSON.stringify(send_JSON))

      const urlEndpoint = `${URL_BASE}/getfavoritesapi/`;

      fetch(urlEndpoint, {
         method: 'POST',
         body: formData
      })
      .then(response => response.json())
      .then(data => {
         window.contenedorGrila.innerHTML=""
         data.map(item => {
            window.contenedorGrila.insertAdjacentHTML("beforeend",getTemplateCardsPosts(item))
         })
         activeLove();
      } )
   }else{
      let formData = new FormData()
      window.contenedorGrila.innerHTML=""
      Array.from([1,2,3,4,5,6,7,8]).map(item=>{
         window.contenedorGrila.insertAdjacentHTML("beforeend",templatePlaceload)
      })
      const urlEndpoint = `${URL_BASE}/getfavoritesapi/`;
      fetch(urlEndpoint, {
         method: 'POST',
         body: formData
      })
      .then(response => response.json())
      .then(data => {
         window.contenedorGrila.innerHTML=""
         data.map(item => {
            window.contenedorGrila.insertAdjacentHTML("beforeend",getTemplateCardsPosts(item))
         })
         activeLove();
      } )

   }
})

activeLove();