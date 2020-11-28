$(document).ready(function(){

	$("#sidebar ul #cart-btn").click(function(){
		$("#modal-cart").fadeIn(getCart());
		$('#sidebar').addClass('hidder');
	});

	var productId;
	var disponible;

	$("input[type='number']").inputSpinner();

	//------sidebar---------
	 $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('hidder');
    });


 
  	//--------------carrousell

	$(".owl-carousel").owlCarousel();

	//--------------------------

 	//-------------------carrito modal-----

 	
 	//--------------------------------------

	//------------abre el modal y sustituye la img
	$(".card.item").click(function(){
		let number=$(".card").index(this);
		productId = array[number].id;
		let img =$('img',this).attr('src');
		disponible = getDisponibles(productId);
		$(".product-modal div div img").attr('src',img).fadeIn(function(){
			$(".product-modal").fadeIn();
		});
	});
	//--------------------------------------------
	

	//------------llama a la funcion de agregar al carrito
	$("#addtocart").click(function(){
		 addToCart(productId,disponible);
		 $(".product-modal").fadeOut();
	});
	//------------------------------------------------
	
	
	
	//----------cierra modales------------------
	$(".close-product-modal").click(function(){
		$(".product-modal").fadeOut();
	});
	$(".close-cart-modal").click(function(){
		$("#modal-cart").fadeOut(function(){
			$("#list-cart").empty();
		});
	});
	//----------------------------------------


	//-----------------esta funcion obtiene la cantidad disponible por producto
	function getDisponibles(productId){
	 	$.ajax({
        	url: 'getDisponibles.php',
        	type: 'POST',
       	 	data:{productId},
        	success: function(data){
        		disponible= parseInt(data,10);
        		console.log(disponible);
        		$("#cant-cart").attr('max',disponible);
				$("#cant-cart").val(0);
        	}
    	});
	}





});




//--------------------agrega al carrito (ahora si funciona bien)

function addToCart(productId,disponible){
    let cant =  $("#cant-cart").val();
    console.log("Producto: "+productId+" - Cantidad: "+cant);
   		$.ajax({
        url: 'addtocart.php',
        type: 'POST',
        data:{idUser,productId,cant},
        success: function(data){      
            console.log(data); 
            if(data == 1)
            { 
            	console.log("funcionó");
            	reduceDisponibles(productId,disponible,cant);
            }
            else
            {
                console.log('no funcionó');                    
            } 
        }
    });  
}


//-------------una vez que se agregan ´productos al carrito esta funcion descuenta la cantidad de los disponibles

function reduceDisponibles(productId,disponible,cant){
	let upd=disponible-cant;
    console.log('funcionó la 1');
    console.log("quedan : "+upd);
    $.ajax({
    url: 'reduceDisponibles.php',
    type: 'POST',
    data:{productId,upd},
    success: function(data){
        	if(data==0){
        		console.log("fallo la 2");
        	}
        	else
        		console.log("funciono la 2");
        }
    });
}




function getCart(){
	$.ajax({
    url: 'getCart.php',
    type: 'POST',
    data:{idUser},
    success: function(data){
        	if(data!=0){
        		$("#list-cart").append(data);
        	}
        	else
        		console.log("no funciono");
        }
    });
}