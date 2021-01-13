<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cognom 1</title>
</head>
<body>

    <p>Cognom anteriors:<b>

        <?php
        session_start();
        if(!empty($_SESSION['Cognom'])) {
        echo $_SESSION["Cognom"];
        }?>

    </p></b>

    <p>Escriu el teus Cognom:</p>

    <form action="cognoms-2.php" method="post">

    Cognom: <input type="text" name="Cognom"><br><br>
    <input type="submit" value="Guardar">
    <input type="reset" value="Esborrar">
    <br><br>
    <a href="index.html">Inici</a>

    </form>

</body>
</html>