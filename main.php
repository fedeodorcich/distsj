<!DOCTYPE html>
<html>
<head>
	<title>Distribuidora San Juan</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="font-awesome/css/all.min.css">
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-custom">
  <a href="#" id="nav-logo">
  		<img src="img/logo-secondary.png" class="img-fluid">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div id="search-form">
   
    <form class="form-inline" >
      <input class="form-control form-control-sm mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-sm btn-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>

</nav>


	<!--div id="sidebar" class="container">
		<span>Usuario</span>
		<ul>
			<li><a href="">Carrito</a></li>
			<li><a href="">Mis Compras</a></li>
		</ul>

		<a href="" class="btn btn-danger">Cerrar Sesión</a>

	</div>
	
	<div id="banner" class="container">
		
	</div-->

<!---------------------------------------------BARRA DE OFERTAS------->

<div id="mainer" class="col-md-11 container" style="background-color: #ffffff; border-radius: 5px; padding: 20px 0; margin-top:2em;">


	<div class="card-deck" style="margin: 20px;">
    <h3 class="col-md-12">Ofertas</h3>
  <div class="card">
    <img src="img/products/aceite.jpg" class="card-img-top" alt="...">
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
    <img src="img/products/jamon.jpeg" class="card-img-top" alt="...">
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






<div>
  <div class="card col-md-2">
    <img src="img/products/mortadela.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h6 class="card-title">Mortadela Paladini</h6>
      <p class="card-text text-success">$300,45</p>
      <small class="text-muted">$200,00</small>
    </div>
  </div>
</div>







<!---------------------------------------------MODAL DEL PRODUCTO--->

	<div id="product-modal">
		<div class="content row container">
			<div class="col-md-8" style="padding: 0;">
        <img src="img/Lagos, Portugal.png" class="img-fluid container" style="border-radius:5px 0 0 5px; max-width: 70%;">
      </div>
      
      <div class="col-md-4" style="padding: 30px;">
        <h3>Producto 1</h3>
        <form action="">
          <div class="row">
            <span class="col-md-19 nopadding" style="margin-right:10px;">Seleccione la cantidad :</span>
            <select name="cantidad" id="cantidad" class=" form-control form-control-sm col-md-3 nopadding" style="margin-left:10px;">
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
               <option value="4">4</option>
               <option value="5">5</option>
            </select>
          </div>
        </form>
        <div class="col-md-8 container text-center">
           <button class="btn btn-custom col-md-12" style="margin-top: 10px;">Comprar</button>
           <button class="btn btn-custom col-md-12" style="margin-top: 10px;">Agregar al Carrito</button>
        </div>
        <div id="description-product">
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, eum eos velit vero natus tempora quisquam labore maxime ipsum perferendis a libero temporibus molestias voluptatibus reiciendis nobis. Doloremque sapiente iure maiores sed consequuntur repellendus optio illum laudantium corporis recusandae omnis velit placeat veritatis nulla, perspiciatis quos aperiam dolor? Alias iusto vel consectetur officia explicabo quas architecto tenetur optio laboriosam deserunt ullam dolorem, voluptatibus nihil. Ratione, quasi recusandae officiis qui! Similique iusto quidem dicta praesentium velit dolorum sapiente itaque sequi deleniti, odio, laborum aliquam cumque dolorem nulla exercitationem natus maiores dolores tempora, nobis voluptate libero. Corporis doloremque, in saepe itaque pariatur!</p>
        </div>       
      </div>
		</div>

      <a href="#" class="close-product-modal">
        <i class="fas fa-window-close" style="font-size:30px;"></i>
      </a>

	</div>


	<footer>
		
	</footer>


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>

</body>
</html>