function AdministrarValidaciones() {
    //1.validacion de campos vacios
    //---------------------------------------------------------------
    //comienzo funcion sin formato para el alert
    // let campos: Array<string> = [
    //   "txtDni",
    //   "txtApellido",
    //   "txtNombre",
    //   "txtLegajo",
    //   "txtSueldo",
    // ];
    // for (let i: number = 0; i < campos.length; i++) {
    //   if (ValidarCamposVacios(campos[i]) == false) {
    //     alert("El campo: " + campos[i] + " se encuentra vacio!");
    //   }
    // }
    //fin funcion sin formato para el alert
    //---------------------------------------------------------------
    //comienzo funcion con formato para el alert
    var campos = ["Dni", "Apellido", "Nombre", "Legajo", "Sueldo"];
    for (var i = 0; i < campos.length; i++) {
        if (ValidarCamposVacios("txt" + campos[i]) == false) {
            alert("El campo " + campos[i] + " se encuentra vacio!");
        }
    }
    //fin funcion con formato para el alert
    //----------------------------------------------------------------
    //fin de validacion de campos vacios
    //2.validacion de campo Sexo
    var opcionesCboSexo = document.getElementById("cboSexo");
    for (var i = 0; i < opcionesCboSexo.length; i++) {
        if (opcionesCboSexo.options[i].selected) {
            if (!ValidarCombo(opcionesCboSexo.options[i].value, "---")) {
                alert("Debe seleccionar un sexo.");
            }
        }
    }
    //fin validacion de campo Sexo
    //3. validacion de campos turno y salario
    var resultado = ValidarRangoNumerico(parseInt(document.getElementById("txtSueldo").value), 8000, ObtenerSueldoMaximo(ObtenerTurnoSeleccionado()));
    if (!resultado) {
        alert("El valor para el salario ingresado es incorrecto.");
    }
    //fin validacion de campos turno y salario
}
function ValidarCamposVacios(valorRecibido) {
    var valor = document.getElementById(valorRecibido);
    var retorno = false;
    if (valor != null && typeof valor != "undefined") {
        if (valor.value != "") {
            retorno = true;
        }
    }
    return retorno;
}
function ValidarRangoNumerico(valorRecibido, min, max) {
    var retorno = true;
    if (valorRecibido != null && min != null && max != null) {
        if (valorRecibido < min) {
            retorno = false;
        }
        else if (valorRecibido > max) {
            retorno = false;
        }
    }
    return retorno;
}
function ValidarCombo(valorRecibido, valorIncorrecto) {
    var retorno = false;
    if (valorRecibido != null && valorIncorrecto != null) {
        if (valorRecibido != valorIncorrecto) {
            retorno = true;
        }
    }
    return retorno;
}
function ObtenerTurnoSeleccionado() {
    var turnos = document.getElementsByName("rdoTurno");
    var retorno = "";
    if (turnos != null && typeof turnos != "undefined") {
        for (var i = 0; i < turnos.length; i++) {
            if (turnos[i].checked) {
                retorno += turnos[i].value;
                break;
            }
        }
    }
    return retorno;
}
function ObtenerSueldoMaximo(valorRecibido) {
    var retorno = 0;
    if (valorRecibido != null) {
        if (valorRecibido == "mañana") {
            retorno = 20000;
        }
        else if (valorRecibido == "tarde") {
            retorno = 18500;
        }
        else if (valorRecibido == "noche") {
            retorno = 25000;
        }
    }
    return retorno;
}
