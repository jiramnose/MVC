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
	<?php 
		require 'bd/conexion_bd.php';

		$obj = new BD_PDO();
		
        @$buscar_id_direccion = $_POST['txtbuscar'];

		if (isset($_POST['btninsertar'])){
			if($_POST['btninsertar']=='Insertar'){
				$obj->Ejecutar_Instruccion("insert into tbl_direcciones(calle, num_ext, num_int, colonia, ciudad, pais, cp) values('".$_POST['txtcalle']."','".$_POST['txtnumext']."','".$_POST['txtnumint']."','".$_POST['txtcolonia']."','".$_POST['txtciudad']."','".$_POST['txtpais']."','".$_POST['txtcp']."')");
			}
			else{
				$obj->Ejecutar_Instruccion("update tbl_direcciones set id_direccion='".$_POST['txtid_direccion']."',Calle='".$_POST['txtcalle']."', num_ext='".$_POST['txtnumext']."', num_int='".$_POST['txtnumint']."', Colonia='".$_POST['txtcolonia']."', Ciudad='".$_POST['txtcolonia']."', Pais='".$_POST['txtpais']."', Cp='".$_POST['txtcp']."' where id_direccion = '".$_POST['txtid_direccion']."'");
			}
		}
		elseif (isset($_GET['id_modificar'])){
			$direccion_modificar = $obj->Ejecutar_Instruccion("select id_direccion, Calle, num_ext, num_int, Colonia, Ciudad, Pais, Cp from tbl_direcciones where id_direccion = '".$_GET['id_modificar']."'");			
		}
		elseif (isset($_GET['id_eliminar'])){
			$obj->Ejecutar_Instruccion("delete from tbl_direcciones where id_direccion = '".$_GET['id_eliminar']."'");			
		}
        else if (isset($_POST['btnbuscar'])){
          $direcciones = $obj->Ejecutar_Instruccion("Select id_direccion, calle, num_ext, num_int, colonia, ciudad, pais, cp from tbl_direcciones where id_direccion like '%$buscar_id_direccion%'");
        }
		
		@$direcciones = $obj->Ejecutar_Instruccion("Select id_direccion, Calle, num_ext, num_int, Colonia, Ciudad, Pais, Cp from tbl_direcciones where id_direccion like '%".$_POST['txtbuscar']."%'");
	?>
	<form action="direcciones.php" method="post">
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
					<input type="text" id="txtid_direccion" name="txtid_direccion" class="form-control" placeholder="ID" value="<?php echo @$direccion_modificar[0]['id_direccion']; ?>">
				</div>
				<div class="col-lg-3"></div>
			</div>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<input type="text" id="txtcalle" name="txtcalle" class="form-control" placeholder="Calle" value="<?php echo @$direccion_modificar[0]['Calle']; ?>">
				</div>
				<div class="col-lg-3"></div>
			</div>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-3">
					<input type="text" id="txtnumext" name="txtnumext" class="form-control" placeholder="Número exterior" value="<?php echo @$direccion_modificar[0]['num_ext']; ?>">
				</div>
				<div class="col-lg-3">
					<input type="text" id="txtnumint" name="txtnumint" class="form-control" placeholder="Número interior" value="<?php echo @$direccion_modificar[0]['num_int']; ?>">
				</div>
				<div class="col-lg-3"></div>
			</div>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<input type="text" id="txtcolonia" name="txtcolonia" class="form-control" placeholder="Colonia" value="<?php echo @$direccion_modificar[0]['Colonia']; ?>">
				</div>
				<div class="col-lg-3"></div>
			</div>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<input type="text" id="txtciudad" name="txtciudad" class="form-control" placeholder="Ciudad" value="<?php echo @$direccion_modificar[0]['Ciudad']; ?>">
				</div>
				<div class="col-lg-3"></div>
			</div>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<input type="text" id="txtpais" name="txtpais" class="form-control" placeholder="Pais" value="<?php echo @$direccion_modificar[0]['Pais']; ?>">
				</div>
				<div class="col-lg-3"></div>
			</div>
			<div class="row">
				<div class="col-lg-3"></div>
				<div class="col-lg-6">
					<input type="text" id="txtcp" name="txtcp" class="form-control" placeholder="Código postal" value="<?php echo @$direccion_modificar[0]['Cp']; ?>">
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
	<form>
    <section class="page-section cta">
		<div class="container">
	        <div class="col-xl-9 mx-auto">
	            <span>
				<div class="cta-inner bg-faded text-center rounded">
		            <h2 class="section-heading mb-4">
		                <span class="section-heading-lower">Busqueda de direcciones</span>
		            </h2><br>
			<div class="row">
				<div class="col-lg-4" style="text-align: right;">
					<label for="" class="control" >Direccion a buscar</label>
				</div>
				<div class="col-lg-4">
					<input type="text" id="txtbuscar" name="txtbuscar" class="form-control">
				</div>
				<div class="col-lg-2">
					<input type="submit" id="btnbuscar" name="btnbuscar"  value="Buscar" class="btn btn-primary btn-l">
				</div>
			</div>
			<br>
			<table class="table">
				<tr>
					<td>ID</td>
					<td>Calle</td>
					<td>Numero exterior</td>
					<td>Número interior</td>
					<td>Colonia</td>
					<td>Ciudad</td>
					<td>Pais</td>
					<td>Código postal</td>
					<td></td>
					<td></td>
				</tr>
				<?php foreach ($direcciones as $registro) { ?>
					<tr>
						<td><?php echo $registro['id_direccion']; ?></td>
						<td><?php echo $registro['Calle']; ?></td>
						<td><?php echo $registro['num_ext']; ?></td>
						<td><?php echo $registro['num_int']; ?></td>
						<td><?php echo $registro['Colonia']; ?></td>
						<td><?php echo $registro['Ciudad']; ?></td>
						<td><?php echo $registro['Pais']; ?></td>
						<td><?php echo $registro['Cp']; ?></td>
						<td><a href="direcciones.php?id_modificar=<?php echo $registro['id_direccion']; ?>">Modificar</a></td>
						<td><a href="direcciones.php?id_eliminar=<?php echo $registro['id_direccion']; ?>">Eliminar</a></td>
					</tr>
				<?php } ?>
			</table>
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
        <script src="js/scripts.js"></script>
</body>
</html>