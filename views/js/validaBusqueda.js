var patron_curp = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/;


function validaCampo(){
    var js_curp=document.getElementById("f_curp").value.trim();
    var js_ticket_id=document.getElementById("f_ticket_id").value.trim();

    if (js_curp.length == 0) {
        Swal.fire(
            'CURP',
            'El CURP no puede ir vacio',
            'question'
        );
        return false;
    } else if (!patron_curp.test(js_curp)) {
        Swal.fire({
            icon: 'error',
            title: 'CURP mal formado',
            text: 'El CURP esta mal formado, lo correcto es un patrón como el siguiente: GOKD981006HCLLWV07!',
            footer: '<a href="https://cec.cele.unam.mx/include/howToRFC.php">Necesita ayuda?</a>'
        });
        return false;
    } else if (js_ticket_id.length == 0) {
        Swal.fire(
            'Número ticket',
            'El número de ticket no puede ir vacío',
            'question'
        );
        return false;
    } 
}