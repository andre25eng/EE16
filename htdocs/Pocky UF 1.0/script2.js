/* När webbsidan är färdigladdad kör start() */
window.onload = start;

function start() {

    /* För att lagra alla köpta varor */
    var data = [];
    const elementAntalVaror = document.querySelector("#antalVaror");
    const elementTotal = document.querySelector("#total");
    const elementKassan = document.querySelector("#kassan");
    const elementTom = document.querySelector("#tom");

    /* Nollställ korgen */
    elementAntalVaror.value = 0;
    elementTotal.value = 0;
    elementKassan.value = "";

    /* Lyssan på klick på resetknappen */
    elementTom.addEventListener("click", tom);

    /* Töm korgen */

    function tom() {
        elementKassan.disabled = true;
        data = [];
    }

    /* Lyssna på klick på hela sidan */
    const elementKontainer = document.querySelector(".maindiv");
    elementKontainer.addEventListener("click", klick);

    /* Vad händer när man klickat på sidan? */
    function klick(e) {
        console.log("Nu har vi ett klick event på " + e.target.nodeName);
        /* Vad man klickat på */
        if (e.target.nodeName === "TD") {
            rakna(e.target);
        }
    }

    /* Beräkning */
    function rakna(cell) {
        console.log("Klick i en cell");

        const foralder = cell.parentNode.parentNode.parentNode.parentNode;
        const elementAntal = foralder.querySelector("#antal");
        const elementSumma = foralder.querySelector("#summa");
        const elementPris = foralder.querySelector("#pris");
        const elementKorgen = document.querySelector("#korgen");

        var antal = parseInt(elementAntal.textContent);
        var pris = parseInt(elementPris.textContent);
        var summa = parseInt(elementSumma.textContent);
        var total = parseInt(elementTotal.value);
        var antalVaror = parseInt(elementAntalVaror.value);

        /* Om man klickar #plus */
        if (cell.id === "plus") {
            /* Räkna upp */
            antal++;
            /* Räkna summan */
            summa = pris * antal;
            /* Skriva tillbaka */
            elementAntal.textContent = antal;
            elementSumma.textContent = summa;
        }

        /* Om man klickar #minus */
        if (cell.id === "minus") {
            /* Räkna ned om varo antal mer en 1 */
            if (antal > 1) {
            antal--;
            }
            /* Räkna summan */
            summa = pris * antal;
            /* Skriva tillbaka */
            elementAntal.textContent = antal;
            elementSumma.textContent = summa;
            }

        /* Om man klickar #kop */
        if (cell.id === "kop") {
            
            elementKassan.disabled = false;

            /* Retturera summan */
            total = total + summa;
            antalVaror = antalVaror + antal;
            elementTotal.value = total + " kr";
            elementAntalVaror.value = antalVaror;
            
            /* Spara undan korgen i den dålda inputen */
            data.push({
                "antal": antal, "summa": summa, "pris": pris
            });
            console.log(JSON.stringify(data));

            elementKorgen.value = JSON.stringify(data);

        }
    }
}
