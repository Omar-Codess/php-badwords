<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="censor.php" method="GET">
        <h2>Inserisci un paragrafo</h2>
        <div>
            <input type="text" name="paragraph">
            <button type="submit">Invia</button>
            <button type="reset">Reset</button>
        </div>

        <h2>Inserisci una parola da censurare</h2>
        <div>
            <input type="text" name="badword">
            <button type="submit">Invia</button>
            <button type="reset">Reset</button>
        </div>
    </form>
</body>
</html>