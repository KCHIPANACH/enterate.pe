function handleLikePost({target},id_post) {
   
    target.parentElement.classList.toggle("active")
 
    if (!localStorage.getItem("likePost")) {
 
       localStorage.setItem("likePost", `[${id_post}]`)
 
       console.log(localStorage.likePost)
    }
    
    else{
 
       let array_likes = Array.from(JSON.parse(localStorage.likePost))
       array_likes.push(Number(id_post))
       
       localStorage.setItem("likePost", JSON.stringify(array_likes))
 
       console.log(localStorage.likePost)
       
    }
 }

 window.localStorage.clear()

