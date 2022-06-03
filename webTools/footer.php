<!--SPONSORS-->
<section class="text-center" style="margin: 50px;">
    <div class="container-sm">
        <img src="./images/sp-element.png" alt="element" class="" style="height: 100px; padding-right: 20px;">
        <img src="./images/sp-thrasher.png" alt="thrasher" class="" style="height: 100px;">
        <img src="./images/sp-kalima.png" alt="kalima" class="" style="height: 100px;">
        <img src="./images/sp-stcruz.png" alt="stcruz" class="" style="height: 100px;">
    </div>
</section>

<!--FOOTER-->
<footer style="padding-top: 25px; padding-bottom: 15px; border-top: 1px solid black;">
    <div class="container-sm">
      <div class="row">

        <div class="col-md-6 col-sm-12 mx-auto">
            <div class="mx-auto text-center">
                <p>Contactanos:</p>
                <ul class="list-unstyled">
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg> +54 9 261 XXXX</li>
                    <li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                    </svg> compra@skater.com</li>
                </ul>
            </div>
        </div>
    
        <div class="col-md-6 col-sm-12 mx-auto">
            
            <div class="mx-auto text-center">
                <nav aria-label="Footer Contact">
                    <p>Seguinos en:</p>
                    <ul class="list-unstyled">
                        <a href="https://www.facebook.com" class="bi bi-facebook" target="_blank"></a>
                        <a href="https://www.instagram.com/tobieche/?hl=es-la" class="bi bi-instagram" target="_blank"></a>
                    </ul>
                </nav>
            </div>
        </div>
      </div>
    </div>
    
    <?php

        if (isset($_SESSION["usuario"])){
            echo '<p align="center"> Usted ha iniciado sesión como administrador </p>';
            echo '<p align="center"><a href = "logout.php">Cerrar Sesión</a></p>';
        } else{
            echo '<p align="center"> ¿Administrador? Click <a href="login.php">Aquí</a> para iniciar sesión </p>';
        }


    ?>
    
</footer>