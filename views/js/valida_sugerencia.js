function valida_forma_sugerencia(){
    var v_name=document.getElementById("name").value.trim();
    var v_email=document.getElementById("email").value.trim();
    var v_sugerencia=document.getElementById("sugerencia").value.trim();

    if(v_name.length==0){
        alert("El campo Nombre no puede ir vacío");
        return false;
    }
    else if (v_email.length==0){
        alert("El campo email no puede ir vacío");
        return false;
    }
    else if (v_sugerencia.length==0){
        alert("El campo sugerencia no puede ir vacío");
        return false;
    }
}