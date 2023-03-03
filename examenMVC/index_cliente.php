<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
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
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">compra y venta de</span>
                <span class="site-heading-lower">comics</span>
            </h1>
        </header>
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
		<div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index_cliente.php">Inicio</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="login.php">Inicio de sesión/Registrarse</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="cliente_categorias.php">Categorias</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="cliente_obras.php">Todos los productos</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="cliente_ventas.php">Vender</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                PERFIL
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="cliente_direcciones.php">Agregar dirección de envío</a>
                            <a class="dropdown-item" href="cliente_tarjetas.php">Agregar método de pago</a>
                            <a class="dropdown-item" href="logout.php">Cerrar sesión</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="assets/img/intro.jpg" alt="..." />
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-lower">en esta pagina encontraras los peores varhcars fibonaccios</span>
                        </h2>
                        <p class="mb-3">ECHALES UN VISTAZO</p>
                        <div class="intro-button mx-auto"><a class="btn btn-primary btn-xl" href="#!">Soy un botón, pero no sirvo para nada</a></div>
                    </div>
                </div>
            </div>
        </section>
<section class="page-section clearfix" >
<div class="container">
</div>
</section>
<footer class="footer text-faded text-center py-5">
<div class="container"><p class="m-0 small">HiramGonzálezMorán &copy; Comics 2022</p></div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>