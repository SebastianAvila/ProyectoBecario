<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css">
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
    font-family: 'Krona One', sans-serif;
}

main{
    width: 100%;
    height: auto;
    background: #34495E;
    position: absolute;
}

.content-all{
    width: 100%;
    max-width: left; /*Controla el lugat del menu */
    background: #17A086;
    margin: auto;
    margin-top: 80px;
    
}

header{
    width: 100%;
    height: 60px;
    position: fixed;
    left: 0;
    top: 0;
    background: #19BC9D;
}

#check{
    display: none;
}

#check:checked ~ .menu{
    width: 200px;
}

.menu{
    position: fixed;
    top: 60px;
    width: 0px;
    height: 100vh;
    background: #2D3E50;
    transition: all 500ms cubic-bezier(1,0,0,1);
    transition-timing-function: cubic-bezier(1,0,0,1);
    overflow: hidden;
}
.menu li{
    list-style: none;
    padding: 16px;
    color: white;
    cursor: pointer;
    transition: all 300ms;
    display: block;
    width: 400px;
}

.menu li:hover{
    background: rgba(0,0,0,0.2);
}



.content-all label{
    position: fixed;
    width: 100%;
    max-width: 1000px;
    top: 14px;
    font-size: 26px;
    color: white;
    cursor: pointer;
    z-index: 10;
}

.content-all h2{
    position: fixed;
    width: 100%;
    max-width: 1000px;
    top: 14px;
    font-size: 26px;
    text-align: right;
    color: white;
}
    </style>
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
