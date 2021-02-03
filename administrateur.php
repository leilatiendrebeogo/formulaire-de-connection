<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
  
    

     <div class="container vh-100 ">

     <div class="row ">  
      
    
     
    
    
</div>
     <div class="row  justify-content-center 100hv mt-5">
       <div class="col-xs-12 col-md-5 card my-auto shadow mt-5 jf">
         <div class="carder-header text-center bg-primary text-white">
         <h1>loging form</h1>
          <div class="card-body">
          <form action="loging.php"  method="POST">
             <div class="form-group">
             <label for="email">email</label>
             <input type="text"   name=" email" class="form-control" ><br>  <br> <br>

             <div class="form-group">
             <label for="passsword">password</label>
             <input type="password" id="pwd"  name=" password" class="form-control" ><br>
             <button type="button" id="eye" style="width:50px;height:25px;">Voir</button> <br> <br>
             <input type="submit" class="w-50%"  value="se connecter" >
             
             </div>
          </form>
          </div>
         
         </div>
       </div>
     </div>
     </div>

</body>
<script>
document.getElementById("eye").addEventListener("click", function(e){
        var pwd = document.getElementById("pwd");
        if(pwd.getAttribute("type")=="password"){
            pwd.setAttribute("type","text");
        } else {
            pwd.setAttribute("type","password");
        }
    });</script>
</html>