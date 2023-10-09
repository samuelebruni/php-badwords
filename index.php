<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad Words</title>
</head>
<body>
    <form action="form.php" method="POST">
        <div>
            <label for="words">Digita qui il tuo testo</label>
            <input type="text" name="words" id="words">
        </div>
        <div>
            <label for="censoredword">Digita qui la parola da censurare</label>
            <input type="text" name="censoredword" id="censoredword">
        </div>
        <input type="submit">
    </form>

</body>
</html>