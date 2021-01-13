<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dades</title>
</head>
<body>
    
    <p>Nom: <b>
        <?php
            if(!empty($_SESSION['Nom'])) {
                echo $_SESSION["Nom"];
        }
        ?> </p>
    </b>

    <p>Cogoms: <b>
        <?php
            if(!empty($_SESSION['Cognom'])) {
                echo $_SESSION["Cognom"];}
        ?> </p>
    </b>

    <form action="nom-2.php" method="post">

    <a href="index.html">Inici</a>

    </form>
    
</body>
</html>