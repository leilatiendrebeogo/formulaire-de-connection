
<?php  


require_once 'connection.php';

$nom=$_POST["nom"];
$prenom=$_POST['prenom'];


$email=$_POST['email'];
$password1=$_POST['password1'];

$password2=$_POST['password2'];
if( $password1=$password2){

    $password=$password2;
    
$preparation=$db-> prepare('INSERT INTO regis(nom,prenom,email,password) VALUES(?,?,?,?)' );
$data =array($nom,$prenom,$email,$password);
$preparation->execute($data);

}

else{


    echo "mot de pass non similaire";
}



 ?>