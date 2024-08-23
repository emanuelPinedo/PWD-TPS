$(document).ready(function(){
    $("#form3").validate({
        rules: {
            usuario: {
                required: true
            },
            clave: {
                required: true,
                minlength: 8,
                notEqualTo: "#usuario", // Validación adicional para la contraseña
                alphanumeric: true
            }
        },
        messages: {
            usuario: {
                required: "El nombre de usuario es obligatorio"
            },
            clave: {
                required: "La contraseña es obligatoria",
                minlength: "La contraseña debe tener al menos 8 caracteres",
                notEqualTo: "La contraseña no puede ser igual al nombre de usuario",
                alphanumeric: "La contraseña debe contener letras y números"
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });

    $.validator.addMethod("notEqualTo", function(value, element, param) {
        return this.optional(element) || value !== $(param).val();
    }, "La contraseña no puede ser igual al nombre de usuario");

    $.validator.addMethod("alphanumeric", function(value) {
        return /^[a-zA-Z0-9]+$/.test(value);
    }, "La contraseña debe contener letras y números");
});