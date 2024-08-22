$(document).ready(function(){
    $("#form2").validate({
        rules: {
            lunes: {
                required: true,
            },
            martes: {
                required: true,
            },
            miercoles: {
                required: true,
            },
            jueves: {
                required: true,
            },
            viernes: {
                required: true,
            }
        },
        messages: {
            lunes: {
                required: "Este campo es obligatorio",
            },
            martes: {
                required: "Este campo es obligatorio",
            },
            miercoles: {
                required: "Este campo es obligatorio",
            },
            jueves: {
                required: "Este campo es obligatorio",
            },
            viernes: {
                required: "Este campo es obligatorio",
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});