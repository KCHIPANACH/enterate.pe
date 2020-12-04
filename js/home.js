
const hasClass = (el, className) => el.classList.contains(className);

function handleLikePost({target},id_post) {
    
    if(hasClass(target.parentElement, "active")){
      target.parentElement.classList.toggle("active")

      let array_likes = Array.from(JSON.parse(localStorage.likePost));

      array_likes.map((item,index)=>
         (item == id_post) &&
            array_likes.splice(index,1)
      )
      console.log(array_likes);
      localStorage.setItem("likePost", JSON.stringify(array_likes))

    }else{
      target.parentElement.classList.toggle("active")
 
      if (!localStorage.getItem("likePost")) {
   
         localStorage.setItem("likePost", `[${id_post}]`)
   
         console.log(localStorage.likePost)
      }
      else{
   
         let array_likes = Array.from(JSON.parse(localStorage.likePost))
         if(array_likes.length > 0){
            if(array_likes.indexOf(Number(id_post)) == -1 ){
               array_likes.push(Number(id_post))
            }
         }
         
         localStorage.setItem("likePost", JSON.stringify(array_likes))

   
         console.log(localStorage.likePost)
         
      }
    }
 }


