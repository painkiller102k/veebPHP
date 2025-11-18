// checkbox
function valimuusikuid() {
    let v1 = document.getElementById("v1");
    let drake = document.getElementById("drake");
    let travis = document.getElementById("travis");
    let carti = document.getElementById("carti");
    let uzi = document.getElementById("uzi");
    let future = document.getElementById("future");

    let valik = "";
    if (drake.checked) {
        valik += drake.value + ", ";
    }
    if (travis.checked) {
        valik += travis.value + ", ";
    }
    if (carti.checked) {
        valik += carti.value + ", ";
    }
    if (uzi.checked) {
        valik += uzi.value + ", ";
    }
    if (future.checked) {
        valik += future.value + ", ";
    }
    v1.innerText = "Sa tead - " + valik;
}

// textarea
function arvamusLugemine(){
    let arvamus = document.getElementById("arvamus");
    let v2 = document.getElementById("v2");
    v2.innerText ="Sa mõtled muusika kuulamisest -" + arvamus.value;
}


// number
function tunnidLugemine() {
    let tunnid = document.getElementById("tunnid");
    let v3 = document.getElementById("v3");
    v3.innerText = "Sa kuulad muusikat päevas : " + tunnid.value;
}

// radio
function raadioLugemine() {
    let v4 = document.getElementById("v4");
    let ja = document.getElementById("ja");
    let ei = document.getElementById("ei");

    if (ja.checked) {
        v4.innerText = ja.value;
    } else if (ei.checked) {
        v4.innerText = ei.value;
    } else {
        v4.innerText = "Palun vali !";
    }
}

// text
function jaamadLugemine() {
    let jaamad = document.getElementById("jaamad");
    let v5 = document.getElementById("v5");
    v5.innerText = "Sa tead - " + jaamad.value;
}

// select - muusikastiil
function stiilLugemine() {
    let stiil = document.getElementById("muusikastiil");
    let v6 = document.getElementById("v6");
    v6.innerText = "Sa kuulad: " + stiil.value;
}

// puhasta
function puhasta() {
    let v1 = document.getElementById("v1");
    let v2 = document.getElementById("v2");
    let v3 = document.getElementById("v3");
    let v4 = document.getElementById("v4");
    let v5 = document.getElementById("v5");
    let v6 = document.getElementById("v6");

    let arvamus = document.getElementById("arvamus");
    let tunnid = document.getElementById("tunnid");
    let jaamad = document.getElementById("jaamad");
    let muusikastiil = document.getElementById("muusikastiil");

    document.getElementById("drake").checked = false;
    document.getElementById("travis").checked = false;
    document.getElementById("carti").checked = false;
    document.getElementById("uzi").checked = false;
    document.getElementById("future").checked = false;

    arvamus.value = "";
    tunnid.value = "";
    jaamad.value = "";
    muusikastiil.selectedIndex = 0;

    v1.innerText = "";
    v2.innerText = "";
    v3.innerText = "";
    v4.innerText = "";
    v5.innerText = "";
    v6.innerText = "";
}

