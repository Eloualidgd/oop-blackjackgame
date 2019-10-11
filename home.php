<?php
/*
session_start();
$_SESSION['score'] = 0;
unset($_SESSION['player']);
unset($_SESSION['dealer']);
*/
?>
<!doctype html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
/* lo unico aqui es ensenar la pagina de start via action=game.php*/
<form action='game.php' method='get'>
    <input type='submit' value=Start game'>
</form>
</body>
</html>

