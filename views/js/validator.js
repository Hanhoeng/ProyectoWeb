var patron_curp = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/;
var pattern2 = /^[a-zA-Z ]{3,30}?$/;
var pattern3 = /^[0-9]{10}?$/;
var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
var pwdpattern = /^(?=.*\d)(?=.*[#$@!%&*?])[A-Za-z\d#$@!%&*?]{8,}$/;

function valida_ticket() {
    var js_tramitante=document.getElementById("f_tramitante").value.trim();
    var js_curp=document.getElementById("f_curp").value.trim();
    var js_nombre=document.getElementById("f_nombre").value.trim();
    var js_paterno=document.getElementById("f_paterno").value.trim();
    var js_materno=document.getElementById("f_materno").value.trim();
    var js_telefono=document.getElementById("f_telefono").value.trim();
    var js_celular=document.getElementById("f_celular").value.trim();
    var js_correo=document.getElementById("f_correo").value.trim();
    var js_edad=document.getElementById("f_edad").value;
    var js_municipio=document.getElementById("f_municipio").value;
    var js_asunto=document.getElementById("f_asunto").value;


    if (js_tramitante.length == 0) {
        Swal.fire(
            'Nombre de tramitante',
            'El nombre del tramitante no puede ir vacio',
            'question'
        );
        return false;
    } else if (js_curp.length == 0) {
        Swal.fire(
            'CURP',
            'El CURP no puede ir vacio',
            'question'
        );
        return false;
    } else if (js_paterno.length == 0) {
        Swal.fire(
            'Apellido Paterno',
            'El paterno no puede ir vacio',
            'question'
        );
        return false;
    } else if (js_celular.length == 0) {
        Swal.fire(
            'Celular',
            'El celular no puede ir vacio',
            'question'
        );
        return false;
    } else if (js_telefono.length == 0) {
        Swal.fire(
            'Teléfono',
            'El teléfono no puede ir vacio',
            'question'
        );
        return false;
    } else if (js_correo.length == 0) {
        Swal.fire(
            'Correo',
            'El correo no puede ir vacio',
            'question'
        );
        return false;
    } else if (js_edad.length == 0) {
        Swal.fire(
            'Edad',
            'La edad no puede ir vacio',
            'question'
        );
        return false;
    } else if (js_municipio == 0){
        Swal.fire(
            'Municipio',
            'Municipio no puede ser 0',
            'question'
        );
        return false;
    }else if (js_asunto == 0){
        Swal.fire(
            'Asunto',
            'Asunto no puede ser 0',
            'question'
        );
        return false;

    } else if (!patron_curp.test(js_curp)) {
        Swal.fire({
            icon: 'error',
            title: 'CURP mal formado',
            text: 'El rfc esta mal formado, lo correcto es un patrón como el siguiente: GOKD981006HCLLWV07!',
            footer: '<a href="https://cec.cele.unam.mx/include/howToRFC.php">Necesita ayuda?</a>'
        });
        return false;


    } else if (!pattern2.test(js_nombre) || !pattern2.test(js_paterno) || !pattern2.test(js_materno)) {
        Swal.fire({
            icon: 'Error',
            title: 'Error Nombres',
            text: 'El Nombre, paterno y materno no puede llevar numeros y minimo son 3 caractéres.',
            footer: '<a href="#">Necesita ayuda ?</a>'
        });
        return false;

    } else if (!pattern3.test(js_telefono) || !pattern3.test(js_celular)) {
        Swal.fire({
            icon: 'Error',
            title: 'Error en Telefono o Celular',
            text: 'El teléfono o celular no cumple el formato requerido, por ejemplo: 8441916235',
            footer: '<a href="#">Necesita ayuda ?</a>'
        })
        return false;

    } else if (!emailPattern.test(js_correo)) {
        Swal.fire({
            icon: 'Error',
            title: 'Error en Correo',
            text: 'El correo no cumple el formato requerido, por ejemplo: alguien@dominio.com.mx ',
            footer: '<a href="#">Necesita ayuda ?</a>'
        });
        return false;


    } else if (js_materno.length == 0) {

        bootbox.confirm({
            title: "Materno?",
            message: "Estas seguro que no tienes apellido materno?",
            buttons: {
                cancel: {
                    label: '<i class="fa fa-times"></i> No seguro'
                },
                confirm: {
                    label: '<i class="fa fa-check"></i> Seguro'
                }
            },
            callback: function(result) {
                if (result) {
                    forma.submit();
                } else {
                    //document.getElementById("f_materno").focus();
                    $("#f_materno").focus();
                }
            }
        });
        return false;
    }
} //end function