$(document).ready(function(){
$("#form8").validate({

    rules : {
        edad : {
            required : true,
            digits : true
        },
        estudios : {
            required : true
        }
    },
    messages : {
        edad : {
            required : "Este campo es obligatorio",
            digits : "Este campo es obligatorio"
        },
        estudios : {
            required : "Este campo es obligatorio"
        }
    },
    submitHandler :  function(form){
        form.submit();
    }
});
});