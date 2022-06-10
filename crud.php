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
    <title>Administrar Productos</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./images/logo.png">
</head>
<body>

    <?php include("./webTools/nav.php"); ?>

    <?php if (isset($_SESSION['usuario'])){ ?>
        <div class="container-xl">
            <div class="row">
                <div class="col-md-6 col-sm-12 mx-auto">
                    <h1 style="padding-top: 2%;">Administrar Productos</h1>
                </div>
                <div class="col-md-6 col-sm-12 mx-auto d-grid gap-2 d-md-flex justify-content-md-end" style="padding-top: 1%;">
                    <a class="btn btn-nav btn-light btn-outline-dark " href="./agregarProducto.php">Agregar Productos</a>
                </div>
            </div>

            <p style="color: red">
				<?php
				    if( isset($_SESSION['Error']) ){
				    	echo $_SESSION['Error'];
				    	unset($_SESSION['Error']);}
				?>
			</p>

            <p style="color: green">
				<?php
				    if( isset($_SESSION['Success']) ){
				    	echo $_SESSION['Success'];
				    	unset($_SESSION['Success']);}
				?>
			</p>

            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Nombre del Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Archivo de Imagen</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <?php 
                    
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

                        $idarray = array_reverse($idarray);
                        $query = mysqli_query($db, $sql);
                        $total_resultados = mysqli_num_rows($query);

                        for($i = 0; $i < $total_resultados; $i++){

                            $query = mysqli_query($db,"SELECT * FROM productos WHERE id = '$idarray[$i]'");
                            $res = mysqli_fetch_array($query);

                            $id = $res['id'];
                            $nombre = $res['nombre'];
                            $precio = $res['precio'];
                            $marca = $res['marca'];
                            $tipo = $res['tipo'];
                            $img = $res['img'];
                        
                    ?>

                    <tr>
                    <th scope="row"><?php echo $id ?></th>
                    <td><?php echo $nombre ?></td>
                    <td><?php echo $precio ?></td>
                    <td><?php echo $marca ?></td>
                    <td><?php echo $tipo ?></td>
                    <td><?php echo $img?></td>
                    <td><a class="btn btn-primary" href="./editar.php?id=<?php echo $id ?>">Editar</a> <a class="btn btn-danger" href="./borrar.php?id=<?php echo $id ?>" onclick="return confirm('¿Estás seguro de querer borrar este artículo?')">Eliminar</a></td>
                    </tr>

                    <?php
                        }
                    ?>
                </tbody>
            </table>
            <?php } else{
                echo "Por favor, ingrese sesión como administrador";
            } ?>
        </div>

    <?php include("./webTools/footer.php"); ?>
    
</body>
</html>