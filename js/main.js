$(document).ready(function(){
	
	$("input[type='number']").inputSpinner();

	//------sidebar---------
	 $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('hidder');
    });

	//--------------carrousell

	$(".owl-carousel").owlCarousel();

	//--------------------------

	


	//-------------TRAE EL JSON-----------




	
    console.log(array);

  var ofertas = [];

  Object.keys(array).forEach(function(key) {
    card= '<div class="card item">'+
            //'<span id="ider" style="display:none;">'++'</span>'
            //'<span id="disp" style="display:none;">'++'</span>' 
            '<img src="'+array[key]['path']+'" class="card-img-top">'+
            '<div class="card-body">'+
            '<h6 class="card-title">'+array[key]['nombre']+' '+array[key]['marca']+'</h6>'+
            '<p class="card-text text-success">$'+array[key]['promo']+'</p>'+
            '<small class="text-muted">$'+array[key]['precio']+'</small>'+
            '</div>'+
            '</div>';
        ofertas.push(card);
 
  })
  

  $(".owl-carousel").append(ofertas);
 
 		
  		
  		










	//------------------------------------






	//--------------devuelve al login
	$("#back-tolog").click(function(){
		$("#signup").fadeOut(function(){
			$("#login").fadeIn();
		});
	});



	//------------abre el modal y sustituye la img
	$(".card.item").click(function(){
		let productId;
		let disponible;
		let img =$('img',this).attr('src');
		productId = $('#ider',this).html();
		disponible= $('#disp',this).html();

		showDisponible(disponible);

		$(".product-modal div div img").attr('src',img).fadeIn(function(){
			$(".product-modal").fadeIn();
		});


		


		if($(".product-modal").is(':visible'))
		{
			$("#addtocart").click(addToCart(productId));
		}
		


	});
	//--------------------------------------------
	



	
	//----------cierra modal------------------
	$(".close-product-modal").click(function(){
		$(".product-modal").fadeOut();
	});
	//----------------------------------------
});



function showDisponible(disponible){
	$("#cant-cart").attr('max',disponible);
	$("#cant-cart").val(0);
}


function addToCart(productId){
	let id = $("#iduser").html();
    let cant =  $("#cant-cart option:selected").html();
    console.log("Producto: "+productId+" - Cantidad: "+cant);
   		$.ajax({
        url: 'addtocart.php',
        type: 'POST',
        data:{id,productId,cant},
        success: function(data){      
            console.log(data); 
            if(data == 1)
            { 
                console.log('funcionó');
            }
            else
            {
                console.log('no funcionó');                    
            } 
        }
    });  
}
