<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS FILE-->
    <link rel="stylesheet" href="../css/pedidos.css" type="text/css">

    <!--JAVA FILE-->
    <script src="../js/jquery-3.2.1.js"></script>
    <script src="../js/pedidos.js"></script>


    <!--FONT AWESOME-->
    <script src="https://kit.fontawesome.com/2f0601808d.js" crossorigin="anonymous"></script>
    <!--GOOGLE FONT-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>

    <title>LOAH</title>
</head>
<body>
    
<!--<div class="modal_wrap">
    <div class="mensaje_modal">
        <h3>Faltan datos por completar</h3>
        <p>Escriba un nombre</p>
        <p>Escriba un apellido</p>
        <p>Escriba un correo electrónico</p>
        <p>Escriba un teléfono / celular</p>
        <p>Escriba su provincia</p>
        <p>Escriba su dirección</p>
        <p>Escriba el detalle del pedido</p>
        <span id="btnClose">Cerrar</span>
    </div>
</div>-->

<div class="atras">
<a href="home.php" class="icon-atras"><i class="fa-solid fa-arrow-left"></i></a>
</div>


<section class="form_wrap">

<section class="contact_info">

<section class="info_tittle">
    <a href="home.php"><img src="../img/logo-crema.png" alt=""></a>
    <h3>¡Haz tus pedidos!</h3>
</section>

<section class="info_items">
    <p><i class="fa-solid fa-credit-card"></i>&nbsp;&nbsp; 9602156270</p>

    <h5>Los pagos en efectivo <br> se realizan el día de la <br> entrega.</h5>

    <h6>Solo tranferencias</h6>
    <img src="../img/banco.png">
</section>

</section>


<form action="envio_pedidos.php" class="form_contact" method="POST">

<h2>Completa los siguientes datos</h2>
<div class="user_info">
    <input type="text" placeholder="Nombre" id="name" name="name" required> &nbsp; <input type="text" placeholder="Apellido" id="surname" name="surname" required>

    <input type="text" placeholder="Correo Electrónico" id="mail" name="mail" required> &nbsp; <input type="text" placeholder="Teléfono / Celular" id="phone" name="phone" required>

    <input type="text" placeholder="Provincia" id="province" name="province" required> &nbsp; <input type="text" placeholder="Dirección" id="adress" name="adress"  required>

    <textarea placeholder="Detalle pedido" id="details" name="details" required></textarea>

    <input type="submit" value="Hacer pedido" id="btn-send">

    <p>En el detalle poner código del producto y <br> cantidad que desea al lado.</p>
    
</div>


</form>

</section>


</body>
</html>