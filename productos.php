<?php
    session_start();
    include("db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros Productos</title>

</head>

<body>
    <?php
        include("./webTools/nav.php");

        $sql = "SELECT * FROM productos ORDER BY id desc"; 
        $resultado = $db->query($sql);
        
        if ($resultado->num_rows > 0) {  
        
            $idarray= array();
            while($row = $resultado->fetch_assoc()) {
                array_push($idarray,$row['id']); 
            }
        }
        else {
            echo "0 results";
        }

        $resultados_por_pagina = 8;

        $query = mysqli_query($db,"SELECT id FROM productos");
        $total_resultados = mysqli_num_rows($query);

        $numero_paginas = ceil ($total_resultados / $resultados_por_pagina);

    ?>    
        <div class="container-xl" style="padding-top: 50px">
            <div class="row">
    
    <?php
        for($i = 0; $i < $total_resultados; $i++){
                $query = mysqli_query($db,"SELECT * FROM productos WHERE id = '$idarray[$i]'");
                $res = mysqli_fetch_array($query);

                $nombre = $res['nombre'];
                $precio = '$' . $res['precio'];
                $img = 'uploaded-img/' . $res['img'];
    ?>
            
            <div class="col-md-3 col-sm-6 mx-auto">
                <div class="card rounded" style="width: 105%; text-align: center;">

                    <img class="card-img-top" src= "<?php echo $img; ?>" alt="product_img"> <!-- imagen -->

                    <div class="card-body">
                        <h2 style="color: black"> <?php echo $nombre ?> </h2>

                        <h3 style="color: black" class="card-subtitle mt-2"> <?php echo $precio ?> </h3>
                    </div>
                </div>
            </div>
    <?php
        }
    ?>

            </div>
        </div>
    
    
    <!-- CODIGO ORDENADO
    <div class="container-xl" style="padding-top: 50px">
        <div class="row">
            <div class="col-md-3 col-sm-6 mx-auto">
                <div class="card rounded" style="width: 105%; text-align: center;">

                    <img class="card-img-top" src= "<?php // echo $img; ?>" alt="product_img">

                    <div class="card-body">
                        <h2 style="color: black"> <?php //echo $nombre ?> </h2>

                        <h3 style="color: black" class="card-subtitle mt-2"> <?php //echo $precio ?> </h3>
                    </div>
                </div>
            </div>
        </div>

    </div>

    -->

    <?php
        include("./webTools/footer.php")
    ?>
</body>
</html>