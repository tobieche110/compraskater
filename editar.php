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
    <title>Editar Producto</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./images/logo.png">
</head>
<body>
    <?php include('./webTools/nav.php');

        $id = $_GET['id'];

        $query = mysqli_query($db,"SELECT * FROM productos WHERE id = '$id'");
        $res = mysqli_fetch_array($query);

        $nombre = $res['nombre'];
        $precio = $res['precio'];
        $marca = $res['marca'];
        $tipo = $res['tipo'];
        $img = "./uploaded-img/" . $res['img'];
    
        if (isset($_SESSION['usuario'])){ //si incio sesion, se verá este código

    ?>

        <div class="container-sm" style="padding-top: 1%;">

            <div class="row">

                <div class="col-md-4 col-sm-12 mx-auto">
                    <img id="insertImg" class = "rounded" style="width: 100%; border: 1px solid black;" src="<?php echo $img ?>" alt="productImg">
                </div>

                <div class="col-md-8 col-sm-12 mx-auto">
                    <h1>Editar producto</h1>

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
                    
                    <form id="formUpload" action="editarBack.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
                        
                        <div class="form-group">
                            <label style="font-size: 20px">Nombre del producto</label>
                            <input type="text" class="form-control" value="<?php echo $nombre ?>" name="nombre" id="nombre">
                        </div>

                        <br>
                        <div class="form-group">
                            <label style="font-size: 20px">Precio</label>
                            <input type="number" class="form-control" value="<?php echo $precio ?>" name="precio" id="precio">
                        </div>
                        
                        <br>
                        <div class="form-group">
                            <label style="font-size: 20px">Marca</label>
                            <input type="text" class="form-control" value="<?php echo $marca ?>" name="marca" id="marca">
                        </div>

                        <br>
                        <div class="form-group">
                            <label style="font-size: 20px">Tipo</label>
                            <select id="tipo" name="tipo" class="form-select">
                                <option
                                <?php 
                                if($tipo == "tabla"){
                                    echo " selected";
                                }
                                ?>
                                >tabla</option>
                                <option
                                <?php 
                                if($tipo == "rulemanes"){
                                    echo " selected";
                                }
                                ?>
                                >rulemanes</option>
                                <option
                                <?php 
                                if($tipo == "ruedas"){
                                    echo " selected";
                                }
                                ?>
                                >ruedas</option>
                                <option
                                <?php 
                                if($tipo == "trucks"){
                                    echo " selected";
                                }
                                ?>
                                >trucks</option>
                                <option
                                <?php 
                                if($tipo == "hardware"){
                                    echo " selected";
                                }
                                ?>
                                >hardware</option>
                                <option
                                <?php 
                                if($tipo == "lija"){
                                    echo " selected";
                                }
                                ?>
                                >lija</option>
                                <option
                                <?php 
                                if($tipo == "skateCompleto"){
                                    echo " selected";
                                }
                                ?>
                                >skateCompleto</option>
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