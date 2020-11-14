$(document).ready(function(){

	//------sidebar---------
	 $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
    });

	//--------------carrousell

	$(".owl-carousel").owlCarousel();
	$("#to-reg").click(function(){
		$("#login").fadeOut(function(){
			$("#signup").fadeIn();
		});
	});

	//--------------devuelve al login
	$("#back-tolog").click(function(){
		$("#signup").fadeOut(function(){
			$("#login").fadeIn();
		});
	});
	//------------abre el modal y sustituye la img
	$("#mainer .card-deck .card").click(function(){
		let img =$('img',this).attr('src');
		let productId = $('span',this).html();
		console.log(productId);
		$("#product-modal div div img").attr('src',img).fadeIn(function(){
			$("#product-modal").fadeIn();
		});

	//-------------------ajax para el carrito-----

		$("#addtocart").click(function(event){
    		let id = $("#iduser").html();
    		let cant =  $("#cant option:selected").html();
    		console.log(cant);
    		event.preventDefault();
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
    		});  


	//----------cierra modal
	});
	$(".close-product-modal").click(function(){
		$("#product-modal").fadeOut();
	});
});