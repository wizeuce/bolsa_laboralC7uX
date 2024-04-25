<?php
include("includes/head.php");
?>

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- Inicio Zona  central del sistema  -->
    <?php 
        if(isset($_REQUEST['usuario_registrado'])){
            echo 'Tu registro ha sido procesado correctamente.<br>';
            echo 'Por favor debes permanecer atento a la autorización de tu acceso por un administrador.<br>';
            echo 'Gracias por registarte en nuestro Sistema de Bolsa Laboral.';

        }

        if(isset($_REQUEST['no_acceso'])){
            echo 'Lo sentimos, tu acceso aún no ha sido autorizado.<br>';
            echo 'Por favor inténtalo más tarde.';
        }
        

        



    ?>







    <!-- Fin Zona  central del sistema  -->


</div>
<!-- /.container-fluid -->
<?php
include("includes/foot.php");
?>