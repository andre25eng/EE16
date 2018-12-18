window.onload = start;

function start() {
    const eInput = document.querySelector("input");
    const eTextarea = document.querySelector("textarea");
    const eButton = document.querySelector("button");
    let url = "http://10.151.171.209/ajax/server.php";

    eButton.addEventListener("click", skicka);
    function skicka() {
        let ajax = new XMLHttpRequest();
        ajax.addEventListener("loadend", sparaData);
        function sparaData() {
            console.log(this.responseText);
        }
        ajax.open("POST", url, true);

        let formData = new FormData();
        formData.append("name", eInput.value);
        formData.append("meddelande", eTextarea.value);

        ajax.send(formData);
    }
}