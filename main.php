<?php
include("conexbd.php");
session_start();
$id='';
$varsession=$_SESSION['user']; //-----------variable de session (user)
$idsession= $_SESSION['id'];//------------variable de sesion (id)
if(($varsession==null)||($varsession==''))
{
    header('Location: unauthorized.html');
}
else{
  require('getProd.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Distribuidora San Juan</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <!--------------------------CARROUSEL-------------------->
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.css">
  <!------------------------------------------------------->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="font-awesome/css/all.min.css">
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script>
  var array = <?php echo json_encode($ofertas)?>;
    var idUser = <?php echo $idsession?>;
</script>

</head>






<body>



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









<body>
    <div class="wrapper">
        <!-- - --------------------------------------------------- Sidebar  -->
        <nav id="sidebar" class="hidder">
            <span class="bg-info"><?php //echo $idsession; ?></span>
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



      
      

      <!-----------------------------------BARRA DE OFERTAS------------------->
      <div id="mainer" class="col-md-11 container" style="background-color: #ffffff; border-radius: 5px; padding: 20px 0; margin-top:2em;">

          <div class="" style="margin: 20px;">

            <h3 class="">Ofertas</h3>

              <div class="owl-carousel owl-theme">
                

              </div>

          </div>

      </div>
      <!------------------------------------------------------------------------>


</div>

<!---------------------------------------------MODAL DEL PRODUCTO--->

	<div class="product-modal">

		<div class="content row container">
			<div class="col-md-12" style="padding: 0;">
        <img src="" class="container text-center" style="max-width: 60%;">
      </div>
      
      <p class="description-product text-center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla tenetur quod animi unde. Dignissimos dolorem libero, ipsa quos blanditiis, assumenda.</p>

      <form class="col-md-12 row container text-center">

          <div class="col-md-6 row" style="margin: 0 auto;">
              <p style="color: black; font-size: 15px;">Seleccione Cantidad: </p> 
              <input id="cant-cart" class="form-control-sm" type="number" value="0" min="1" max="" step="1"/>
          </div>
         
          <a href="#" class="btn btn-custom col" id="addtocart">Agregar al carrito</a>
         
      </form>


		</div>

      <a href="#" class="close-product-modal">
        <i class="far fa-times-circle" style="font-size:30px;color: #ffffff;"></i>
      </a>

	</div>
<!--------------------------------------------------------------------->




	<footer>
		
	</footer>




<script src="js/jquery.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/spiner.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/owlresponsive.js"></script> 
<script src="js/main.js"></script>



</body>
</html>