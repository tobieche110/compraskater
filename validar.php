<?php
include("./db.php");
session_start();

$usuario = "";
$contraseña = "";

$_SESSION["usuario"] = "";

if (isset($_POST["login"])){

    $usuario = mysqli_real_escape_string($db, $_POST['usuario']);
    $contraseña = mysqli_real_escape_string($db, $_POST['contraseña']);

    $query="SELECT*FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'";
	$resultado=mysqli_query($db,$query);

    $filas=mysqli_num_rows($resultado);

    if (empty($filas)) { 
        $_SESSION['Error'] = "El usuario y/o la contraseña no coinciden."; 
    }

    if ($filas){
    	$_SESSION['usuario'] = $usuario;
    	header("location:./index.php");
    } else{
    	unset ($_SESSION['usuario']);
    	include("./login.php");
    }

}

?>

