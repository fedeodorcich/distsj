$(document).ready(function(){


    $("#load-screen").fadeOut();


	$("#sidebar ul #cart-btn").click(function(){
        let nothing="Tu carrito está vacío (como tu kora prra >:'v')";
        $(".totalizer h5").empty();
		$("#modal-cart").fadeIn(getCart());
		$('#sidebar').addClass('hidder');
	});

    $("#sidebar ul #pedido-btn").click(function(){
        let nothing="Tu carrito está vacío (como tu kora prra >:'v')";
        $("#modal-pedido").fadeIn(getPedidos());
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
	
	$("#addpedido").click(function(){
        addToPedido();
        let alertita='<div class="alert alert-success importantez" role="alert">Carrito confirmado</div>';       
        $('body').append(alertita);
        $("#modal-cart").fadeOut();
    });
	
	//----------cierra modales------------------
	$(".close-product-modal").click(function(){
		$(".product-modal").fadeOut();
	});
	$(".close-cart-modal").click(function(){
		$("#modal-cart").fadeOut(function(){
			$("#list-cart").empty();
            $("#total-cart").empty();
		});
	});
    $(".close-pedidos-modal").click(function(){
        $("#modal-pedido").fadeOut(function(){
            $("#list-pedidos").empty();
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



//-------------obtener el carrito----------------------
function getCart(){
	$.ajax({
    url: 'getCart.php',
    type: 'POST',
    dataType:'JSON',
    data:{idUser},
    success: function(data){
        	if(data!=0){
                console.log(data);
                $("#list-cart").append(data['items']);
                $("#total-cart").fadeIn();
                $("#total-cart").append(' $ '+data['total']);
                detailsCart(data['items']);
        	}
        	else
        		console.log("carro vacio o no funcionó");
        }
    });
   
}

//---------------obtener los pedidos confirmados-------------
function getPedidos(){
    $.ajax({
    url: 'getPedidos.php',
    type: 'POST',
    data:{idUser},
    success: function(data){
            if(data!=0){
                $("#list-pedidos").append(data);
            }
            else
                console.log("pedidos vacio o no funcionó");
        }
    });
}

//----------------agregar a los pedidos--------------

function addToPedido(){
    $.ajax({
    url: 'addtopedidos.php',
    type: 'POST',
    data:{idUser},
    success: function(data){
            if(data==1){
                console.log("listorti");
                $("#list-cart , #total-cart , #modal-cart").fadeOut();
            }
            else
                console.log(data);
        }
    });
}




//--------funcionalidad para los distintos cosos del carrito----
function detailsCart(items){
    //---hacer un array con los precios unitarios tomando los valores del DOM
    let pricer = [];//aca se almacena el valor unitario
    let litotal = $("#list-cart li").length;
    let aux;
    //recibe los items del carrito y almacena sus datos del DOM en array
    for (let i = 0; i < litotal; i++)
    {
        aux = $('.totitem',items[i]).text();
        aux = aux.slice(2);//corta el signo peso
        let cant = $('.cant-input',items[i]).val();//obtiene la cantidad de prods 
        pricer [i] = parseFloat(aux/cant);//convierte a flotante la divison de total sobre cantidad
        console.log(pricer[i]);
    }
   
    $('.cant-input').click(function(){
        let cant = $(this).val();
        let nroitem=$($(this).closest('li')).index();
        $('.cant-input').change(function(){
                let totaler=0;
                cant= $(this).val();
                let item=$(this).closest('li');
                let indexer=$(item).index();
                $(".totitem").each(function(index) {
                    let auxer=parseFloat(($(this).text()).slice(2));
                    totaler=totaler+auxer;
                   
                });
                if(cant==0)
                {

                    $('.crosser-cart',item).fadeIn();
                    $('.totitem',item).text('$ 0');
                    

                }
                else{
                    $(".crosser-cart").fadeOut();
                    $('.totitem',item).text('$ '+pricer[indexer]*cant);
                    

                }
                if(totaler==0)
                {
                    $("#addpedido").fadeOut();
                }
                else
                {
                    $("#addpedido").fadeIn();
                }
                $("#total-cart").text('$ '+totaler);
        });
    });
    $(".crosser-cart").click(function(){
            let item = $(this).closest('li');
            let nro = item.index(); 
            deleteOfCart(nro);   
    });
                                                          
                        
}

function deleteOfCart(nro){
    console.log(nro);
    $.ajax({
    url: 'deleteItemCart.php',
    type: 'POST',
    data:{nro,idUser},
    success: function(data){
            if(data==1){
                $("#list-cart li:nth-child("+(nro+1)+")").fadeOut();
            }
            else
                console.log(data);
        }
    });
}