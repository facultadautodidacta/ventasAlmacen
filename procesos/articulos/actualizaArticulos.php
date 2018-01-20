<?php 

require_once "../../clases/Conexion.php";
require_once "../../clases/Articulos.php";

$obj= new articulos();

$datos=array(
		$_POST['idArticulo'],
	    $_POST['categoriaSelectU'],
	    $_POST['nombreU'],
	    $_POST['descripcionU'],
	    $_POST['cantidadU'],
	    $_POST['precioU']
			);

    echo $obj->actualizaArticulo($datos);

 ?>