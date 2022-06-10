<?php

session_start();
include("db.php");

$id = $_GET['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];
$archivoImg = $_FILES['img']['name'];

$stmt = $db->prepare("UPDATE `productos` SET `nombre`=?, `precio` = ?, `marca`=?,`tipo`=? WHERE `id`=?");
$stmt->bind_param("sissi", $nombre, $precio, $marca, $tipo, $id);
$status = $stmt->execute();

if($archivoImg){
    $fecha = new DateTime();
    $str_fecha = $fecha->format('Y-m-d-H-i-s');
    $allowedImg = array('jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG', 'jpg_large', 'bmp');

    $extensionImg = pathinfo($archivoImg, PATHINFO_EXTENSION);

    $nombreImg = $str_fecha . "." . $extensionImg;
    $destinoImg = "./uploaded-img/" . $nombreImg;

    $img = $_FILES['img']['tmp_name'];

    if (!in_array($extensionImg, $allowedImg)){
		$_SESSION['Error'] = "La imagen ingresada no es de un tipo permitido.";
		header("location: editar.php?id=$id");
	} else {
        if(move_uploaded_file($img, $destinoImg)){
            $stmt = $db->prepare("UPDATE `productos` SET `nombre`=?, `precio` = ?, `marca`=?,`tipo`=?, `img`=? WHERE `id`=?");
            $stmt->bind_param("sisssi", $nombre, $precio, $marca, $tipo, $nombreImg, $id);
            $status = $stmt->execute();

            if($status === false){
                $_SESSION['Error'] = "ERROR al editar el producto: " . mysqli_error($db);
            } else{
                $_SESSION['Success'] = "El producto fue editado con éxito";
            }

            header("location: editar.php?id=$id");
        }
    }
} else {
    $stmt = $db->prepare("UPDATE `productos` SET `nombre`=?, `precio` = ?, `marca`=?,`tipo`=? WHERE `id`=?");
    $stmt->bind_param("sissi", $nombre, $precio, $marca, $tipo, $id);
    $status = $stmt->execute();

    if($status === false){
        $_SESSION['Error'] = "ERROR al editar el producto: " . mysqli_error($db);
    } else{
        $_SESSION['Success'] = "El producto fue editado con éxito";
    }
    
    header("location: editar.php?id=$id");
}
