<?php    
    include("../includes/conectar.php");
	$conexion = conectar();

    //recibimos los datos de user y password

    $usuario = $_POST['txt_usuario'];
    $password = $_POST['txt_password'];    

    //echo "usuario: ".$usuario;
    //echo "pass: ".$password;

    $sql="SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasenia='$password' ";

    $resultado = mysqli_query($conexion,$sql);

    $numero_resultados=mysqli_affected_rows($conexion);

    //echo "Se encontró ".$numero_resultados." fila(s)";

    if($numero_resultados==1){

        $_SESSION["SESION_ROL"]=1;

        header("Location:../index.php");

        //echo "Bienvenido al sistema.";
    }else{
        header("Location:form_login.php?error_login=error");
    }
    

?>