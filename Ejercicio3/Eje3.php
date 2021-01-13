<!DOCTYPE html>
<html>

  <head>
  <title> Ejercicio 3 </title>
  </head>

<body>
    <table border = '1'>

<?php
for ($i = 0;$i < 11;$i++) {
    switch ($i % 2) {
        case 0:
        case 2:
        case 4:
        case 6:
        case 8:
        case 10:
            echo "<tr bgcolor='#FAE07B'>";
            break;
        case 1:
        case 3:
        case 5:
        case 7:
        case 9:
            echo "<tr bgcolor='#FFC498'>";
            break;
    }
    
    if ($i == 0) {
        echo "<td bgcolor='#5499C8'></td>";
    } else {
        echo "<td bgcolor='#D2B4DF'>$i</td>";
    }

    for ($k = 50;$k < 61;$k++) {
        if ($i == 0) {
            echo "<td bgcolor='#D2B4DF'>$k</td>";
        } else {
            if ($k % $i) {
                echo "<td>-</td>";
            } else {
                echo "<td>*</td>";
            }
        }
    }
    
    echo "</tr>";
}
?>
