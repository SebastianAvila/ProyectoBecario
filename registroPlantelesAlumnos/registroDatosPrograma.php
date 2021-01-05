<?php


include("coneccionEnvioBD.php");


?>


<?php
if (isset($_POST['enviaPrograma'])) {
    if (strlen($_POST['horasCubrir'])) {

        date_default_timezone_set("America/Mexico_City");
        DateTimeInterface::RFC1123;
        $fechaRegistroPrograma = date(DATE_RFC1123);

        $NumAleFo = rand(9999, 99999);
        $id_UnicoPro = "PRO";
        $id_UnicoPro .= $NumAleFo;
        
        $tipoProgra = $_POST['tipoProgra'];
        $fechaInicioBeca = $_POST['fechaInicioBeca'];
        $fechaFinBeca = $_POST['fechaFinBeca'];
        $horasCubrir = $_POST['horasCubrir'];
        $clavePlantel = $_POST['clavePlantel'];
        
        

        $envioDatosProgramas = "INSERT INTO programas(id_UnicoPro,tipoProgra,horasCubrir,fechaInicioBeca,fechaFinBeca,clavePlantel,fechaRegistro) VALUES ('$id_UnicoPro','$tipoProgra','$horasCubrir','$fechaInicioBeca','$fechaFinBeca','$clavePlantel','$fechaRegistroPrograma')";
        $envioDatosProgramasQUERY = mysqli_query($connection, $envioDatosProgramas);

      


        if ($envioDatosProgramasQUERY ) {
?>

            <h3 class="ok"> ¡Registro correcto! </h3>
        <?php
            echo "Funciona";
        } else {
        ?>

            <h3 class="ok"> ¡Registro Incorrecto! </h3>
        <?php
            echo " No Funciona";
        }
    } else {

        //verifica que los campos esten llenos de no estarlos manda el siguiente mensaje 
        //la clase bad es para el css manda un mensaje en rojo
        ?>
        <h3 class="bad">¡Rellene todos los campos! </h3>
<?php

    }
}



?>