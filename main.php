<?php
include("conexbd.php");
session_start();
$id='';
$varsession=$_SESSION['user']; //-----------variable de session (user)
//$idsession= $_SESSION['id'];//------------variable de sesion (id)
if(($varsession==null)||($varsession==''))
{
    header('Location: index.html');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Distribuidora San Juan</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="font-awesome/css/all.min.css">
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<!---------------------------DE ACA SACO EL ID----------------->
<span style="display:none;" id="iduser"><?php //echo $idsession;?></span>
<!------------------------------------------------------------->

	<nav class="navbar navbar-expand-lg navbar-dark">
    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span></span>
                    </button>
  <a href="#" id="nav-logo">
  		<img src="img/logo-secondary.png" class="img-fluid">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div id="search-form">
   
    <form class="form-inline" >
      <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Búsqueda" aria-label="Search">
      <button class="btn btn-sm btn-light my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>

  

</nav>



<!---------------------------------------------BARRA DE OFERTAS------->











<!--div class="owl-carousel" id="mainer"-->

    <?php /*
               $statament = $conexion->prepare('SELECT * FROM producto INNER JOIN promo ON producto.id=promo.producto');
               $statament->execute();
               $resultado = $statament->fetchAll();
               foreach ($resultado as $row)
               {
                  echo $resultado['path'];
               }*/
               ?>

  <!---------------------ITEM------------------->
  
  <!---------------------ITEM------------------->
  <div>

  </div>
  <!---------------------ITEM------------------->
  <div>

  </div>
  <!---------------------ITEM------------------->
  <div>

  </div>
  <!---------------------ITEM------------------->
  <div>

  </div>
  <!---------------------ITEM------------------->
  <div>

  </div>
  <!---------------------ITEM------------------->
  <div>

  </div>

</div>














<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar" class="active">
            <span class="bg-info"><?php echo $varsession; ?></span>
            <ul class="list-items container">
                <li>
                    <a href="#"><i class="fas fa-shopping-cart"></i>Carrito</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-box-open"></i>Pedidos</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-envelope"></i>Contacto</a>
                </li>
            </ul>
            <form action="destroyer.php">
                <input type="submit" name="" id="session-destroyer" name="session-destroyer" style="display: none;">
                <label for="session-destroyer" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i>Cerrar Sesión</label>
            </form>
            

        </nav>

  <!-- -------------------------------------------------------Page Content  -->
    <div id="content">

            
      <div id="mainer" class="col-md-11 container" style="background-color: #ffffff; border-radius: 5px; padding: 20px 0; margin-top:2em;">


  <div class="card-deck" style="margin: 20px;">
    <h3 class="col-md-12">Ofertas</h3>
  <div class="card">
    <img src="img/products/natura1l.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h6 class="card-title">Aceite Natura 1L</h6>
      <p class="card-text text-success">$1260,15</p>
      <small class="text-muted">$200,00</small>
    </div>
  </div>
  <div class="card">
    <img src="img/products/coca.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h6 class="card-title">Coca-Cola 2L</h6>
      <p class="card-text text-success">$503,70</p>
      <small class="text-muted">$200,00</small>
    </div>
  </div>
  <div class="card">
    <img src="img/products/fanta.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h6 class="card-title">Fanta Naranja 2L</h6>
      <p class="card-text text-success">$300,45</p>
      <small class="text-muted">$200,00</small>
    </div>
  </div>
  <div class="card">
    <img src="img/products/jamoncrudo.jpeg" class="card-img-top" alt="...">
    <div class="card-body">
      <h6 class="card-title">Jamón Crudo Paladini</h6>
      <p class="card-text text-success">$300,45</p>
      <small class="text-muted">$200,00</small>
    </div>
  </div>
  <div class="card">
    <img src="img/products/mortadela.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h6 class="card-title">Mortadela Paladini</h6>
      <p class="card-text text-success">$300,45</p>
      <small class="text-muted">$200,00</small>
    </div>
  </div>
  
</div>

</div>



    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    












































<!---------------------------------------------MODAL DEL PRODUCTO--->

	<div id="product-modal">

		<div class="content row container">
			<div class="col-md-12" style="padding: 0;">
        <img src="" class="container text-center" style="max-width: 60%;">
      </div>
      
      <p class="description-product text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla tenetur quod animi unde. Dignissimos dolorem libero, ipsa quos blanditiis, assumenda.</p>

      <form class="col-md-12 row container text-center">

          <div class="col-md-6 row" style="margin: 0 auto; ">
              <p style="color: black; font-size: 15px;">Seleccione Cantidad: </p> 
               <select name="" id="" class="form-control form-control-sm selectmini">
              <option value="">1</option>
              <option value="">2</option>
              <option value="">3</option>
              <option value="">4</option>
              <option value="">5</option>
          </select>
          </div>
         
          <a href="#" class="btn btn-custom col" id="addtocart">Agregar al carrito</a>
         
      </form>


		</div>

      <!--a href="#" class="close-product-modal">
        <i class="fas fa-window-close" style="font-size:30px;"></i>
      </a-->

	</div>
<!--------------------------------------------------------------------->




	<footer>
		
	</footer>






	<script type="text/javascript" src="js/jquery.js"></script>
  <!-- Popper.JS -->
    <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>



    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>


</body>
</html>