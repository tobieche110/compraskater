<?php

include('db.php');
session_start();

$fecha = new DateTime();
$str_fecha = $fecha->format('Y-m-d-H-i-s');
$allowedImg = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG', 'jpg_large', 'bmp');

if(isset($_POST["submit"])){

    $archivoImg = $_FILES['img']['name'];

    $extensionImg = pathinfo($archivoImg, PATHINFO_EXTENSION);

    $nombreImg = $str_fecha . "." . $extensionImg;

    $destinoImg = "./uploaded-img/" . $nombreImg;

    //vars
    $img = $_FILES['img']['tmp_name'];
    $nombre = mysqli_real_escape_string($db, $_POST['nombre']);
    $precio = mysqli_real_escape_string($db, $_POST['precio']);
    $marca = mysqli_real_escape_string($db, $_POST['marca']);
    $tipo = mysqli_real_escape_string($db, $_POST['tipo']);


    if (!in_array($extensionImg, $allowedImg)){
		$_SESSION['Error'] = "La imagen ingresada no es de un tipo permitido.";
		header('location: agregarProducto.php');
	} else {
        if(move_uploaded_file($img, $destinoImg)){
            $query = "INSERT INTO productos (nombre, precio, marca, tipo, img) VALUES ('$nombre', '$precio', '$marca', '$tipo', '$nombreImg')";
            if (mysqli_query($db, $query)) {
				$_SESSION['Success'] = "El producto se subió correctamente";
				header('location: agregarProducto.php');
			}
        }
    }

}


?>