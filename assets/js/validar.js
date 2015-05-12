function validar(){
    
    var usuario = $("#usuario").val();
    var pass = $("#pass").val();
    
    $.ajax({
        url:"../config/enviar.php",
        success:function(result){
            if(result =="true"){
               document.location.href="admin.php";    
            }else{
                $("#resultado").html("<div class='alert alert-danger' role='alert'><b>acceso denegado, </b>no se pudo comprobar el usuario</div>");
            }
        },
        data:{
            usuario:usuario,
            pass:pass
        },
        type:"POST"
    });

}