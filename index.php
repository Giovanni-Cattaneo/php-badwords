<?php 

var_dump($_GET)


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ciao</h1>

    <form action="script.php" method="post">
        <input type="text" name="phrase" placeholder="Inserisci una frase">
        <input type="text" name="badWord" placeholder="Inserisci una volgarità">
        <button type="submit">Invia</button>
    </form>
</body>
</html>