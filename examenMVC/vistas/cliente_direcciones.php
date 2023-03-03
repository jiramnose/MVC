<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>dou</title>
	    <meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	    <meta name="description" content="" />
	    <meta name="author" content="" />
	    <title>TIENDA ONLINE</title>
	    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
	    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
	    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
	    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
	    <link href="../css/styles.css" rel="stylesheet" />
</head>
<body>
    <header>
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">compra y venta de</span>
            <span class="site-heading-lower">dfsgsdfgsd</span>
        </h1>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
        <div class="container">
            <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.php">Start Bootstrap</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="../index.php">Inicio</a></li>
                    <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="../login.php">Inicio de sesión/Registrarse</a></li>
                </ul>
            </div>
        </div>
    </nav>
	<form action="../controladores/cliente_direcciones.php" method="post">
    <section class="page-section cta">
	<div class="container">
        <div class="col-xl-9 mx-auto">
            <span>
			<div class="cta-inner bg-faded text-center rounded">
	            <h2 class="section-heading mb-4">
	                <span class="section-heading-lower">Registrar direccion</span>
	            </h2>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6" hidden>
					<input type="text" id="txtid_direccion" name="txtid_direccion" class="form-control" placeholder="ID" value="<?php echo @$direccion_modificar[0][0]; ?>">
				</div>
				<div class="col-lg-3"></div>
			</div>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<input type="text" id="txtcalle" name="txtcalle" class="form-control" placeholder="Calle" value="<?php echo @$direccion_modificar[0][1]; ?>">
				</div>
				<div class="col-lg-3"></div>
			</div>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-3">
					<input type="text" id="txtnumext" name="txtnumext" class="form-control" placeholder="Número exterior" value="<?php echo @$direccion_modificar[0][2]; ?>">
				</div>
				<div class="col-lg-3">
					<input type="text" id="txtnumint" name="txtnumint" class="form-control" placeholder="Número interior" value="<?php echo @$direccion_modificar[0][3]; ?>">
				</div>
				<div class="col-lg-3"></div>
			</div>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<input type="text" id="txtcolonia" name="txtcolonia" class="form-control" placeholder="Colonia" value="<?php echo @$direccion_modificar[0][4]; ?>">
				</div>
				<div class="col-lg-3"></div>
			</div>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<input type="text" id="txtciudad" name="txtciudad" class="form-control" placeholder="Ciudad" value="<?php echo @$direccion_modificar[0][5]; ?>">
				</div>
				<div class="col-lg-3"></div>
			</div>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<input type="text" id="txtpais" name="txtpais" class="form-control" placeholder="Pais" value="<?php echo @$direccion_modificar[0][6]; ?>">
				</div>
				<div class="col-lg-3"></div>
			</div>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<input type="text" id="txtcp" name="txtcp" class="form-control" placeholder="Código postal" value="<?php echo @$direccion_modificar[0][7]; ?>">
				</div>
			</div><br>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="intro-button mx-auto">
					<input type="submit" id="btninsertar" name="btninsertar" class="btn btn-primary btn-l" value="<?php
						if (isset($_GET['id_modificar'])){
							echo 'Modificar';
						}
						else{
							echo 'Insertar';
						}?>" >
				</div>
				<div class="col-lg-3"></div>
			</div>
			</div>
		</div>		
	</div>
	</form>
	</div>
    </section>
    <section class="page-section clearfix" >
        <div class="container" align="center">
        </div>
    </section>
    <footer class="footer text-faded text-center py-5">
        <div class="container"><p class="m-0 small">HiramGonzálezMorán &copy; Comics 2022</p></div>
    </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../js/scripts.js"></script>
</body>
</html>