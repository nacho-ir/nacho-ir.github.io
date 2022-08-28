/* DEFINICION DE FUNCIONES PARA MINISISTEMA PERSONAS */

function CheckForm() {
    // preparar mensaje y control de error
    mensaje = "ATENCION!!!... Ingrese:\n";
    error   = false;
    // capturar datos del formulario
    //id          = document.getElementById("dataID").value;
    nombre      = document.getElementById("dataNOM").value;
    direccion   = document.getElementById("dataDIR").value;
    telefono    = document.getElementById("dataTEL").value;
    departamento= document.getElementById("dataDTO").value;
    // validar datos
    if (nombre=="") {
        error   = true;
        mensaje = mensaje+"Nombre:\n";
    } // endif
    if (direccion=="") {
        error   = true;
        mensaje = mensaje+"Dirección:\n";
    } // endif
    if (telefono=="") {
        error   = true;
        mensaje = mensaje+"Teléfono no puede ser vacío:\n";
    } // endif
    if (telefono=="+598") {
        error   = true;
        mensaje = mensaje+"Teléfono no puede ser código de país:\n";
    } // endif
    if (isNaN(telefono)) {
        error   = true;
        mensaje = mensaje+"Teléfono debe ser numérico:\n";
    } // endif        
    if (departamento=="") {
        error   = true;
        mensaje = mensaje+"Departamento:\n";
    } // endif   
    // controlar error
    if (error) {
        // enviar mensaje
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("dataFRM").submit();
    } // endif
} // end function


function CheckID() {
    // preparar mensaje y control de error
    mensaje = "ATENCION!!!... Ingrese:\n";
    error   = false;
    // capturar datos del formulario
    id      = document.getElementById("dataID").value;
    // validar datos
    if (id=="") {
        error   = true;
        mensaje = mensaje+"ID de Persona:\n";
    } // endif
    if (isNaN(id)) {
        error   = true;
        mensaje = mensaje+"ID debe ser numerico:\n";
    } // endif
    if (error) {
        // enviar mensaje
        window.alert(mensaje);
    } else {
        // enviar formulario
        document.getElementById("dataFRM").submit();
    } // endif
} // end function

function SetPage(page){
    window.location = page;
}

function ConfirmDEL(){
    confirma = window.confirm("realmente desea eliminar el registro?");
    if (confirma){
        document.getElementById("dataFRM").submit();
    } else {
        SetPage('FormPersonasDEL.html');
    }
}