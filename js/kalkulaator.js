function juhuslikPilt(){
    // massiiv piltidest
    const pildid = [
        'image/1.png',
        'image/2.png',
        'image/3.png',
        'image/4.png'
    ];
    // html failis määratud pilt kus id=pilt
    const pilt=document.getElementById('pilt');
    // esimene funktsioon Math.floor - ümardamine
    // teine funktsioon Math.Random - juhuslik arv
    // pildid lenght - elementide arv piltide massiivis
    const randomPilt=Math.floor(Math.random() * pildid.length);

    pilt.src=pildid[randomPilt];
}
function teeOmaValik(){
    let pilt=document.getElementById('pilt');
    let vastus=document.getElementById('vastus');
    let valikud=document.getElementsByName('valikud'); // mitu elemendi ühe nimega

    // tsükl for
    for(let i=0;i<valikud.length;i++){
        //if(valik){
        if(pilt.getAttribute('src')==valikud[i].value){
            vastus.innerHTML="Sinu vastus on õige !";
            vastus.style.color="green";
        } else{
            vastus.innerHTML="Mõtle veel, sa vastasid valesti !";
            vastus.style.color="red";
        }
    }
}

function arvuta(kogus, hind){
    return (kogus * hind).toFixed(2); // toFixed võtab kaks numbri peale koma
}

const tosineHind = 2.3;
const onnelikHind = 2.2;
const kummalineHind = 1;
const vihaneHind = 0;

function arvutaPildiHind(){
    let summa = document.getElementById('summa');
    let kogus = Number(document.getElementById('kogus').value);
    let src = document.getElementById('pilt').getAttribute('src');
    if (src == "image/1.png"){
        summa.innerHTML = arvuta(kogus, tosineHind) + " eur";
    }
    if (src == "image/2.png"){
        summa.innerHTML = arvuta(kogus, onnelikHind) + " eur";
    }
    if (src == "image/3.png"){
        summa.innerHTML = arvuta(kogus, kummalineHind) + " eur";
    }
    if (src == "image/4.png"){
        summa.innerHTML = arvuta(kogus, vihaneHind) + " eur";
    }
}

function juhuslikjook(){
    const pildidd = [
        'image/cola.png',
        'image/fanta.png',
        'image/pepper.png',
        'image/pepsi.png',
        'image/sprite.png'
    ];
    const image=document.getElementById('image');
    const randomImage=Math.floor(Math.random() * pildidd.length);

    image.src=pildidd[randomImage];
}


function jookvalik(){
    let image = document.getElementById('image');
    let vastuss = document.getElementById('vastuss');
    let valikudd = document.getElementsByName('valikudd');

    for(let i = 0; i < valikudd.length; i++){
        if(valikudd[i].checked){
            if(image.getAttribute('src') == valikudd[i].value){
                vastuss.innerHTML = "Sa valisid õige joogi !";
                vastuss.style.color = "green";
            } else{
                vastuss.innerHTML = "Sa valisid vale joogi !";
                vastuss.style.color = "red";
            }
        }
    }
}

function arvuta(koguss, price){
    return (koguss * price).toFixed(2);
}

const colaPrice = 2.3;
const fantaPrice = 2;
const pepperPrice = 0.5;
const pepsiPrice = 1.7;
const spritePrice = 2.2;

function arvutaJookHind() {
    let summaa = document.getElementById('summaa');
    let koguss = Number(document.getElementById('koguss').value);
    let src = document.getElementById('image').getAttribute('src');
    if (src == "image/cola.png") {
        summaa.innerHTML = arvuta(koguss, colaPrice) + " eur";
    }
    if (src == "image/fanta.png") {
        summaa.innerHTML = arvuta(koguss, fantaPrice) + " eur";
    }
    if (src == "image/pepper.png") {
        summaa.innerHTML = arvuta(koguss, pepperPrice) + " eur";
    }
    if (src == "image/pepsi.png") {
        summaa.innerHTML = arvuta(koguss, pepsiPrice) + " eur";
    }
    if (src == "image/sprite.png") {
        summaa.innerHTML = arvuta(koguss, spritePrice) + " eur";
    }
}

function rakendaJoogiSoodustus() {
    let summaa = document.getElementById('summaa');
    let koguss = Number(document.getElementById('koguss').value);
    let src = document.getElementById('image').getAttribute('src');

    if (src == "image/cola.png") {
        summaa.innerHTML = (koguss * colaPrice * 0.95).toFixed(2) + " eur";
    }
    if (src == "image/fanta.png") {
        summaa.innerHTML = (koguss * fantaPrice * 0.95).toFixed(2) + " eur";
    }
    if (src == "image/pepper.png") {
        summaa.innerHTML = (koguss * pepperPrice * 0.95).toFixed(2) + " eur";
    }
    if (src == "image/pepsi.png") {
        summaa.innerHTML = (koguss * pepsiPrice * 0.95).toFixed(2) + " eur";
    }
    if (src == "image/sprite.png") {
        summaa.innerHTML = (koguss * spritePrice * 0.95).toFixed(2) + " eur";
    }
}
