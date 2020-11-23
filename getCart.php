<?php 

	$idUser=$_POST['idUser'];

	require("conexbd.php");

	$statement = $conexion->prepare("SELECT * FROM producto INNER JOIN carro ON carro.id_usuario=$idUser AND carro.producto=producto.id");
 
	$statement->execute();

	$row = $statement->fetchAll();

	

	foreach ($row as $value)
	{
		
		echo '<li class="list-group-item row" style="float: left;">
                <div class="col-md-2">
                    <img src="'.$value['path'].'" class="img-fluid">
                </div>
                <div class="col-md-10 row">
                    <p class="col-md-8">'.$value['nombre'].''.$value['marca'].'</p>
                    <span class="col-md-2">'.$value['cantidad'].'</span>
                    <span class="col-md-2">'.($value['cantidad']*$value['precio']).'</span>
                </div>
            </li>';	
	}

 ?>