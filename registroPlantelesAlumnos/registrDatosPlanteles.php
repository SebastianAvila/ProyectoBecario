<?php


include("coneccionEnvioBD.php");


?>



<?php



if (isset($_POST['registraPlantel'])) {

    if (strlen($_POST['nombrePlantel']) >= 1 and strlen($_POST['clavePlantel']) >= 1 and strlen($_POST['localidadPlantel']) >= 1) {


        date_default_timezone_set("America/Mexico_City");
        DateTimeInterface::RFC1123;
        $fechaRegistroPlantel = date(DATE_RFC1123);

        $nombrePlante = $_POST['nombrePlantel'];
        $clavePlantel = $_POST['clavePlantel'];
        $localidadPlantel = $_POST['localidadPlantel'];

        $envioDPlanteles = "INSERT INTO planteles(clavePlantel	,localidad	,nombrePlantel	, fechaRegistro	) VALUES ('$clavePlantel','$localidadPlantel','$nombrePlante','$fechaRegistroPlantel')";
        $envio = mysqli_query($connection, $envioDPlanteles);

        if ($envio) {
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