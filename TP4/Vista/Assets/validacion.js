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

// Validación de nueva persona
function validarPersona() {
  let valido = true;

  let nroDni = $("#NroDni");
  let apellido = $("#Apellido");
  let nombre = $("#Nombre");
  let fechaNac = $("#fechaNac");
  let telefono = $("#Telefono");
  let domicilio = $("#Domicilio");

  // Reiniciar clases
  nroDni.removeClass("is-invalid is-valid");
  apellido.removeClass("is-invalid is-valid");
  nombre.removeClass("is-invalid is-valid");
  fechaNac.removeClass("is-invalid is-valid");
  telefono.removeClass("is-invalid is-valid");
  domicilio.removeClass("is-invalid is-valid");

  // recibe exactamente 8 números
  let regexDni = /^\d{8}$/;
  if (!regexDni.test(nroDni.val())) {
    nroDni.addClass("is-invalid");
    valido = false;
  } else {
    nroDni.addClass("is-valid");
  }

  // Apellido solo recibe letras y espacios
  let regexApellido = /^[A-Za-z\s]+$/;
  if (!regexApellido.test(apellido.val())) {
    apellido.addClass("is-invalid");
    valido = false;
  } else {
    apellido.addClass("is-valid");
  }

  // Nombre solo recibe letras y espacios
  let regexNombre = /^[A-Za-z\s]+$/;
  if (!regexNombre.test(nombre.val())) {
    nombre.addClass("is-invalid");
    valido = false;
  } else {
    nombre.addClass("is-valid");
  }

  // verifica que la fecha no esté vacia
  if (!fechaNac.val()) {
    fechaNac.addClass("is-invalid");
    valido = false;
  } else {
    fechaNac.addClass("is-valid");
  }

  // solo recibe números, de entre 7 y 15 dígitos
  let regexTelefono = /^\d{7,15}$/;
  if (!regexTelefono.test(telefono.val())) {
    telefono.addClass("is-invalid");
    valido = false;
  } else {
    telefono.addClass("is-valid");
  }

  //acepta letras, números y algunos caracteres especiales
  let regexDomicilio = /^[A-Za-z0-9\s.,-]+$/;
  if (!regexDomicilio.test(domicilio.val())) {
    domicilio.addClass("is-invalid");
    valido = false;
  } else {
    domicilio.addClass("is-valid");
  }

  return valido;
}
