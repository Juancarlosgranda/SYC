function validar(){
  var nombre, correo, telef, usuario,claves,clave_2, expresion;
    
    nombre= document.getElementById(nombre).value;
    correo= document.getElementById(correo).value;
    telef= document.getElementById(telef).value;
    usuario= document.getElementById(usuario).value;
    claves= document.getElementById(claves).value;
    clave_2= document.getElementById(clave_2).value;
    
    expresion=/\w+@\w+\.+[a-z]/;
    
    if(nombre===""|| correo===""||telef===""||usuario===""||claves===""||clave_2===""){
        alert("No deben existir campos vacios");
        return false;
    }
    else if(claves!=clave_2){
       alert("Las contraseñas ingresadas no coinciden");
        return false;
       }
    else if(nombre.length>80){
        alert ("Los nombres son demasiado largos");
        return false;
    }
    else if(correo.length>100){
            alert("el correo es demasiado largo");
        return false;
            }
    else if(!expresion.test(correo)){
        alert("El correo no es válido");
        return false;
    }
     else if(usuario.length>20 || claves.length>20){
            alert("el usuario o clave son demasiados largos");
         return false;
            }
    else if(telef.length>20){
            alert("el teléfono es demasiado largo");
         return false;
            }
     else if(isNaN(telef)){
            alert("el teléfono ingresado no debe contener caracteres que no sean dígitos");
         return false;
            }
}