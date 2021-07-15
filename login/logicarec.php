<?php

try{
if(isset($_POST["email"] && !empty($_POST["email"]))){

    $pass = substr(md5(microtime()),1,10);
    $mail = $_POST["email"];

    $host='localhost';
    $user='root';
    $pass='';
    $db='registros_otto';

   $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
   if(!$conn){
       die("no hay conexion: ".mysqli_connect_error());
   }
   $sql = "UPDATE datos set contraseña= '$pass'WHERE Correo = '$mail'";

   if($conn ->query($sql)== TRUE){
       echo "usuario modificado correctamente"
   }

   else{
       echo"error de la modificacion".$conn->error;

   }

    $to = $_POST["email"]; //a quien envio el mensaje
    $from = "From: "."El mor de tu vida baiby";
    $subject="nueva contraseña; para que la olvide :V";
    $menssage= "esta es su nueva contraseña".$pass;


}

}catch

?>