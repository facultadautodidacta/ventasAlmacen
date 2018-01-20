<?php 
	require_once "../../clases/Conexion.php";
	require_once "../../clases/Categorias.php";
	$id=$_POST['idcategoria'];

	$obj= new categorias();
	echo $obj->eliminaCategoria($id);

 ?>