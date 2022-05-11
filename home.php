<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS FILE-->
    <link rel="stylesheet" href="../css/home.css" type="text/css">

    <!--FONT AWESOME-->
    <script src="https://kit.fontawesome.com/2f0601808d.js" crossorigin="anonymous"></script>
    <!--GOOGLE FONT-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <title>LOAH</title>
</head>
<?php include('session.php'); ?>
<body>
        <!--MINI MENU-->
        <header class="sub-menu">
        <nav>
            <div class="envio">BIENVENIDO, <?php echo $user; ?>!  </div>
        </nav>
    </header>
</nav>
<!--MENU PRINCIPAL-->
<header class="header">
<a href="home.php" class="logo"><img src="../img/logo-crema.png"></a>
    <nav class="navbar">
        <a href="home.php">Inicio</a>
        <a href="articulos.php">Artículos</a>
        <a href="ofertas.php">Ofertas</a>
    </nav>
    
    <div class="icons1">
        <a href="pedidos.php">Hacer Pedido!</a>
    </div>
    <!--ICONOS DEL MENU PRINCIPAL-->
    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div> 
        <a href="logout.php"><div class="fa-solid fa-right-from-bracket" id="cart-btn"></div></a>
    </div>
    
</header>

<!--TEXTO QUE VA DENTRO DE LA PORTADA-->
<section class="home" id="index">
    <div class="content">
    <h3>Elige para ti lo <span>mejor</span></h3>
    <p>Lo que llevas puesto en ropa interior definirá tu actitud</p>
    </div>
</section>
<!--SECCION HISTORIA-->
<section class="about" id="about">

      

    <div class="row">

        <div class="image">
            <img src="../img/histo.jpg" alt="">
        </div>

        <div class="content">
            <h3 class="title">¿QUIÉNES  SOMOS?</h3>
            <p>Somos una empresa con una modalidad virtual, destinados a ofrecer los mejores servicios junto a marcas reconocidas mundialmente, destacandonos por nuestra integridad y calidad. Nuestra Empresa fue creada a través de una familia donde son 4 hermanos y de allí sale el nombre LOAH donde la <b>L</b> de Lucero, la <b>O</b> de Omar, la <b>A</b> de Alondra y por último la <b>H</b> de Heidy.</p></p>
            </div>
        </div>

    </div>

</section>


<!--CARRUSEL-->
<section id="section-1">
<div class="Carousel">
        <h1>Productos</h1>
        <div class="slick-list" id="slick-list">
            <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
            </button>
            <div class="slick-track" id="track">
                <div class="slick">
                    <div>
                            <picture>
                                <a href="articulos.php"><img src="../img/homeprecios1.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php"><img src="../img/homeprecios2.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php"><img src="../img/homeprecios3.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php"><img src="../img/homeprecios4.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php"> <img src="../img/homeprecios5.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php"> <img src="../img/homeprecios6.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php">  <img src="../img/homeprecios7.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php">  <img src="../img/homeprecios8.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php">  <img src="../img/homeprecios9.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php"> <img src="../img/homeprecios10.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php"> <img src="../img/homeprecios11.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php"> <img src="../img/homeprecios12.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php"><img src="../img/homeprecios13.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php"><img src="../img/homeprecios14.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php"> <img src="../img/homeprecios15.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
            <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
            </button>
        </div>
        <div class="slick-list" id="slick-list">
            <button class="slick-arrow slick-prev" id="button-prev" data-button="button-prev" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path></svg>
            </button>
            <div class="slick-track" id="track">
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php"> <img src="../img/homeprecios16.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php">  <img src="../img/homeprecios17.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php"> <img src="../img/homeprecios18.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php">  <img src="../img/homeprecios19.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php">  <img src="../img/homeprecios20.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php">  <img src="../img/homeprecios21.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php"> <img src="../img/homeprecios22.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php">  <img src="../img/homeprecios23.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php">   <img src="../img/homeprecios24.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php">  <img src="../img/homeprecios25.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php">  <img src="../img/homeprecios26.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php"> <img src="../img/homeprecios27.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php">  <img src="../img/homeprecios28.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php">   <img src="../img/homeprecios29.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="slick">
                    <div>
                            <picture>
                            <a href="articulos.php">   <img src="../img/homeprecios30.png" alt="Image"></a>
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
            <button class="slick-arrow slick-next" id="button-next" data-button="button-next" onclick="app.processingButton(event)">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path></svg>
            </button>
        </div>
    </div>
    </section>
    <!--SECCION OFERTAS INDEX-->
    <section class="home-ofer">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <div class="image" >
                <img class="ar1" src="../img/an1.png" alt="" ">
                <a href="articulos.php">Ver Catálogo</a>
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="image" >
                <img class="ar2" src="../img/an2.png" alt="">
                <a href="articulos.php">Ver Más</a>
                </div>
            </div>
            <div class="swiper-slide slide">
                <div class="image" >
                <img class="ar3" src="../img/an3.png" alt="">
                </div>
            </div>
           
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!--SECCION DE CONTACTO-->
    <section>
    <h1 class="headingi">Ponte en contácto<br>con nosotros!</h1>
    <hr>
    <div class="contacto">
    <p><b>HORARIO</b><br>Lunes a Sábado&nbsp;&nbsp;8:00am  -  6:00pm <br>Domingo:&nbsp;No laborable</p>
    <br>
    <br>
    <br>
    <p><b>CONTÁCTO</b><br>809-295-8836 / 829-849-3516</p>
    <p>loahshop@gmail.com</p>
    <br>
    <br>
    <br>
    <p><b>ZONAS CUBIERTAS DELIVERY</b><br>Tienda virtual</p>
    <br>
    <br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d681274.7623161835!2d-70.8509922405772!3d19.388761874972833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8eaf8838def1b6f5%3A0xa6020f24060df7e0!2sRep%C3%BAblica%20Dominicana!5e0!3m2!1ses-419!2sdo!4v1648839610014!5m2!1ses-419!2sdo" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="cell">
        <img src="../img/celphone-contact.png" alt="">
    </div>
    </div>
    </section>
    
    <div class="container-footer">	

<footer>
    <div class="logo-footer">
        <img src="../img/logo-crema.png" alt="">
    </div>

    <div class="redes-footer">
    <a href="https://www.facebook.com/loahshop.rd/" class="fa-brands fa-facebook-f icon-redes-footer"></a>
    <a href="https://instagram.com/_loahshop?igshid=YmMyMTA2M2Y=" class="fa-brands fa-instagram icon-redes-footer"></a>
    <a href="https://wa.link/bcnvah" class="fa-brands fa-whatsapp icon-redes-footer"></a>
    </div>

    <h4>© 2022 LoahShop - Todos los Derechos Reservados</h4>

</footer>

</div>
   
<!--JAVA FILE-->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="../js/app.js"></script>
</body>
</html>

