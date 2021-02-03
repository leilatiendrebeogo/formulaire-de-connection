<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<input type="password" placeholder="Password" c class="masked" name="password" />
        <button type="button" id="eye">
            
         </button>
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