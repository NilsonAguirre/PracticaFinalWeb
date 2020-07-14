function validationEmail() {
    var form = document.getElementById("form");
    var email = document.getElementById("InputEmail").value;
    var text = document.getElementById("mytexte");
    var pattern = /^[^ ]+@[^ ]+\.[A-Za-z]{2,3}$/;

    if (email.match(pattern)) {
        form.classList.add("valide");
        form.classList.remove("invalide");
        text.innerHTML = "Correo valido";
        text.style.color = "#00ff00";
    } else {
        form.classList.remove("valide");
        form.classList.add("invalide");
        text.innerHTML = "Correo invalido";
        text.style.color = "#ff0000";
    }
    if (email == "") {
        form.classList.remove("valide");
        form.classList.remove("invalide");
        text.innerHTML = "";
        text.style.color = "#00ff00";
    }
}

function validationREmail() {
    var form = document.getElementById("formR");
    var email = document.getElementById("InputREmail").value;
    var text = document.getElementById("mytextRe");
    var pattern = /^[^ ]+@[^ ]+\.[A-Za-z]{2,3}$/;

    if (email.match(pattern)) {
        form.classList.add("valide");
        form.classList.remove("invalide");
        text.innerHTML = "Correo valido";
        text.style.color = "#00ff00";
    } else {
        form.classList.remove("valide");
        form.classList.add("invalide");
        text.innerHTML = "Correo invalido";
        text.style.color = "#ff0000";
    }
    if (email == "") {
        form.classList.remove("valide");
        form.classList.remove("invalide");
        text.innerHTML = "";
        text.style.color = "#00ff00";
    }
}

function validationPass() {
    var form = document.getElementById("form");
    var pass = document.getElementById("InputPass").value;
    var text = document.getElementById("mytextp");
    var pattern = /^[^ ][A-Za-z0-9]{3,10}$/;

    if (pass.match(pattern)) {
        form.classList.add("validp");
        form.classList.remove("invalidp");
        text.innerHTML = "Contraseña valida";
        text.style.color = "#00ff00";
    } else {
        form.classList.remove("validp");
        form.classList.add("invalidp");
        text.innerHTML = "Contraseña invalida";
        text.style.color = "#ff0000";
    }
    if (pass == "") {
        form.classList.remove("validp");
        form.classList.remove("invalidp");
        text.innerHTML = "";
        text.style.color = "#00ff00";
    }
}

function validationRPass() {
    var form = document.getElementById("formR");
    var pass = document.getElementById("InputRPass").value;
    var text = document.getElementById("mytextRp");
    var pattern = /^[^ ][A-Za-z0-9]{3,10}$/;

    if (pass.match(pattern)) {
        form.classList.add("validp");
        form.classList.remove("invalidp");
        text.innerHTML = "Contraseña valida";
        text.style.color = "#00ff00";
    } else {
        form.classList.remove("validp");
        form.classList.add("invalidp");
        text.innerHTML = "Contraseña invalida";
        text.style.color = "#ff0000";
    }
    if (pass == "") {
        form.classList.remove("validp");
        form.classList.remove("invalidp");
        text.innerHTML = "";
        text.style.color = "#00ff00";
    }
}

function validationText() {
    var formR = document.getElementById("formR");
    var name = document.getElementById("InputNombre").value;
    var textn = document.getElementById("mytextn");
    var apellido = document.getElementById("InputApellido").value;
    var texta = document.getElementById("mytexta");
    var pattern = /^[^ ][A-Za-z]{3,10}$/;

    if (name.match(pattern)) {
        formR.classList.add("validn");
        formR.classList.remove("invalidn");
        textn.innerHTML = "Campo valida";
        textn.style.color = "#00ff00";
    } else {
        formR.classList.remove("validn");
        formR.classList.add("invalidn");
        textn.innerHTML = "Campo invalida";
        textn.style.color = "#ff0000";
    }
    if (name == "") {
        formR.classList.remove("validn");
        formR.classList.remove("invalidn");
        textn.innerHTML = "";
        textn.style.color = "#00ff00";
    }
    if (apellido.match(pattern)) {
        formR.classList.add("valida");
        formR.classList.remove("invalida");
        texta.innerHTML = "Campo valida";
        texta.style.color = "#00ff00";
    } else {
        formR.classList.remove("valida");
        formR.classList.add("invalida");
        texta.innerHTML = "Campo invalida";
        texta.style.color = "#ff0000";
    }
    if (apellido == "") {
        formR.classList.remove("valida");
        formR.classList.remove("invalida");
        texta.innerHTML = "";
        texta.style.color = "#00ff00";
    }
}