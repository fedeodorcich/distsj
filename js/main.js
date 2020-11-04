$(document).ready(function(){
	$("#to-reg").click(function(){
		$("#login").fadeOut(function(){
			$("#signup").fadeIn();
		});
	});
	$("#back-tolog").click(function(){
		$("#signup").fadeOut(function(){
			$("#login").fadeIn();
		});
	});

	$("#mainer .card-deck .card").click(function(){
		let img =$('img',this).attr('src');
		console.log(img);
		$("#product-modal div div img").attr('src',img).fadeIn(function(){
			$("#product-modal").fadeIn();
		});

		
	});
	$(".close-product-modal").click(function(){
		$("#product-modal").fadeOut();
	});

});