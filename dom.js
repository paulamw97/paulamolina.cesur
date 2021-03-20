window.addEventListener("keydown", function (event) {

    event.preventDefault();

    var key = event.key || event.keyCode;
    if (key === "+") {
        document.querySelector("#texto").innerHTML = "+ PULSADA. Pulsa F1 para eliminar el mensaje.";
        if (keyTwice) {
            document.querySelector("#texto").innerHTML = "";
        }
        keyTwice = true;
        setTimeout(function () {
            keyTwice = 0;
        }, 1000);
    }

    if (key !== "+") {
        document.querySelector("#texto").innerHTML = "Pulsa + para ayuda.";
    }
});