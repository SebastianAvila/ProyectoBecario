

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../cssGeneral/barraLateral.css">
    <link rel="stylesheet" href="../cssGeneral/registroCss.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet" />
    <title>Registro Alumnos</title>

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
      

        <div class="formAlumno">
            <h3>Alumnos</h3>

            <h4>Primer Nombre</h4>
            <input type="text" name="primerNomBeca" id="primerNomBeca" placeholder="Primer Nombre">

            <h4>Segundo Nombre</h4>
            <input type="text" name="segundoNomBeca" id="segundoNomBeca" placeholder="Segundo Nombre">

            <h4>Apellido Paterno</h4>
            <input type="text" name="apellidoPaterBeca" id="apellidoPaterBeca" placeholder="Apellido Paterno">

            <h4>Apellido Materno</h4>
            <input type="text" name="apellidoMaterBeca" id="apellidoMaterBeca" placeholder="Apellido Materno">

            <h4>Celular</h4>
            <input type="number" name="celular" id="celular" placeholder="Lada + Numero">

            <?php

            $link = mysqli_connect("localHost", "root", "");
            if ($link) {
                mysqli_select_db($link, "db_becario");
                mysqli_query($link, "SET NAMES 'utf0'");
            }
            ?>

            <h4>Plantel del Procedencia </h4>

            <select name="clavePlantel" id="" require>
                <option value="">Planteles Disponibles</option>
                <?php
                $v = mysqli_query($link, "SELECT * FROM planteles");
                while ($planteles  = mysqli_fetch_row($v)) {

                ?>

                    <option value="<?php echo $planteles[0] ?>"><?php echo $planteles[2] ?> </option>

                <?php }  ?>


                    

            </select>
            <br><br>    
            <input type="submit" value="Registrar" id="registraAlumno">
        </div>

    </form>


</body>

</html>