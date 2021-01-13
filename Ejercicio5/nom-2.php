<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nom 2</title>
</head>

<body>
   
    Nom Enregistrat: <b>

    <?php $_SESSION["Nom"] = $_POST["Nom"];
    echo $_SESSION["Nom"];
    ?></b> 
    
    <br><br>

<a href="index.html">Inici</a>

</body>
</html>