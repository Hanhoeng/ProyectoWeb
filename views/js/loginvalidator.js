function valida_login(){
    var js_user = document.getElementById("f_user").value.trim();
    var js_pass = document.getElementById("f_pwd").value.trim();

    if (js_user.length == 0) {
        Swal.fire(
            'Usuario',
            'El usuario no puede ir vacio'
        );
        return false;
    } else if (js_pass.length == 0) {
        Swal.fire(
            'Contraseña',
            'La contraseña no puede ir vacio'
        );
        return false;
    }
}