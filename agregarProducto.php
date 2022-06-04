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
</head>
<body>
    <?php include('./webTools/nav.php'); 
    
        if (isset($_SESSION['usuario'])){ //si incio sesion, se verá este código

    ?>

        <div class="container-sm">

            <h1>Agregar nuevos productos a la base de datos</h1>
            <form action="subir.php" method="post" enctype="multipart/form-data">

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
                    <input type="text" class="form-control" placeholder="Ingrese el nombre del producto" name="nombre" required>
                </div>

                <br>
                <div class="form-group">
                    <label style="font-size: 20px">Precio</label>
                    <input type="number" class="form-control" placeholder="Ingrese el precio" name="precio" required>
                </div>
                
                <br>
                <div class="form-group">
                    <label style="font-size: 20px">Marca</label>
                    <input type="text" class="form-control" placeholder="Ingrese la marca" name="marca" required>
                </div>

                <br>
                <div class="form-group">
                    <label style="font-size: 20px">Tipo</label>
                    <select name="tipo" class="form-control" placeholder="Seleccionar..." required>
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
					<input type="file"  name="img" class="form-control form-control-sm" id="formFile" style="font-size: 20px" required>
                </div>
                
                <br>
                <button type="submit" class="btn btn-dark" name="submit" value="Subir Archivos">Enviar</button>
                
            </form>
        </div>

    <?php 
        } else{
            echo '<p>Usted no ha ingresado como administrador. Haga click <a href="login.php"> aquí</a> para hacerlo</p>';
        }
        include('./webTools/footer.php'); 
    
    ?>

</body>
</html>