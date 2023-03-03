<?php 
session_start();
if ($_SESSION['privilegio']=="admin") 
{
	echo'<script type="text/javascript">
    window.location.href="controlador/admin/admin.php";</script>';
}
if ($_SESSION['privilegio']=="cliente") 
{
	echo'<script type="text/javascript">
    window.location.href="controlador/cliente/cliente.php";</script>';
}
else
{
	echo'<script type="text/javascript">
    window.location.href="vistas/visitante.php";</script>';
}
?>