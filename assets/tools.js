const popup = document.querySelector(".popup");
const buka = document.querySelector(".buka-undangan");

buka.addEventListener("click", function(){
    popup.style.display = "none";
});

const prmtr = new URLSearchParams(window.location.search);
const namaUndangan = prmtr.get('to');
console.log(namaUndangan);

const p = document.createElement('p');
const nodep = document.createTextNode(namaUndangan);
p.appendChild(nodep);

const tamu = document.getElementsByTagName('p')[0];
tamu.appendChild(p);