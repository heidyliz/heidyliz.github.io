<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS FILE-->
    <link rel="stylesheet" href="../css/ofertas.css" type="text/css">

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
            <div class="envio">BIENVENIDO, <?php echo $user; ?>!</div>
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
    <!--ICONOS DEL MENU PRINCIPAL-->
    <div class="icons1">
        <a href="pedidos.php">Hacer Pedido!</a>
    </div>

    <div class="icons">

        <div class="fas fa-bars" id="menu-btn"></div>
        <a href="logout.php"><div class="fa-solid fa-right-from-bracket" id="search-btn"></div></a>
    </div>
</header>


<div class="ofertas">
    <h3>Ofertas</h3>
    <p><a href="home.php">Inicio</a>   / Ofertas</p>
</div>

<div class="image-oferta">
    <img src="../img/ofertas.png" alt="">
    <a href="pedidos.php">Reservar Ahora</a>
</div>









<section class="products-list">
        <div class="product-item" category="mujeres">
            <img src="../img/ofer1.jpg" alt="">
            <p><b> Código:</b> 172201</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/ofer2.jpg" alt="">
            <p> <b> Código:</b> 172202</p>
        </div> 
        <div class="product-item" category="hombres">
            <img src="../img/ofer3.jpg" alt="">
            <p> <b> Código:</b> 172203</p>
        </div>   

        <div class="product-item" category="mujeres">
            <img src="../img/ofer4.jpg" alt="">
            <p> <b> Código:</b> 172204</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/ofer5.jfif" alt="">
            <p> <b> Código:</b> 172205</p>
        </div> 
        <div class="product-item" category="hombres">
            <img src="../img/ofer6.jpg" alt="">
            <p> <b> Código:</b> 172206</p>
        </div>               
        
        <div class="product-item" category="mujeres">
            <img src="../img/ofer7.jpg" alt="">
            <p> <b> Código:</b> 172207</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/ofer8.jpg" alt="">
            <p> <b> Código:</b> 172208</p>
        </div> 
        <div class="product-item" category="hombres">
            <img src="../img/ofer9.jpg" alt="">
            <p> <b> Código:</b> 172209</p>
        </div> 

        <div class="product-item" category="mujeres">
            <img src="../img/ofer10.jpg" alt="">
            <p> <b> Código:</b> 172210</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/ofer11.jpeg" alt="">
            <p> <b> Código:</b> 1722011</p>
        </div> 
        <div class="product-item" category="hombres">
            <img src="../img/ofer12.jpg" alt="">
            <p> <b> Código:</b> 1722012</p>
        </div> 

        <div class="product-item" category="mujeres">
            <img src="../img/ofer13.jpg" alt="">
            <p> <b> Código:</b> 1722013</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/ofer14.jpg" alt="">
            <p><b> Código:</b> 1722014</p>
        </div> 
        <div class="product-item" category="hombres">
            <img src="../img/ofer15.jpg" alt="">
            <p><b> Código:</b> 1722015</p>
        </div> 

        <div class="product-item" category="mujeres">
            <img src="../img/ofer16.jpg" alt="">
            <p><b> Código:</b> 1722016</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/ofer17.jpg" alt="">
            <p> <b> Código:</b> 1722017</p>
        </div> 
        <div class="product-item" category="hombres">
            <img src="../img/ofer18.jpg" alt="">
            <p> <b> Código:</b> 1722018</p>
        </div> 

        <div class="product-item" category="mujeres">
            <img src="../img/ofer19.jpg" alt="">
            <p> 2 sujetadores sin aros encaje</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/ofer20.jpg" alt="">
            <p> <b> Código:</b> 1722019</p>
        </div> 
        <div class="product-item" category="hombres">
            <img src="../img/ofer21.jpg" alt="">
            <p> <b> Código:</b> 17220221</p>
        </div> 

        <div class="product-item" category="mujeres">
            <img src="../img/ofer22.jpg" alt="">
            <p> <b> Código:</b> 22022</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/ofer23.jpg" alt="">
            <p> <b> Código:</b> 172656</p>
        </div> 
        <div class="product-item" category="hombres">
            <img src="../img/ofer24.jpg" alt="">
            <p> <b> Código:</b> 1722584</p>
        </div> 
	</div>


   <!--FOOTER DERECHOS DE AUTOR-->
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

</body>
</html>
