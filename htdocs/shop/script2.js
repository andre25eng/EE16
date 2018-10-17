/* När webbsidan är färdigladdad kör start() */
window.onload = start;

function start() {

    /* Lyssna på klick på hela sidan */
    const elementKontainer = document.querySelector(".kontainer");
    elementKontainer.addEventListener("click", klick);

    /* Vad händer när man klickat på sidan? */
    function klick(e) {
        console.log("Nu har vi en klick event på " + e.target.nodeName);
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
        const elementAntalVaror = document.querySelector("#antalVaror");

        var antal = parseInt(elementAntal.textContent);
        var pris = parseInt(elementPris.textContent);
        var summa = parseInt(elementSumma.textContent);
        var korgen = parseInt(elementKorgen.textContent);
        var antalVaror = parseInt(elementAntalVaror.textContent);

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
            /* Läs av korgen */
            var summa = parseInt(elementSumma.textContent);
            var korgen = parseInt(elementKorgen.textContent);
            /* Retturera summan */
            korgen = korgen + summa;
            antalVaror = antalVaror + antal;
            elementKorgen.textContent = korgen;
            elementAntalVaror.textContent = antalVaror;
        }
    }
}
