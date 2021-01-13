<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destruir Session</title>
</head>
<body>

    <?php
        session_destroy();
    ?>

    <p>Dades esborrades amb èxit.</p>

    <a href="index.html">Inici</a>
    
</body>
</html>