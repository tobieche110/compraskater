<?php
@session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Quienes somos?</title>

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
    
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="./images/quienessomos1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5><strong>Somos un grupo de skaters argentinos con un solo objetivo:</strong></h5>
                <p>Lograr que consigas el skate de tus sueños.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="./images/quienessomos2.gif" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5><strong>Contamos con lo último en tablas,</strong></h5>
                <p>rulemanes, trucks y todo lo que necesitas para construirlo.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="./images/skate1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption">
                <h5><strong>Armá tu Skate</strong></h5>
                <p>Con la herramienta de última tecnología podés construir una patineta que se amolde a tus gustos y necesidades.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>


</div>
        
    
    <?php include("./webTools/footer.php"); ?>
  
</body>
</html>