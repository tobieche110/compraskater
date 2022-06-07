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
    
    <!--MAIN-->
    <main style="background-color: grey;  border-bottom: 1px solid black; padding-bottom: 25px;">
        <!--HEAD-->
        <header style="padding-top: 25px;">
            <div class="container-sm site-header">

                <div class="row justify-content-between">

                    <div class="col-md-6 col-sm-12 site-header__title pe-md-5 col-content">
            
                    <h1 class="site-title">
                        <strong>Somos un grupo de skaters argentinos con un solo objetivo:</strong>
                    </h1>
                    <h3>
                        Lograr que consigas el skate de tus sueños.
                    </h3>
            
                    </div>

                    <div class="col-md-6 col-sm-12 col-image">
                    <img src="./images/quienessomos1.jpg" alt="img-qnes1" class="rounded" style="width: 100%;">
                    </div>
                </div>
            </div>
        </header>

        <!--SECCION MEDIA-->
        <section class="" style="padding-top: 25px;">
            <div class="container-sm">
                <div class="row justify-content-between">

                    <div class="col-md-6 col-sm-12 col-image">
                        <img src="./images/build-skateboard.jpg" alt="buildskate" class="rounded" style="height: 360px">
                    </div>

                    <div class="col-md-6 col-sm-12 col-content">

                        <h2 class="section__title">
                            <strong>Contamos con lo último en tablas,</strong></h2>

                        <h3 class="section__description">
                            rulemanes, trucks y todo lo que necesitas para construirlo.
                        </h3>
                    </div>
                </div>
            </div>
        </section>

        <section style="padding-top: 25px;">
            <div class="container-sm">

                <div class="row justify-content-between">

                    <div class="col-md-6 col-sm-12 col-content">
            
                    <h2 class="">
                        <strong>Armá tu Skate</strong>
                    </h1>
                    <h3>
                        Con la herramienta de última tecnología podés construir una patineta que se amolde a tus gustos y necesidades.
                    </h3>
            
                    </div>

                    <div class="col-md-6 col-sm-12 col-image">
                    <img src="./images/anatomyskate.webp" alt="img-qnes3" class="rounded" style="height: 305px;">
                    </div>
                </div>
            </div>
        </section>
    </main>
        
    
    <?php include("./webTools/footer.php"); ?>
  
</body>
</html>