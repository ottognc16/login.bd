<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/inicioestilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet">
</head>
<body>
    <?php
    session_start();
    if(!isset($_SESSION["correo"])) {header("location:login.php"); }
    ?>
    <center>
<h1>Historia</h1>
</center>

    <div class="container">
    <div class="row">
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="img/img2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Harry Potter es una serie de novelas fantásticas escrita por la autora británica J. K. Rowling, en la que se describen las aventuras del joven aprendiz de magia y hechicería Harry Potter y sus amigos Hermione Granger y Ron Weasley, durante los años que pasan en el Colegio Hogwarts de Magia y Hechicería</p>
  </div>
</div>
    </div>

    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="img/img3.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Desde el lanzamiento de la primera novela, Harry Potter y la piedra filosofal, en 1997, la serie logró una inmensa popularidad, críticas favorables y éxito comercial alrededor del mundo.​ Para julio de 2013 se habían vendido entre 400 y 450 millones de ejemplares de los siete libros, que los ubican como la serie de libros más vendida de la historia.</p>
  </div>
</div>
    </div>

    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="img/img4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">El éxito de las novelas ha hecho de la marca Harry Potter una de las más exitosas del mundo, con un valor de 15 000 millones de dólares, y a Rowling la primera escritora de la historia en alcanzar los 1 000 millones de dólares en concepto de ganancias gracias a su trabajo. En 2005, fue la novena persona con el ingreso anual más alto del mundo.</p>
  </div>
</div>
    </div>

  </div>

  </div>

    <a href="cerrar_sesion.php"><button type="button" class="btn btn-danger">Cerrar sesion</button></a>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>