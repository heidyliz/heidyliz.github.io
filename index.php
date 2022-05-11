<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <!--CSS FILE-->
    <link rel="stylesheet" href="../css/index.css" type="text/css">

    <!--FONT AWESOME-->
    <script src="https://kit.fontawesome.com/9c1aa8c1b3.js" crossorigin="anonymous"></script>

    <!--GOOGLE FONT-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <!--SLIDER-->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <?php
    session_start();
    if (isset($_SESSION['user'])) {
        header('location:home.php');
    }
    ?>


    <title>LOAH</title>
</head>

<body>



    <!--INICIO DEL HEADER NABVAR-->
    <header class="header1">
        <div class="container1">
            <div class="btn-menu1">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;<label for="btn-menu1"><i class="fa-solid fa-bars"></i></label>
                
            </div>
        </div>
    </header>

    <!--LINK JUNTO AL NAVBAR-->
    <input type="checkbox" id="btn-menu1">
    <header class="header2">
        <nav class="menu2">
            <ul>
                <li><a href="articulo1.php">Artículos</a></li>
                <br>
                <br>
                <li><a href="nosotros.php">Sobre Nosotros</a></li>
                <br>
                <br>
                <li><a href="tutopedido.php">¿Cómo hacer un pedido?</a></li>
            </ul>
        </nav>
        <label for="btn-menu1"><i class="fa-solid fa-xmark"></i></label>
    </header>
    <!--FIN DEL HEADER-->

    <!--INICIO DEL HEADER HOME TEXTO-->
    <div class="elemento-padre" id="home1">

        <section class="text-section">
            <div class="content1">
                <h1>La mejor
                    <hr> ropa interior
                </h1>
                <p>Haz tu pedido en línea, olvídate de </p>
                <p>preocuparte por hacer filas. <a class="ver" href="articulo1.php">Ver catálogo</a></p>

                <!--BOTON INICIO SESION-->
                <a href="principal.php"><button>Inicia sesión o Regístrate</button></a>

                <!--REDES SOCIALES-->
                <div class="icon">
                    <a href="https://www.facebook.com/loahshop.rd/" class="fa-brands fa-facebook-f"></a>
                    <a href="https://instagram.com/_loahshop?igshid=YmMyMTA2M2Y=" class="fa-brands fa-instagram"></a>
                    <a href="https://wa.link/bcnvah" class="fa-brands fa-whatsapp"></a>
                </div>

            </div>
        </section>
        <div class="fondo">
            <img class="imagen" src="../img/img_index.png" alt="">
   
        </div>
    </div>
</body>

</html>