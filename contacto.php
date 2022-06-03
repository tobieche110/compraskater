<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>

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
  
</head>
<body>
    <?php include("./webTools/nav.php"); ?>
    
    <!--MAIN-->

    <main style="border-bottom: 1px solid black; padding-bottom: 25px;">

        <div class="container-sm">
            <h1>¿Tenés alguna consulta? ¿Te gustaría trabajar con nosotros?</h1>
            <p>¡Completá el formulario y envianos un mensaje!</p>

            <form action="contacto" method="POST">
                <p>Ingrese su correo:</p>
                <input type="email" name="mail" required>

                <p></p>
                <p>¿Por qué desea contactarnos?</p>
                <select name="porque" placeholder="Seleccionar..." required>

                    <option>Quiero trabajar con ustedes</option>
                    
                    <option>Bug/Error en la página</option>
                    
                    <option>Otra razón</option>
                    
                </select>

                <p></p>
                <p><textarea rows="10" cols="150" placeholder="Ingrese su consulta..." required></textarea></p>

                <input type="submit" value="Enviar">
            </form>
        </div>
        

    </main>

    <?php include("./webTools/footer.php"); ?>
    
</body>

</html>