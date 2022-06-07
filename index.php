<?php
@session_start();
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
<body>
    <?php include("./webTools/nav.php"); ?>
    
    <!--PRODUCTO DESTACADO-->
    <header>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="./images/skate-banner-2.gif" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="./images/banner.gif" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="./images/santa-cruz-banner.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!--
        <div class="container-fluid" style="padding-top: 25px; padding-bottom: 25px; border-bottom: 1px solid black; background-color: black;">
            <div class="row">
                <img src="./images/banner.gif" alt="prodDestacado" class="rounded">
            </div>
        </div>
        -->
    </header>
    
    <?php include("./webTools/footer.php"); ?>
  
</body>
</html>