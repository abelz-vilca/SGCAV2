$(document).ready(function () {

});

function verificar() {
    var v1 = 0;

    v1 = validacion('nombre');


    if (v1 == false) {
        return false;
    } else {
        return true;
    }
}

function validacion(campo) {

    //-------------------------------validacion nombres-------------------------------------//
    //-------------------------------validacion nombres-------------------------------------//
    //-------------------------------validacion nombres-------------------------------------//
    if (campo == 'nombre') {
        var nombre = document.getElementById(campo).value;
        if (nombre == null || nombre.length == 0 || /^\s+$/.test(nombre)) {
            $("#glypcn" + campo).remove();
            $('#' + campo).attr("class", "form-control is-invalid");
            $('#' + campo).parent().children('small').text("Debe ingresar el nombre de usuario").show();
            $('#' + campo).parent().children('label').attr("class", "text-danger");
            $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-times form-control-feedback-error' style='color: firebrick;'></i>");
            return false;

        }
        else {
            $("#glypcn" + campo).remove();
            $('#' + campo).attr("class", "form-control is-valid");
            $('#' + campo).parent().children('small').hide();
            $('#' + campo).parent().children('label').attr("class", "text-success");
            $('#' + campo).parent().append("<i id='glypcn" + campo + "' class='fa fa-check form-control-feedback' style='color: green;'></i>");
            return true;

        }
    }



}
