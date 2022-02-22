<?php
if(isset($_POST['Nome'])) $Nome = $_POST['Nome'];
//echo $Nome;
?>

<html>

    <head>
        <meta charset="UTF-8">
        <title>Envio de dados via GET e POST</title>
    </head>

    <body>
        <form action="funcoes.php" method="post">
            <p>Digite seu nome<br></br><input type="text" name="Nome"></p>
            <p><input type="submit" name="enviar"></p>
        </form>
    </body>

</html>