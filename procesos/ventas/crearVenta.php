<?php 
	session_start();
	require_once "../../clases/Conexion.php";
	require_once "../../clases/Ventas.php";
	$obj= new ventas();

	

	if(count($_SESSION['tablaComprasTemp'])==0){
		echo 0;
	}else{
		$result=$obj->crearVenta();
		unset($_SESSION['tablaComprasTemp']);
		echo $result;
	}
 ?>