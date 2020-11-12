$(document).ready(function(){
    $("#login-btn").click(function(event){
    event.preventDefault();
    var user=$("#login-user").val();
    var pass=$("#login-pass").val();
    $.ajax({
            url: 'verif.php',
            type: 'POST',
            data:{user,pass},
            success: function(data){       
                if((data != 1)&&(data != 2))
                { 
                    $("#login").append(data).fadeIn();
                }
                else
                {
                    window.location.href="main.php";                    
                } 
            }
        });   
    });  



    //-------------------------AJAX PARA EL CARRITO---------------

    $("#addtocart").click(function(event){
    let id = $("#iduser").val();
    event.preventDefault();
    console.log(id);
    /*$.ajax({
            url: 'addtocart.php',
            type: 'POST',
            data:{user,producto,cantidad},
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
    });  */
});