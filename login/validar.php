<?php



$dbhost= 'localhost';

$dbuser= 'root';

$dbpass= '';

$dbname= 'registros_otto';



$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn){

    die("No hay conexion: ".mysqli_connect_error());

}



$usuario= $_POST["correo"];

$password= $_POST["contra"];



$query = mysqli_query($conn, "SELECT * FROM datos WHERE correo ='".$usuario."' and contra ='".$password."'");

$nr = mysqli_num_rows($query);



if($nr == 1){
    session_start();
    $_SESSION["correo"]=$_POST["contra"];
    header("location:principal.php");

}

else if ($nr == 0){

    header("<location:login.php");

}

?>