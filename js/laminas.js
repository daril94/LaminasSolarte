/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



// este codigo obtiene datos de la url
function getUrl(arg) {
    query = window.location.search.substring(1);
    q = query.split("&");
    vars = [];
    for (i = 0; i < q.length; i++) {
        x = q[i].split("=");
        k = x[0];
        v = x[1];
        vars[k] = v;
    }
    return vars[arg];
}

function cambiarDivPasos() {
    pasoAct = getUrl('paso');
    if (pasoAct == 1) {

        document.getElementById("linePasos1").style.height = '5px';
    }
    if (pasoAct == 2) {

        document.getElementById("linePasos2").style.height = '5px';
    }
    if (pasoAct == 3) {

        document.getElementById("linePasos3").style.height = '5px';
    }
    if (pasoAct == 4) {

        document.getElementById("linePasos4").style.height = '5px';
    }

}

function cambiarHoja() {
    pagAct = getUrl('hoja');
    if (pagAct == 1) {
        document.getElementById("h1").style.fontSize = 26 + 'px';
        document.getElementById("h1").style.width = 50 + 'px';
        document.getElementById("h1").style.height = 50 + 'px';
        document.getElementById("h1").style.background = '#777077';
    }
    if (pagAct == 2) {
        document.getElementById("h2").style.fontSize = 26 + 'px';
        document.getElementById("h2").style.width = 50 + 'px';
        document.getElementById("h2").style.height = 50 + 'px';
        document.getElementById("h2").style.background = '#777077';
    }

    if (pagAct == 3) {
        document.getElementById("h3").style.fontSize = 26 + 'px';
        document.getElementById("h3").style.width = 50 + 'px';
        document.getElementById("h3").style.height = 50 + 'px';
        document.getElementById("h3").style.background = '#777077';
    }

    if (pagAct == 4) {
        document.getElementById("h4").style.fontSize = 26 + 'px';
        document.getElementById("h4").style.width = 50 + 'px';
        document.getElementById("h4").style.height = 50 + 'px';
        document.getElementById("h4").style.background = '#777077';
    }
}

/*
 function guardarForm() {
 var formEnviar;
 formAct = getUrl('hoja');
 
 if (formAct === 1) {
 formEnviar = "form1";
 }
 if (formAct === 2) {
 formEnviar = "for2";
 }
 if (formAct === 3) {
 formEnviar = "form3";
 }
 if (formAct === 4) {
 formEnviar = "form4";
 }
 document.form(formEnviar).subtmit;
 alert("ME active");
 
 
 }*/

function muestra_oculta(id) {
    if (document.getElementById) { //se obtiene el id
        var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
        el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div

    }

}
window.onload = function () {/*hace que se cargue la funciÃ³n lo que predetermina que div estarÃ¡ oculto hasta llamar a la funciÃ³n nuevamente*/
    muestra_oculta('contenido'); /* "contenido_a_mostrar" es el nombre que le dimos al DIV */
};

