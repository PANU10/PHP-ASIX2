<?php 
if(isset($_COOKIE['user'])) {

setcookie("user", "", time()-3600); 

echo "Cookie Destruido";
}
?>
<br /><br />
<a href="index.php">Home</a>
