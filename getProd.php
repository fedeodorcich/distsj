<?php 
	require("conexbd.php");

	$statement = $conexion->prepare("SELECT * FROM producto INNER JOIN promo ON producto.id=promo.producto");
 
	$statement->execute();

	$row = $statement->fetchAll();

	foreach ($row as $value)
	{
		
		echo '<div class="card">
			<span style="display:none;">'.$value['id'].'</span>	
    		<img src="'.$value['path'].'" class="card-img-top" alt="...">
    		<div class="card-body">
      		<h6 class="card-title">'.$value['nombre'].$value['marca'].'</h6>
      		<p class="card-text text-success">$'.$value['precio'].'</p>
      		<small class="text-muted">$'.$value['preciopromo'].'</small>
    		</div>
 		</div>';
	}
	

 ?>