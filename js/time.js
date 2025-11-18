function tana() {
    const now = new Date();

    const paev = now.getDate();
    const kuu = now.getMonth() + 1;
    const aasta = now.getFullYear();

    const tunnid = now.getHours();
    const minutid = now.getMinutes();
    const sekundid = now.getSeconds();

    const kuupaev = "Tänane kuupäev on: " + paev + "." + kuu + "." + aasta;
    const kellaaeg = "Praegune kellaaeg on: " + tunnid + ":" + minutid + ":" + sekundid;
    const kogu = "Tänane kuupäev ja kellaaeg: " + paev + "." + kuu + "." + aasta + " " + tunnid + ":" + minutid;

    console.log(kuupaev);
    console.log(kellaaeg);
    console.log(kogu);

    const valjund = document.getElementById("valjund");
    valjund.innerHTML = kuupaev + "<br>" + kellaaeg + "<br>" + kogu;
}

function sunnipaev() {
    const now = new Date();
    const synnipaev = new Date(2025, 9, 16);
    const diff = synnipaev - now;
    const Paevas = 24 * 60 * 60 * 1000;
    const paevadeArv = Math.ceil(diff / Paevas);
    const tekst = "Päevi sünnipäevani : " + paevadeArv;

    console.log(tekst);
    const valjund = document.getElementById("valjund");
    valjund.innerHTML = tekst;
}

