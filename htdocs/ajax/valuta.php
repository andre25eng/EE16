<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Valuta omvandlare</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="kontainer">
        <h1>Valutaomvandlare</h1>
        <form>
            <label for="belopp">Belopp</label>
            <input type="text" id="belopp"">
            <label for="valuta">Valuta</label>
            <select id="valuta">
                <option>Välj valuta</option>
                <option value="RUB">Rubles</option>
                <option value="JPY">Yen</option>
                <option value="GBP">Pound</option>
                <option value="DKK">Danska Kroner</option>
                <option value="AUD">Australian Dollar</option>
                <option value="MXN">Peso</option>
                <option value="CHF">Swiss Franc</option>
                <option value="INR">Rupees</option>
                <option value="CDN">Canadian Dollar</option>
                <option value="EUR">Euros</option>
            </select>
            <label for="resultat">Resultat</label>
            <input id="resultat" type="text">
        </form>
    </div>
    <script src="./valuta.js"></script>
</body>
</html>