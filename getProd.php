<?php 
	require("conexbd.php");

	$statement = $conexion->prepare("SELECT * FROM producto INNER JOIN promo ON producto.id=promo.producto");
 
	$statement->execute();

	$row = $statement->fetchAll();


  class Producto {

   			var $id;
   			var $disponible;
   			var $path;
   			var $nombre;
   			var $marca;
   			var $precio;
   			var $promo;

   		function __construct(){}

   		function setter($id,$disp,$path,$nombre,$marca,$precio,$promo){
   			$this->id = $id;
   			$this->disponible = $disp;
   			$this->path = $path;
   			$this->nombre = $nombre;
   			$this->marca = $marca;
   			$this->precio = $precio;
   			$this->promo = $promo;
   		}
   		function echoer(){
   			echo $id;
   			echo $disponible;
   			echo $path;
   			echo $nombre;
   			echo $marca;
   			echo $precio;
   			echo $promo;
   		}
	}

	

	$ofertas = array();

	foreach ($row as $value)
	{
		
		/*echo '<div class="card item">
			<span id="ider" style="display:none;">'.$value['id'].'</span>
			<span id="disp" style="display:none;">'.$value['disponible'].'</span>	
    		<img src="'.$value['path'].'" class="card-img-top" alt="...">
    		<div class="card-body">
      		<h6 class="card-title">'.$value['nombre'].' '.$value['marca'].'</h6>
      		<p class="card-text text-success">$'.$value['precio'].'</p>
      		<small class="text-muted">$'.$value['preciopromo'].'</small>
    		</div>
 		</div>';*/
		

		$producto = new Producto();
		
		$producto->setter($value['id'],$value['disponible'],$value['path'],$value['nombre'],$value['marca'],$value['precio'],$value['preciopromo']);

		array_push($ofertas,$producto);
 		
	}
	

 ?>