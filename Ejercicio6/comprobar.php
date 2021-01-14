<?php
setcookie("Comprovar", "Cookies", time() + 3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprovar</title>
</head>
<body>
    <?php
    if(count($_COOKIE) > 0) {
        echo "Cookies are enabled.";
    } else {
        echo "Cookies are disabled.";
    }
    ?>
    <a href="index.php">Home</a>
    
</body>
</html>