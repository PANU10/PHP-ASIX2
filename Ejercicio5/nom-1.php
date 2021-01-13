<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nom1</title>
</head>

<body>

    <p>Nom anterior: <b>
        <?php
        session_start();
            if(!empty($_SESSION['Nom'])) {
            echo $_SESSION["Nom"];
        }
        ?>
    </p></b>

    <p>Escriu el teu nom:</p>

    <form action="nom-2.php" method="post">
    Nom: <input type="text" name="Nom">
    <br><br>
    <input type="submit" value="Guardar">
    <input type="reset" value="Esborrar">
    <br><br>
    <a href="index.html">Inici</a>
    </form>
    
</body>
</html>