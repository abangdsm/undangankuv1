const prmtr = new URLSearchParams(window.location.search);
const namaUndangan = prmtr.get('to');

const p = document.createElement('p');
const node = document.createTextNode(namaUndangan);
p.appendChild(node);

const tamu = document.getElementsByClassName('cardname')[0];
tamu.appendChild(p);

let cl = tamu.getElementsByTagName('p')[0];
cl.setAttribute('class', 'tamu');