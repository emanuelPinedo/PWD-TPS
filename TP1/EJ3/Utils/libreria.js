$(document).ready(function(){
    $("#form3").validate({
    
        rules : {
            nombre : {
                required : true
            },
            apellido : {
                required :true
            },
            edad : {
                required :true
            },
            direccion : {
                required : true
            }
        },
        messages : {
            nombre : {
                required : "Este campo es obligatorio"
            },
            apellido : {
                required : "Este campo es obligatorio"
            },
            edad : {
                required : "Este campo es obligatorio"
            },
            direccion : {
                required : "Este campo es obligatorio"
            }
        },
        submitHandler : function(form){
            form.submit();
        }
    });
    });