<?php
require_once('./Sphere.cls.php');
?>
<html>

<head>
    <meta charset='utf-8'>
    <title> Hierarchy of class representing various 3D shapes</title>
</head>

<body>
    <h1>PHP - class</h1>
    <h2></h2>
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