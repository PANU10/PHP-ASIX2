<?php
$durada=10;
if(isset($_POST['submit'])) {

setcookie("user", $_POST['durada'], time()+ $durada);

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Cookies</title>
</head>
<body>
    
    <h1>Cookies: Creació i destrtucció</h1>
    
    <?php
    echo "Cookies creada. Es destruirà en " . $_POST['durada'] . "Segons <br>";
    ?>
    
    <table>
    <form action=index.php method = "post">
        <ul>
            <li>Crear una Cookie amb una duració de: <input type = "text" name ="durada">segons (entre 1 y 60) <input type = "submit" value = "Crear"></li>
    </form>
    <form action=comprobar.php method = "post">
            <li>Comprovar la cookie <input type = "submit" value = "Comprovar"></li>
    </form>
    <form action=eliminar.php method = "post">
            <li>Destruir la cookie<input type= "submit" value = "Destruir"></li>
        </ul>
    </form>
    </table>

</body>
</html>