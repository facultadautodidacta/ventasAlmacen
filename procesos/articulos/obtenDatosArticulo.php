<?php 

	require_once "../../clases/Conexion.php";
	require_once "../../clases/Articulos.php";

	$obj= new articulos();


	$idart=$_POST['idart'];

	echo json_encode($obj->obtenDatosArticulo($idart));

 ?>