<?php 

	require '../modelos/direcciones.php';

	$obj = new funciones();
	
	@$buscar_id_direccion = $_POST['txtbuscar'];
	@$id_direccion = $_POST['txtid_direccion'];
	@$calle = $_POST['txtcalle'];
	@$numext = $_POST['txtnumext'];
	@$numint = $_POST['txtnumint'];
	@$colonia = $_POST['txtcolonia'];
	@$ciudad = $_POST['txtciudad'];
	@$pais = $_POST['txtpais'];
	@$cp = $_POST['txtcp'];

	if (isset($_POST['btninsertar'])){
		if($_POST['btninsertar']=='Insertar'){
			$obj->Insertar($calle,$numext,$numint,$colonia,$ciudad,$pais,$cp);
		}
		else{
			$obj->Modificar($id_direccion,$calle,$numext,$numint,$colonia,$ciudad,$pais,$cp);
		}
	}
	elseif (isset($_GET['id_modificar'])){
		$direccion_modificar = $obj->Buscar("select id_direccion, Calle, num_ext, num_int, Colonia, Ciudad, Pais, Cp from tbl_direcciones where id_direccion = '".$_GET['id_modificar']."'");			
	}
	elseif (isset($_GET['id_eliminar'])){
		$obj->Eliminar("delete from tbl_direcciones where id_direccion = '".$_GET['id_eliminar']."'");			
	}
	else if (isset($_POST['btnbuscar'])){
		$direcciones = $obj->Buscar("Select id_direccion, calle, num_ext, num_int, colonia, ciudad, pais, cp from tbl_direcciones where id_direccion like '%$buscar_id_direccion%'");
	}
	
	@$direcciones = $obj->Buscar($buscar_id_direccion);
	require '../vistas/cliente_direcciones.php';
?>