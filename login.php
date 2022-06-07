<?php
@session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="icon" type="image/png" sizes="32x32" href="./images/logo.png">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <?php include("./webTools/nav.php"); ?>

    <!--MAIN-->

    <main style="border-bottom: 1px solid black; padding-bottom: 25px;">

        <div class="container-sm">
            <h1>Iniciar sesión como administrador</h1>

            <form action="./validar.php" method="POST">

                <p style="color: #e41900">
					<?php
					if( isset($_SESSION['Error']) ){
					echo $_SESSION['Error'];
					unset($_SESSION['Error']);}
					?>
				</p>

                <div class="form-group">
					<label style="font-size: 20px">Nombre de Usuario</label>
					<input type="text" class="form-control" placeholder="Ingrese su Nombre de Usuario" name="usuario" required>
				</div>

                <br>
				<div class="form-group">
					<label style="font-size: 20px">Contraseña</label>
					<input type="password" class="form-control" placeholder="Ingrese su Contraseña" name="contraseña" required>
				</div>
                
                <br>
					<button type="submit" class="btn btn-dark" name="login">Iniciar Sesión</button>
            </form>
        </div>
        

    </main>

    <?php include("./webTools/footer.php"); ?>
</body>
</html>
