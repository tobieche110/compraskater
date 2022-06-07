<?php session_start(); 
    include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./images/logo.png">

</head>
<body>
    <?php
        include("./webTools/nav.php");
        $nombre = $_GET['nombre'];

        $query = mysqli_query($db,"SELECT * FROM productos WHERE nombre = '$nombre'");
        $res = mysqli_fetch_array($query);

        $nombre = $res['nombre'];
        $precio = '$' . $res['precio'];
        $img = 'uploaded-img/' . $res['img'];
        $cuotas = $res['precio']/12;

    ?>

    <div class="container-xl" style="padding: 4%; border-bottom: 1px solid black;">
        <div class="row">

            <div class="col-md-4 col-sm-12 mx-auto">
                <img class ="rounded" style="width: 100%; border: 1px solid black" src="<?php echo $img ?>" alt="productImg">
            </div>
            
            <div class="col-md-8 col-sm-12 mx-auto">
                <h2><strong><?php echo $nombre ?></strong></h2>
                <h1><strong><?php echo $precio ?></strong></h1>
                <h3> En 12 x $<?php echo round($cuotas,2); ?> cuotas sin interés</h3>
                
                <div style="padding-top: 20%; padding-left: 5%;">
                    <button class="btn btn-lg btn-primary" disabled>¡Compralo en nuestra sucursal más cercana!</button>
                </div>
            </div>
        </div>

    </div>

    <?php
        include("./webTools/footer.php")
    ?>
</body>
</html>