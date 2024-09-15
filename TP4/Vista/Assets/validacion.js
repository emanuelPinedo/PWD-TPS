// Validación de nuevo auto
function validarAuto() {
  let valido = true;

  let patente = $("#patente");
  let marca = $("#marca");
  let modelo = $("#modelo");
  let dni = $("#dni");
  console.log("entró a la función");
  // Reiniciar clases
  patente.removeClass("is-invalid is-valid");
  marca.removeClass("is-invalid is-valid");
  modelo.removeClass("is-invalid is-valid");
  dni.removeClass("is-invalid is-valid");

  //Que la pantente reciba strings de la siguiente forma: "AAA 000"
  let regexPatente = /^[A-Za-z]{3} \d{3}$/;
  if (!regexPatente.test(patente.val())) {
    patente.addClass("is-invalid");
    valido = false;
  } else {
    patente.addClass("is-valid");
  }

  // Marca solo recibe letras y espacios
  let regexMarca = /^[A-Za-z\s]+$/;
  if (!regexMarca.test(marca.val())) {
    marca.addClass("is-invalid");
    valido = false;
  } else {
    marca.addClass("is-valid");
  }

  // Modelo solo recibe números enteros
  let regexModelo = /^\d+$/;
  if (!regexModelo.test(modelo.val())) {
    modelo.addClass("is-invalid");
    valido = false;
  } else {
    modelo.addClass("is-valid");
  }

  // DNI solo recibe 8 números enteros exactos
  let regexDni = /^\d{8}$/;
  if (!regexDni.test(dni.val())) {
    dni.addClass("is-invalid");
    valido = false;
  } else {
    dni.addClass("is-valid");
  }

  return valido;
}
