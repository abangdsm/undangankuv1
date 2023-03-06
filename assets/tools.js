function table() {
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function (){
        document.getElementById("jlegek").innerHTML = this.responseText;
    }
    xhttp.open("GET", "hub.php");
    xhttp.send();
}

setInterval(function(){
    table();
}, 1);