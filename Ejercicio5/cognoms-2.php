<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cognom 2</title>
</head>
<body>

    Cognoms Enregistrat:
    <b>
    <?php $_SESSION["Cognom"] = $_POST["Cognom"];
    echo $_SESSION["Cognom"];?>
    </b>

    <br><br>

    <a href="index.html">Inici</a>
</body>
</html>