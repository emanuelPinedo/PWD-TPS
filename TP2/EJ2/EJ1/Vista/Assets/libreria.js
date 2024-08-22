$(document).ready(function(){
    $("#form1").validate({
        rules: {
            numero: {
                required: true,
            }
        },
        messages: {
            numero: {
                required: "Este campo es obligatorio",
            }
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});