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
                if(data == 0)
                { 
                    console.log(data);
                    $("#login").append(data).fadeIn();
                }
                else
                {
                    console.log(data);
                    
                }  
            }
        });   
    });
   
});