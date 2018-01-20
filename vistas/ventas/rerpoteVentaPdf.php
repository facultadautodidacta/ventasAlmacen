<?php 
	require_once "../../clases/Conexion.php";
	require_once "../../clases/Ventas.php";

	$objv= new ventas();


	$c=new conectar();
	$conexion= $c->conexion();	
	$idventa=$_GET['idventa'];

 $sql="SELECT ve.id_venta,
		ve.fechaCompra,
		ve.id_cliente,
		art.nombre,
        art.precio,
        art.descripcion
	from ventas  as ve 
	inner join articulos as art
	on ve.id_producto=art.id_producto
	and ve.id_venta='$idventa'";

$result=mysqli_query($conexion,$sql);

	$ver=mysqli_fetch_row($result);

	$folio=$ver[0];
	$fecha=$ver[1];
	$idcliente=$ver[2];

 ?>	

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Reporte de venta</title>
 	<link rel="stylesheet" type="text/css" href="../../librerias/bootstrap/css/bootstrap.css">
 </head>
 <body>
 		<img src="../../img/ventas.jpg" width="200" height="200">
 		<br>
 		<table class="table">
 			<tr>
 				<td>Fecha: <?php echo $fecha; ?></td>
 			</tr>
 			<tr>
 				<td>Folio: <?php echo $folio ?></td>
 			</tr>
 			<tr>
 				<td>cliente: <?php echo $objv->nombreCliente($idcliente); ?></td>
 			</tr>
 		</table>


 		<table class="table">
 			<tr>
 				<td>nombre producto</td>
 				<td>Precio</td>
 				<td>Cantidad</td>
 				<td>Descripcion</td>
 			</tr>

 			<?php 
 			$sql="SELECT ve.id_venta,
						ve.fechaCompra,
						ve.id_cliente,
						art.nombre,
				        art.precio,
				        art.descripcion
					from ventas  as ve 
					inner join articulos as art
					on ve.id_producto=art.id_producto
					and ve.id_venta='$idventa'";

			$result=mysqli_query($conexion,$sql);
			$total=0;
			while($mostrar=mysqli_fetch_row($result)):
 			 ?>

 			<tr>
 				<td><?php echo $ver[3]; ?></td>
 				<td><?php echo $ver[4]; ?></td>
 				<td>1</td>
 				<td><?php echo $ver[5]; ?></td>
 			</tr>
 			<?php 
 				$total=$total + $ver[4];
 			endwhile;
 			 ?>
 			 <tr>
 			 	<td>Total=  <?php echo "$".$total; ?></td>
 			 </tr>
 		</table>
 </body>
 </html>