$(document).ready(function(){
    $("#login-btn").click(function(event){
    event.preventDefault();
    var user=$("#login-user").val();
    var pass=$("#login-pass").val();
    console.log(user);
    console.log(pass);
    $.ajax({
            url: 'verif.php',
            type: 'POST',
            data:{user,pass},
            success: function(data){      
                console.log(data); 
                if(data != 1)
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