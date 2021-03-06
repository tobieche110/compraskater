<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Productos</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./images/logo.png">
</head>
<body>
    <?php include('./webTools/nav.php'); 
    
        if (isset($_SESSION['usuario'])){ //si incio sesion, se verá este código

    ?>

        <div class="container-sm" style="padding-top: 1%;">

            <div class="row">

                <div class="col-md-4 col-sm-12 mx-auto">
                    <img id="insertImg" class = "rounded" style="width: 100%; border: 1px solid black;" src="./images/imgPlaceHolder.png" alt="productImg">
                </div>

                <div class="col-md-8 col-sm-12 mx-auto">
                    <h1>Agregar nuevos productos a la base de datos</h1>
                    <form id="formUpload" action="subir.php" method="post" enctype="multipart/form-data">

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
                        
                        <div class="form-group">
                            <label style="font-size: 20px">Nombre del producto</label>
                            <input type="text" class="form-control" placeholder="Ingrese el nombre del producto" name="nombre" id="nombre">
                        </div>

                        <br>
                        <div class="form-group">
                            <label style="font-size: 20px">Precio</label>
                            <input type="number" class="form-control" placeholder="Ingrese el precio" name="precio" id="precio">
                        </div>
                        
                        <br>
                        <div class="form-group">
                            <label style="font-size: 20px">Marca</label>
                            <input type="text" class="form-control" placeholder="Ingrese la marca" name="marca" id="marca">
                        </div>

                        <br>
                        <div class="form-group">
                            <label style="font-size: 20px">Tipo</label>
                            <select id="tipo" name="tipo" class="form-select" placeholder="Seleccionar...">
                                <option>tabla</option>
                                <option>rulemanes</option>
                                <option>ruedas</option>
                                <option>trucks</option>
                                <option>hardware</option>
                                <option>lija</option>
                                <option>skateCompleto</option>
                            </select>
                        </div>
                        
                        <br>
                        <div class="form-group">
                            <label style="font-size: 20px">Imagen</label>
                            <input type="file"  name="img" class="form-control form-control-sm" id="formFile" style="font-size: 20px">
                        </div>
                        
                        <br>
                        <button type="submit" class="btn btn-dark" name="submit" value="Subir Archivos">Enviar</button>
                        
                    </form>
                </div>
            </div>
        </div>

    <?php 
        } else{
            echo '<p>Usted no ha ingresado como administrador. Haga click <a href="login.php"> aquí</a> para hacerlo</p>';
        }
        include('./webTools/footer.php'); 
    
    ?>

    <script src="formFileOnChange.js"></script>
    <script src="validar.js"></script>

</body>
</html>