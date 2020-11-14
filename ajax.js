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



   
});