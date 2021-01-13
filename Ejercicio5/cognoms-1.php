<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cognom 1</title>
</head>
<body>

    <p>Cognoms anteriors:<b>

    <?php
    session_start();
    if(!empty($_SESSION['cognoms'])) {
    echo $_SESSION["Cognoms"];
    }?>
    </p>
    </b>

    <p>Escriu el teus Cognnoms:</p>

    <form action="cognoms-2.php" method="post">

    Cognoms: <input type="text" name="Cognom"><br><br>
    <input type="submit" value="Guardar">
    <input type="reset" value="Esborrar">
    <a href="index.html">Inici</a>

</form>
</body>
</html>