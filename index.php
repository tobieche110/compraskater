<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a CompraSkater!</title>

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
    
    <!--PRODUCTO DESTACADO-->
    <header>
        <div class="container-fluid" style="padding-top: 25px; padding-bottom: 25px; border-bottom: 1px solid black; background-color: black;">
            <div class="row">
                <img src="./images/banner.gif" alt="prodDestacado" class="rounded">
            </div>
        </div>
    </header>
    
    <?php include("./webTools/footer.php"); ?>
  
</body>
</html>