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

     
    >
     <div class="row  justify-content-center 100hv mt-5">
       <div class="col-xs-12 col-md-7 card my-auto shadow mt-5 jf">
           <div class="carder-header text-center bg-primary text-white">
          <h1>s'inscrire</h1>
            <div class="card-body">
            <form action="traitement.php"  method="POST">
               <div class="form-group">
                <label for="email">nom</label>
                <input type="text"   name=" nom" class="form-control" ><br>  <br> <br>
                <div class="form-group">
                <label for="email">prenom</label>
                <input type="text"   name="prenom" class="form-control" ><br>  <br> <br>
                <div class="form-group">
                <label for="email">email</label>
                <input type="text"   name=" email" class="form-control" ><br>  <br> <br>
                <div class="form-group">
                <label for="email">mot de pass</label>
                <input type="text"   name="password1" class="form-control" ><br>  <br> <br>

                <div class="form-group">
                <label for="email">mot de pass</label>
                <input type="text"   name=" password2" class="form-control" > <br> <br>
                <input type="submit" class="btn btn-secondary w-50"  value="inscrire" > <br> <br>
                <a class="btn btn-default text-white" href="administrateur.php" role="button"> se connecte a votre compte</a>
                
             </div>
          </form>
          </div>
         
         </div>
       </div>
     </div>
     </div>

</body>
</html>