<?php include('header2.php'); ?>

<link rel="stylesheet" href="../css/articulos.css">
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
    <h3>Artículos</h3>
    <p><a href="home.php">Inicio</a>   / artículos</p>
</div>

<div class="wrap">
        
		<div class="store-wrapper">
			<div class="category_list">
				<a href="#" class="category_item" category="all">Todo</a>
				<a href="#" class="category_item" category="mujeres">Mujeres</a>
				<a href="#" class="category_item" category="hombres">Hombres</a>
				<a href="#" class="category_item" category="bikinis">Bikinis</a>
			</div>


            <section class="products-list">
        <div class="product-item" category="mujeres">
            <img src="../img/art1.jpg" alt="">
            <p><b>$800.00 &nbsp;Código:</b> 07881 <br> 7 piezas set bragas algodón.</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/art13.jpg" alt="">
            <p><b>$600.00 &nbsp;Código:</b> 07882 <br> Bikini pierna alta conaro.</p>
        </div> 
        <div class="product-item" category="hombres">
            <img src="../img/art25.jpg" alt="">
            <p><b>$900.00 &nbsp;Código:</b> 07883 <br> Set 4 pantalonsillos.</p>
        </div>   

        <div class="product-item" category="mujeres">
            <img src="../img/art2.jpg" alt="">
            <p><b>$400.00 &nbsp;Código:</b> 07884 <br> 3 piezas set bragas encaje.</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/art14.jpg" alt="">
            <p><b>$850.00 &nbsp;Código:</b> 07885 <br> Bikini set 2 panties con aro.</p>
        </div> 
        <div class="product-item" category="hombres">
            <img src="../img/art26.jpg" alt="">
            <p><b>$1500.00 &nbsp;Código:</b> 07886 <br> Set 6 boxers algodón.</p>
        </div>               
        
        <div class="product-item" category="mujeres">
            <img src="../img/art3.jpg" alt="">
            <p><b>$1,000.00 &nbsp;Código:</b> 07887 <br> Set 3 conjuntos algodón.</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/art15.jpg" alt="">
            <p><b>$690.00 &nbsp;Código:</b> 07888 <br> Bikini canalé.</p>
        </div> 
        <div class="product-item" category="hombres">
            <img src="../img/art27.jpg" alt="">
            <p><b>$2,000.00 &nbsp;Código:</b> 07889 <br> Set 8 boxers michael adams.</p>
        </div> 

        <div class="product-item" category="mujeres">
            <img src="../img/art4.jpg" alt="">
            <p><b>$700.00 &nbsp;Código:</b> 07891 <br> Braguitas de encaje.</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/art16.jpg" alt="">
            <p><b>$750.00&nbsp;Código:</b> 07892<br> Bikini canalé.</p>
        </div> 
        <div class="product-item" category="hombres">
            <img src="../img/art28.jpeg" alt="">
            <p><b>$800.00&nbsp;Código:</b> 07893 <br> Set 6 boxers sencillos.</p>
        </div> 

        <div class="product-item" category="mujeres">
            <img src="../img/art5.jpg" alt="">
            <p><b>$1,100.00&nbsp;Código:</b> 07894 <br> 4 set sujetador encaje florial.</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/art17.jpg" alt="">
            <p><b>$750.00&nbsp;Código:</b> 07895 <br> Bikini canalé estampado.</p>
        </div> 
        <div class="product-item" category="hombres">
            <img src="../img/art29.jfif" alt="">
            <p><b>$800.00&nbsp;Código:</b> 07896 <br> Set 4 boxers sencillos.</p>
        </div> 

        <div class="product-item" category="mujeres">
            <img src="../img/art6.jpg" alt="">
            <p><b>$650.00&nbsp;Código:</b> 07897 <br> Set 3 piezas shorties.</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/art18.jpg" alt="">
            <p><b>$750.00&nbsp;Código:</b> 07898 <br> Bikini liso forma tanga.</p>
        </div> 
        <div class="product-item" category="hombres">
            <img src="../img/art30.jpg" alt="">
            <p><b>$900.00&nbsp;Código:</b> 07899 <br> Set 3 boxers tonos nuts.</p>
        </div> 

        <div class="product-item" category="mujeres">
            <img src="../img/art7.jpg" alt="">
            <p><b>$600.00 &nbsp;Código:</b> 07861 <br> 2 sujetadores sin aros encaje.</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/art19.jpg" alt="">
            <p><b>$800.00&nbsp;Código:</b> 07862 <br> Bikini liso sencillo.</p>
        </div> 
        <div class="product-item" category="hombres">
            <img src="../img/art31.jfif" alt="">
            <p><b>$800.00 &nbsp;Código:</b> 07863 <br> Set 3 boxers rayas.</p>
        </div> 

        <div class="product-item" category="mujeres">
            <img src="../img/art8.jpg" alt="">
            <p><b>$900.00 &nbsp;Código:</b> 07864 <br> 3 set algodón unicolor.</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/art20.jpg" alt="">
            <p><b>$800.00&nbsp;Código:</b> 07865 <br> Bikini rayas canalé.</p>
        </div> 
        <div class="product-item" category="hombres">
            <img src="../img/art32.jpg" alt="">
            <p><b>$900.00&nbsp;Código:</b> 07866 <br> Set 4 boxers tonos oscuros.</p>
        </div> 

        <div class="product-item" category="mujeres">
            <img src="../img/art9.jpeg" alt="">
            <p><b>$780.00&nbsp;Código:</b> 07867 <br> Bragas lisas sin costura.</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/art21.jpg" alt="">
            <p><b>$950.00&nbsp;Código:</b> 07868 <br> Bikini liso un hombro.</p>
        </div> 

        <div class="product-item" category="mujeres">
            <img src="../img/art10.jpg" alt="">
            <p><b>$1,500.00&nbsp;Código:</b> 07869 <br> Sujetador sin aro</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/art22.jpg" alt="">
            <p><b>$900.00&nbsp;Código:</b> 07851 <br> Bikini rayitas sin tiros sexy.</p>
        </div> 

        <div class="product-item" category="mujeres">
            <img src="../img/art11.jpg" alt="">
            <p><b>$1,100.00&nbsp;Código:</b> 07852 <br> 3 set colores claros.</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/art23.jpeg" alt="">
            <p><b>$400.00&nbsp;Código:</b> 07853 <br> 2 bragas bikini.</p>
        </div>
        
        <div class="product-item" category="mujeres">
            <img src="../img/art12.jpg" alt="">
            <p><b>$1,100.00&nbsp;Código:</b> 07854 <br> 3 set lenceria con encaje floral.</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/art20.jpg" alt="">
            <p><b>$850.00&nbsp;Código:</b> 07855 <br> Bikini lasos rayitas.</p>
        </div> 




        <div class="product-item" category="mujeres">
            <img src="../img/art33.png" alt="">
            <p><b>$1,000.00&nbsp;Código:</b> 07856 <br> 3 set algodón.</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/art34.png" alt="">
            <p><b>$600.00&nbsp;Código:</b> 07857 <br> Bikini pierna alta conaro.</p>
        </div> 
        <div class="product-item" category="hombres">
            <img src="../img/art35.png" alt="">
            <p><b>$1,500.00&nbsp;Código:</b> 07858 <br> Set 5 boxers unicolor.</p>
        </div>   

        <div class="product-item" category="mujeres">
            <img src="../img/art36.png" alt="">
            <p><b>$400.00&nbsp;Código:</b> 07859 <br> Bragas encaje.</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/art37.png" alt="">
            <p><b>$650.00&nbsp;Código:</b> 07841 <br> Bikini rojo sin aro.</p>
        </div> 
        <div class="product-item" category="hombres">
            <img src="../img/art38.png" alt="">
            <p><b>$800.00&nbsp;Código:</b> 07842 <br> Boxer algodón.</p>
        </div>               
        
        <div class="product-item" category="mujeres">
            <img src="../img/art39.png" alt="">
            <p><b>$1,000.00&nbsp;Código:</b> 07843 <br> Set 3 piezas algodón.</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/art40.png" alt="">
            <p><b>$650.00&nbsp;Código:</b> 07844 <br> Bikini canalé.</p>
        </div> 
        <div class="product-item" category="hombres">
            <img src="../img/art41.png" alt="">
            <p><b>$1,000.00&nbsp;Código:</b> 07845 <br> Set 4 boxers man.</p>
        </div> 

        <div class="product-item" category="mujeres">
            <img src="../img/art42.png" alt="">
            <p><b>$1,800.00&nbsp;Código:</b> 07846 <br> 4 conjuntos de algodón.</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/art43.png" alt="">
            <p><b>$750.00&nbsp;Código:</b> 07847 <br> Bikini canalé.</p>
        </div> 
        <div class="product-item" category="hombres">
            <img src="../img/art44.png" alt="">
            <p><b>$800.00&nbsp;Código:</b> 07848 <br> Set 5 boxers sencillos.</p>
        </div> 

        <div class="product-item" category="mujeres">
            <img src="../img/art45.png" alt="">
            <p><b>$600.00&nbsp;Código:</b> 07849 <br> Conjunto blanco encaje.</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/art46.png" alt="">
            <p><b>$750.00&nbsp;Código:</b> 07831 <br> Bikini canalé estampado vaca.</p>
        </div> 
        <div class="product-item" category="hombres">
            <img src="../img/art47.png" alt="">
            <p><b>$900.00&nbsp;Código:</b> 07832 <br> Set 4 boxers sencillos.</p>
        </div> 

        <div class="product-item" category="bikinis">
            <img src="../img/art48.png" alt="">
            <p><b>$80.00&nbsp;Código:</b> 07833 <br> Bikini 3 piezas sencillo.</p>
        </div>
        <div class="product-item" category="hombres">
            <img src="../img/art49.png" alt="">
            <p><b>$1,500.00&nbsp;Código:</b> 07834 <br> Boxers Calvin Klein.</p>
        </div> 
        <div class="product-item" category="mujeres">
            <img src="../img/art50.png" alt="">
            <p><b>$500.00&nbsp;Código:</b> 07835 <br> bragas florial.</p>
        </div> 

        <div class="product-item" category="bikinis">
            <img src="../img/art51.png" alt="">
            <p><b>$900.00&nbsp;Código:</b> 07836 <br>Bikini sin aro vuelitos.</p>
        </div>
        <div class="product-item" category="hombres">
            <img src="../img/art52.png" alt="">
            <p><b>$1,000.00&nbsp;Código:</b> 07837 <br> Boxers lisos sencillos.</p>
        </div> 
        <div class="product-item" category="mujeres">
            <img src="../img/art53.png" alt="">
            <p><b>$1,100.00&nbsp;Código:</b> 07838 <br> Set unicolor.</p>
        </div> 

        <div class="product-item" category="bikinis">
            <img src="../img/art54.png" alt="">
            <p><b>$600.00&nbsp;Código:</b> 07839 <br> Bikini unicolor.</p>
        </div>
        <div class="product-item" category="hombres">
            <img src="../img/art55.png" alt="">
            <p><b>$800.00&nbsp;Código:</b> 07821 <br> Bikini rayas canalé.</p>
        </div> 
        <div class="product-item" category="mujeres">
            <img src="../img/art56.png" alt="">
            <p><b>$900.00&nbsp;Código:</b> 078322 <br> Lencería negra.</p>
        </div> 

        <div class="product-item" category="bikinis">
            <img src="../img/art57.png" alt="">
            <p><b>$780.00&nbsp;Código:</b> 078323 <br> Bikini rayas verde.</p>
        </div>
        <div class="product-item" category="hombres">
            <img src="../img/art58.png" alt="">
            <p><b>$950.00&nbsp;Código:</b> 078324 <br> 2 boxers Calvin klein blancos.</p>
        </div> 

        <div class="product-item" category="mujeres">
            <img src="../img/art59.png" alt="">
            <p><b>$1,000.00&nbsp;Código:</b> 078325 <br> Sujetadores sin aro</p>
        </div>
        <div class="product-item" category="bikinis">
            <img src="../img/art60.png" alt="">
            <p><b>$900.00&nbsp;Código:</b> 078326 <br> Bikini rayitas tiros sexy.</p>
        </div> 

        <div class="product-item" category="hombres">
            <img src="../img/art61.png" alt="">
            <p><b>$1,100.00&nbsp;Código:</b> 078327 <br> 4 set boxers negros con raya.</p>
        </div>
        <div class="product-item" category="mujeres">
            <img src="../img/art62.png" alt="">
            <p><b>$2,000.00&nbsp;Código:</b> 078328 <br> 5 bragas sexys.</p>
        </div>
        
        <div class="product-item" category="mujeres">
            <img src="../img/art63.png" alt="">
            <p><b>$500.00&nbsp;Código:</b> 078329 <br> Conjunto marron.</p>
        </div>
        <div class="product-item" category="hombres">
            <img src="../img/art64.jpg" alt="">
            <p><b>$1,050.00&nbsp;Código:</b> 078311 <br>set 4 boxers Hollister.</p>
        </div> 


    </section>

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

      

<script src="../js/articulos.js"></script>
</body>
</html>