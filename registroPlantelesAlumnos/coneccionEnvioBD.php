<?php

// coneccion direta a la base de datos 
$localhost = "localhost"; //nombre default de la base de datos
$root = "root"; //nombre default del adminstador 
$pass = ""; //contraseña defaul de la base de datos
//$db= "db_becario";
$connection = mysqli_connecT($localhost, $root, $pass);
//db_becario es el nombre de la base de datos 
$db = mysqli_select_db($connection,'db_becario' );
