$(document).ready(function(){
    $("#form7").validate({
        rules : {
            numero1 : {
                required : true,
                digits : true
            },
            numero2 : {
                required : true,
                digits : true
            },
            operacion : {
                required : true
            }

        },
        messages : {
            numero1 : {
                required : "Este campo es obligatorio",
                digits : "Solo se aceptan numeros"
            },
            numero2 : {
                required : "Este campo es obligatorio",
                digits : "Solo se aceptan numeros"
            },
            operacion : "Este campo es obligatorio"
        },
        submitHandler : function(form){
            form.submit();
        }
    });
});