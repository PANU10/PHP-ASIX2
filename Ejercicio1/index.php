<!DOCTYPE html>
<html lang="ES">
<head>
  <meta charset="utf-8"/>
  <title>Estructura HTML5</title>

<style>

  body {width: 80%;margin: auto;}

  header,nav,section,aside,footer {border: 1px solid black;float: left;}

  header {width: 100%;text-align: center;}

  header img {float: left;}

  nav {width: 100%;margin: 20px auto 20px auto;}

  section {width: 70%;min-height: 320px;display: inline-block;text-align: center;float: right;}

  iframe {border: 0;}

  aside {width: 29.2%;min-height: 320px;}

  footer {width: 100%;margin: 20px auto 20px;text-align: center;}

</style>
</head>

<body>

    <?php
        include 'header.php';
        include 'nav.php';
        include 'aside.php';
    ?>

    <section>
        <h2>Se puede Unidas Podemos !! </h2>
        <iframe width="460" height="215" src="https://www.youtube.com/embed/Y_nbEX7ExH0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </section>


    <?php
        include 'footer.php';
    ?>

</body>
</html>
