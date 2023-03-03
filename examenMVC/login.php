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
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="index.php">< Regresar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <?php 
        require 'bd/conexion_bd.php';
        $obj = new BD_PDO();
        if (isset($_POST['btniniciar'])) 
        {
            $u = $_POST['txtusuario'];
            $c = $_POST['txtcontrasena'];
            $usuario = $obj->Ejecutar_Instruccion("Select * from tbl_usuarios where correo='$u' and contrasena='$c'");
            if (@$usuario[0][0]>0)
            {
                echo '<script>alert("Bienvenido");</script>';
                $_SESSION['privilegio'] = $usuario[0][4];
                $_SESSION['nombre'] = $usuario[0][1]." ".$usuario[0][2]." ".$usuario[0][3];
                header("Location: index.php");
            }
            else
            {
                echo '<script>alert("Usuario NO encontrado");</script>';
            }
        }
     ?>
     <form action="login.php" method="post">
     <section class="page-section cta">
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <div class="cta-inner bg-faded text-center rounded">
                            <h2 class="section-heading mb-4">
                                <span class="section-heading-upper">INICIO DE SESIÓN</span>
                                <span class="section-heading-lower"></span>
                            </h2>
                            <span>
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                <input type="text" id="txtusuario" name="txtusuario" placeholder="Correo">
                                <P>
                                <p>
                                <input type="password" id="txtcontrasena" name="txtcontrasena" placeholder="Contraseña" autocomplete="off">
                            </div>
                        </span>
                        <span>
                            <input type="submit" id="btniniciar" name="btniniciar" value="Iniciar sesión">
                            <p><p> ¿No tienes usuario registrado?<a href="signup.php"> Registrar</a>
                        </div>
                    </span>
                    </div>
                </div>
            </div>
        </section>
    </form>
  </div>
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
</body>
</html>