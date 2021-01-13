<?php

if (isset($_POST['entrar'])) {
	$nom = $_POST['nom'];
	echo "<br /> POST[nom] = " . md5($nom);
	$cognom = $_POST['cognom'];
	echo "<br /> POST[cognom] = " . md5($cognom);
	$psswd = $_POST['password'];
	echo "<br /> POST[password] = " . md5($psswd);
	$usuari = $_POST['usuari'];
	echo "<br /> POST[usuari] = " . $usuari;
	$edat = $_POST['edat'];
	echo "<br /> POST[edat] = " . $edat;
	$imatge = $_POST['imatge'];
	echo "<br /> POST[imatge] = " . $imatge;
	$comentari = $_POST['comentari'];
	echo "<br /> POST[comentari] = " . $comentari;
	$ocult = $_POST['ocult'];
	echo "<br /> POST[ocult] = " . $ocult;
    
    if (isset($_POST['actiu'])) {
        $actiu = $_POST['actiu'];
	    echo "<br /> POST[actiu] = " . $actiu;
	} else {
        echo "<br /> POST[actiu] = off";
    }
}
?>

<?php
if (empty($_POST['nom']) && (empty($_POST['cognom']) && (empty($_POST['password'])))) {
?>

<!DOCTYPE html>
<html>
   <head>
      <title>Exercici 4</title>
      <meta charset=UTF-8 />
      <meta name=viewport content="width=device-width, initial-scale=1.0" />
   </head>
   <body>
      <main>
         <form method=post>
            <fieldset>
              <legend>Inicia sessió</legend>
              <label>
                  <p>Nom: <input type=text name=nom /></p>
              </label>
              <label>
                  <p>Cognom: <input type=text name='cognom'/></p>
              </label>
              <label>
                <p>Passwd: <input type=password name='password' required="required"/></p>
              </label>
              <p> Usuari
              <input type=radio name=usuari value=Professor required="required">Profe
              <input type=radio name=usuari value=Alumne>Alumne
              </p>
              <p> Actiu <input type=checkbox name=actiu checked=true> </p>
              <p> Edat
                <select name=edat>
					<?php
						for ($i = 18; $i <= 99; $i++) {
						echo "<option value=$i>$i</option>";
					}
					?>
				</select>
		      </p>

             <label>
                <p>Foto <input type=file name=imatge></p>
             </label>

             <p> Comentaris </p>
             <textarea name=comentari rows=10 cols=40></textarea>
             <input type=hidden name=ocult value="prova"/>
              <p>
                  <input type=submit name=entrar value="Entrar"/>
                  <input type=reset name=esborrar value="Esborrar"/>
              </p>

            </fieldset>
         </form>
      </main>
   </body>
</html>

<?php
}
?>
