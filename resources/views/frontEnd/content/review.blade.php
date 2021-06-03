<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Star Rating Form | CodingNepal</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      
      <style>
      @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;

}
html,body{
  display: grid;
  height: 100%;
  place-items: center;
  text-align: center;
  background-color:#25A6BD;
  
}
.container{
  position: relative;
  width: 400px;
  padding: 20px 30px;
  border: 1px solid #444;
  border-radius: 5px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  background-color:white;
}

.container .text{
  font-size: 25px;
  color: #666;
  font-weight: 500;
}

.container .star-widget input{
  display: none;
}
.star-widget label{
  font-size: 40px;
  color: #444;
  padding: 10px;
  float: right;
  transition: all 0.2s ease;
}
input:not(:checked) ~ label:hover,
input:not(:checked) ~ label:hover ~ label{
  color: #fd4;
}
input:checked ~ label{
  color: #fd4;
}


.container form{
  display: none;
}
input:checked ~ form{
 
}
form header{
  width: 100%;
  font-size: 25px;
  color: #fe7;
  font-weight: 500;
  margin: 5px 0 20px 0;
  text-align: center;
  transition: all 0.2s ease;
}
form .textarea{
  height: 100px;
  width: 100%;
  overflow: hidden;
}
form .textarea textarea{
  height: 100%;
  width: 100%;
  outline: none;
  border: 1px solid #333;
  
  padding: 10px;
  font-size: 17px;
  resize: none;
}

form .btn{
  height: 45px;
  width: 100%;
  margin: 15px 0;
 
}

      </style>
   </head>
   <body>
   <form action="submitReview" method="post" >
   @csrf
      <div class="container">
      <div class="post">
         <div class="text">
            Thanks for rating us!
         </div>
         
      </div>
      <div action="submitReview" method="post">
      <input  name="name" placeholder="{{auth()->user()->name}}" class="form-control"  type="text">
      <input name="email" type="email" class="form-control" placeholder="{{auth()->user()->email}}">
      
      <div name="rate" id="rate" class="star-widget">
      
      <select name="rate" class="form-control" id="rate">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
    </select>
      <!-- <input  type="radio" name="rate" id="rate-5">
      <label for="rate-5" class="fas fa-star"></label>
      <input  type="radio" name="rate" id="rate-4">
      <label for="rate-4" class="fas fa-star"></label>
      <input  type="radio" name="rate" id="rate-3">
      <label for="rate-3" class="fas fa-star"></label>
      <input type="radio" name="rate" id="rate-2">
      <label for="rate-2" class="fas fa-star"></label>
      <input name="rate" type="radio" name="rate" id="rate-1">
      <label for="rate-1" class="fas fa-star"></label> -->
      
     
      <div class="textarea">
      <textarea cols="30" name="message"  placeholder="Describe your experience.."></textarea>
      </div>
      <div>
      <button style=" background-color: mintcream; border:1px solid black"  type="submit" class="btn ">Submit</button>
      </div>
      </form>
      <script>
         const btn = document.querySelector("button");
         const post = document.querySelector(".post");
         const widget = document.querySelector(".star-widget");
         const editBtn = document.querySelector(".edit");
         btn.onclick = ()=>{
           widget.style.display = "none";
           post.style.display = "block";
           editBtn.onclick = ()=>{
             widget.style.display = "block";
             post.style.display = "none";
           }
           return false;
         }
      </script>
   </body>
</html>