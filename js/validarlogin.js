function logear(){
    var usuario, contrasenia;
    usuario=document.getElementById(user).value;
    contrasenia=document.getElementById(clave).value;
    
    else if(usuario.length>20 || claves.length>20){
            alert("el usuario o clave son demasiados largos");
         return false;
    }
     else if(usuario==="" || contrasenia===""){
            alert("inserte texto");
         return false;
    }
}