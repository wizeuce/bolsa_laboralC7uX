<?php    
    include("../includes/conectar.php");
	$conexion = conectar();
    session_start();

    //recibimos los datos de user y password

    $usuario = $_POST['txt_usuario'];
    $password = $_POST['txt_password'];    

    //echo "usuario: ".$usuario;
    //echo "pass: ".$password;

    $sql="SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$password' ";

    $resultado = mysqli_query($conexion,$sql);

    $numero_resultados=mysqli_affected_rows($conexion);

    //echo "Se encontró ".$numero_resultados." fila(s)";

    if($numero_resultados==1){
        $fila = mysqli_fetch_assoc($resultado);
        $_SESSION["S_ROL"]=$fila['id_rol'];
        $_SESSION["S_NOM"]=$fila['nombre'];
        $_SESSION["S_APE"]=$fila['apellidos'];
        $_SESSION["S_TELE"]=$fila['teléfono'];

        if($_SESSION["S_ROL"]=='0')
            header("Location:../index.php?no_acceso=123");
        else
            header("Location:../index.php");

    }else{
        header("Location: form_login.php?error=1");
        

    }  


?>