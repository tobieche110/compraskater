<?
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a CompraSkater!</title>

    <link rel="icon" type="image/png" sizes="32x32" href="./images/logo.png">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">

    <style type="text/css">
        .btn-nav{
            display: inline-block;
        }
    </style>
  
    <!-- Stylesheet -->
    <link rel="stylesheet" href="./styles.css">
</head>

<nav class="navbar py-5" style="border-bottom: 1px solid black ;">
        <div class="container-sm mx-auto">
            <a href="index.php"><img src="./images/logo.png" alt="Site Logo" style="height: 150px;"></a>

            <div class="justify-content-end" id="navbarNav">
                <a class="btn btn-nav btn-light btn-outline-dark" href="productos.php">Productos</a>
                <a class="btn btn-nav btn-light btn-outline-dark" href="armaTuSkate.php">Armá tu Skate</a>
                <a class="btn btn-nav btn-light btn-outline-dark" href="quienessomos.php">¿Quiénes somos?</a>
                <a class="btn btn-nav btn-light btn-outline-dark" href="contacto.php">Contactanos</a>
                <?php 
                    if (isset($_SESSION["usuario"])){
                        echo '<a class="btn btn-nav btn-secondary btn-outline-dark" href="agregarProducto.php">Agregar productos</a>';
                    }
                
                ?>
                <br>
                <form name="search" method="post" action="search.php" class="input-group mb-3" style="padding-top: 5px;">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="..." aria-label="Recipient's username">
                        <div class="input-group-append">
                            <button class="btn btn-dark btn-outline-light" type="submit">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</nav>