<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../cssGeneral/barraLateral.css">
    <link rel="stylesheet" href="../cssGeneral/registroCss.css"> 
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet" />
  <title>Registro Planteles</title>
</head>

<body>
  <div class="content-all">
    <header></header>
    <input type="checkbox" id="check">
    <label for="check" class="icon-menu">Menu</label>
    <nav class="menu">
      <ul>
        <a href="registroAlumnos.php.">
          <li>Alumnos</li>
        </a>
        <a href="registroPlanteles.php">
          <li>Planteles</li>
        </a>
        <a href="relacionAlumnoServi.php">
          <li>Tipo de alumnos</li>
        </a>
        <a href="registroPrograma.php">
          <li>Registrar tipo de Programa </li>
        </a>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <a href="../index.html">
          <li>Cerrar Sesion</li>
        </a>

      </ul>
    </nav>
  </div>
  <form action="" method="POST" id="formPrincipalRegistro">
    <div class="formPlanteles">
      <h3>Planteles</h3>
      <h4>Nombre</h4>
      <input type="text" name="nombrePlantel" id="nombrePlantel">
      <h4>Clave</h4>
      <input type="text" name="clavePlantel" id="clavePlantel">
      <h4>Localidad</h4>
      <input type="text" name="localidadPlantel" id="localidadPlantel"><br><br>

      <input type="submit" value="Registrar" id="registraPlantel">


    </div>

  </form>



</body>

</html>


<?php
include("registrDatosPlanteles.php");
?>