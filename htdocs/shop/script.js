/* När webbsidan är färdigladdad kör start() */
window.onload = start;

function start() {
    
    /* Anslut till elementen */
    const elementTable = document.querySelector("table");
    console.log(elementTable);

    const elementPlus = document.querySelector("#plus")
    console.log(elementPlus);

    const elementMinus = document.querySelector("#minus")
    console.log(elementMinus);

    const elementKop = document.querySelector("#kop")
    console.log(elementKop);

    const elementAntal = document.querySelector("#antal");
    console.log(elementAntal);

    const elementSumma = document.querySelector("#summa");
    console.log(elementSumma);

    const elementPris = document.querySelector("#pris");
    console.log(elementPris);


    /* Lyssna på händelser */
    elementPlus.addEventListener("click", plus);
    elementMinus.addEventListener("click", minus);
    elementKop.addEventListener("click", kop);

    /* Hanterar antal varor */
    /* + varor */
    function plus() {
        /* Läs av antal varor */
        var antal = elementAntal.textContent;
        var summa = elementSumma.textContent;
        var pris = elementPris.textContent;

        /* Räkna upp */
        antal++;

        /* Räkna summan */
        summa = pris * antal;

        /* Skriva tillbaka */
        elementAntal.textContent = antal;
        elementSumma.textContent = summa;
    }
    /* - varor */
    function minus() {
        /* Läs av antal varor */
        var antal = elementAntal.textContent;
        var summa = elementSumma.textContent;
        var pris = elementPris.textContent;
        
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

    function kop() {
        /* Läs av korgen */
        var antal = elementAntal.textContent;

        /* Addera antal * summan */

        /* Retturera summan */


    }
}













