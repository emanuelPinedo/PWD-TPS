$(document).ready(function(){
    $("#form3").validate({
    
        rules : {
            titulo : {
                required : true
            },
            actores : {
                required :true
            },
            director : {
                required :true
            },
            guion : {
                required : true
            },
            produccion : {
                required : true
            },
            anio : {
                required :true
            },
            nacionalidad : {
                required :true
            },
            genero : {
                required :true
            },
            duracion : {
                required :true
            },
            restricciones : {
                required :true
            },
            sinopsis : {
                required :true
            },
            imagen : {
                required :true
            }
        },
        messages : {
            titulo : {
                required : "Este campo es obligatorio"
            },
            actores : {
                required : "Este campo es obligatorio"
            },
            director : {
                required : "Este campo es obligatorio"
            },
            guion : {
                required : "Este campo es obligatorio"
            },
            produccion : {
                required : "Este campo es obligatorio"
            },
            anio : {
                required : "Este campo es obligatorio"
            },
            nacionalidad : {
                required : "Este campo es obligatorio"
            },
            genero : {
                required : "Este campo es obligatorio"
            },
            duracion : {
                required : "Este campo es obligatorio"
            },
            restricciones : {
                required : "Este campo es obligatorio"
            },
            sinopsis : {
                required : "Este campo es obligatorio"
            },
            imagen : {
                required : "Este campo es obligatorio"
            }
        },
        submitHandler : function(form){
            form.submit();
        }
    });
    });