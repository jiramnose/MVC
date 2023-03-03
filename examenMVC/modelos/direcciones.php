<?php

require '../bd/conexion_bd.php';

class funciones extends BD_PDO
{
	function Insertar($calle,$numext,$numint,$colonia,$ciudad,$pais,$cp){
		$this->Ejecutar_Instruccion("insert into tbl_direcciones(calle, num_ext, num_int, colonia, ciudad, pais, cp) values('".$_POST['txtcalle']."','".$_POST['txtnumext']."','".$_POST['txtnumint']."','".$_POST['txtcolonia']."','".$_POST['txtciudad']."','".$_POST['txtpais']."','".$_POST['txtcp']."')");
	}
	function Buscar($calle){
		$result = $this->Ejecutar_Instruccion("Select id_direccion, calle, num_ext, num_int, colonia, ciudad, pais, cp from tbl_direcciones where id_direccion like '%$$calle%'");
		return $result;
	}
	function Eliminar($id){
		$this->Ejecutar_Instruccion("delete from tbl_direcciones where id_direccion = '$id'");
	}
	function Modificar($id_direccion,$calle,$numext,$numint,$colonia,$ciudad,$pais,$cp){
		$this->Ejecutar_Instruccion("update tbl_direcciones set id_direccion='".$_POST['txtid_direccion']."',Calle='".$_POST['txtcalle']."', num_ext='".$_POST['txtnumext']."', num_int='".$_POST['txtnumint']."', Colonia='".$_POST['txtcolonia']."', Ciudad='".$_POST['txtcolonia']."', Pais='".$_POST['txtpais']."', Cp='".$_POST['txtcp']."' where id_direccion = '".$_POST['txtid_direccion']."'");
	}
}
?>