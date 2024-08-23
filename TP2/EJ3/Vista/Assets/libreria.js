$(document).ready(function(){
    $("#form3").validate({
        rules: {
            usuario: {
                required: true,
                onlyLetras: true,
                notEqualTo2: "#clave"
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
                required: "El nombre de usuario es obligatorio",
                onlyLetras: "El nombre del usuario solo debe contener letras",
                notEqualTo2: "El nombre del usuario no puede ser igual a la clave"
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

    $.validator.addMethod("notEqualTo2", function(value, element, param) {
        return this.optional(element) || value !== $(param).val();
    }, "El nombre del usuario no puede ser igual a la clave");

    $.validator.addMethod("alphanumeric", function(value) {
        return (/^[a-zA-Z]/.test(value) && /[0-9]/.test(value)) || (/^[0-9]/.test(value) && /[a-zA-Z]/.test(value));
    }, "La contraseña debe contener letras y números");

    $.validator.addMethod("onlyLetras", function(value) {
        return /^[a-zA-Z]+$/.test(value);
    }, "El nombre del usuario solo debe contener letras");
});