<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="barraLateral.css">
     <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap"
      rel="stylesheet"
    />
    <title>Document</title>
</head>
<body>
<div class="content-all">
            <header></header>
            <input type="checkbox" id="check">
            <label for="check" class="icon-menu">Menu</label>
            <nav class="menu">
                <ul>
                     <a href="registroAlumnos.php."> <li>Alumnos</li></a> 
                     <a href="registroPlanteles.php"> <li>Planteles</li> </a> 
                     <a href="relacionAlumnoServi.php"><li>Tipo de alumnos</li></a>
                   
                </ul>
            </nav>
</div>

<div class="formAlumno">
<h3>Nombre</h3>

<h4>Primer Nombre</h4>
<input type="text" name="primerNomBeca" id="primerNomBeca" placeholder="Primer Nombre">

<h4>Segundo Nombre</h4>
<input type="text" name="segundoNomBeca" id="segundoNomBeca" placeholder="Segundo Nombre">

<h4>Apellido Paterno</h4>
<input type="text" name="apellidoPaterBeca" id="apellidoPaterBeca" placeholder="Apellido Paterno">

<h4>Apellido Materno</h4>
<input type="text" name="apellidoMaterBeca" id="apellidoMaterBeca" placeholder="Apellido Materno">

<h4>Fecha de Inicio del Servicio</h4>
<input type="date" name="tiempoInicioBeca" id="tiempoInicioBeca" placeholder="Inicio servicio">

<h4>Fecha fin del servicio</h4>
<input type="date" name="tiempoFinBeca" id="tiempoFinBeca" placeholder="Fin Servicio">

<h4>Escuela de procedencia</h4>
<fieldset>
    <select name="" id="">
        <option value="">aver</option>

    </select>
    
</fieldset>

<input type="submit" value="Registrar" id="registraAlumno">
</div>

</body>
</html>
