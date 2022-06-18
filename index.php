<?php
require_once('./Sphere.cls.php');
?>
<html>

<head>
    <meta charset='utf-8'>
    <title>Exercice de classe #1</title>
</head>

<body>
    <h1>582-31B-MA - Programmation Web avancée – Groupe 21621</h1>
    <h2>Exercice de classe #1</h2>
    <?php
    $sphere1 = new Sphere(2);
    echo $sphere1 . "<br/>";

    $sphere2 = new Sphere(4);
    echo $sphere2 . "<br/>";

    $sphere3 = new Sphere(5);
    echo $sphere3 . "<br/>";

    $sphere4 = new Sphere(6);
    echo $sphere4 . "<br/>";
    ?>
</body>

</html>