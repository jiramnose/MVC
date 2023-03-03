<?php 
session_start();
?>
<!DOCTYPE html>
<html>
   <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>TIENDA ONLINE</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>
        </header>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">compra y venta de</span>
                <span class="site-heading-lower">comics</span>
            </h1>
        </header>
 <body>
 <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">Inicio</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="login.php">Inicio de sesión/Registrarse</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="venta.php">Venta</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="products.php">Productos</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="store.php">Catálago</a></li>
                    </ul>
                </div>
            </div>
        </nav>
 	<div id="wrapper">
  		<div id="linea-superior"> </div>	

  		 <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div  class="col-xl-9 mx-auto">
                        <div   class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper"></span>
                                <span class="section-heading-lower">REGISTRO</span>
                            </h2>
                            <span>
                            <div  class="registro" align="center">
                                <input id="correo" type="container" name="nombre" placeholder="Nombre(s)">
                                <p></p>
                                <input id="correo" type="container" name="nombre" placeholder="Apelido paterno">
                                <p></p>
                                <input id="correo" type="container" name="nombre" placeholder="Apellido materno">
                                <p></p>
                                <input  id="correo"  type="container" name="correo" placeholder="Correo electronico">
                                <p></p>
                                <input  id="correo"  type="container" name="contraseña" placeholder="Contraseña">
                            </div>
                        </span>
                        <span>
                            <div align="center">
                            <p></p>
                            <select id="correo"   name="list" id="sexo">
                                <option value="" disabled="" selected="" hidden="">Género</option>
                                <option value="">Masculino</option>
                                <option value="">Femenino</option>
                            </select>
                            <p> Fecha de nacimiento</p>
                            <input id="correo"   type="date" value="AAAA/MM/DD">
                            </div>
                            <div id="correo"   align="center">
                            </div>
                            <p></p>
                            <div><input type="button" id="button" name="button" value="Registrar usuario"></div>
                            <p>¿Deseas buscar un usuario ya regostrado?  <a href="buscar_us.php"> Buscar usuario</a> </p>
                        </div>
                    </span>
                    </div>
                </div>
            </div>
        </section>
</body>
</html>