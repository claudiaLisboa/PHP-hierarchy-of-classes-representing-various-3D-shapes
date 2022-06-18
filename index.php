<?php
require_once('./Sphere.cls.php');
require_once('./Cylindre.cls.php');
require_once('./PaveDroit.cls.php');
require_once('./Cube.cls.php');

// Tableau avec deux instances de chacune des classes concrètes (8 objets en tout).
$formes = array(
    "sphere1" => new Sphere(2),
    "sphere2" => new Sphere(4),
    "cylindre1" => new Cylindre(2.25, 15.33),
    "cylindre2" => new Cylindre(4, 10),
    "pavedroit1" => new PaveDroit(1, 4, 9),
    "pavedroit2" => new PaveDroit(16, 4, 6),
    "cube1" => new Cube(6),
    "cube2" => new Cube(3)
);

// Cette fonction utilise la méthode comparerAvec de $forme1 pour la comparer avec $forme2.
function comparerFormes($forme1, $forme2)
{
    $result = $forme1->comparerAvec($forme2);
    return $result;
}

function afficherComparaison($forme1, $forme2)
{
    global $formes;

    $result = $formes[$forme1]->comparerAvec($formes[$forme2]);

    if ($result < 0) {
        echo "La forme " . $forme1 . " est plus grande que la forme " . $forme2 . ".<br/>";
    } elseif ($result > 0) {
        echo "La forme " . $forme1 . " est plus petite que la forme " . $forme2 . ".<br/>";
    } else {
        echo "Les formes " . $forme1 . " et " . $forme2 . " sont considerées égales.<br/>";
    }
}
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
    echo 'a) Contenu du tableau $formes:<br/>';
    echo "<ul>";
    foreach ($formes as $key => $value) {
        echo "<li>" . $key . " => " . $value . "</li>";
    }
    echo "</ul>";

    echo "<br/>";
    echo 'b) 3 comparaisons de formes différentes:<br/>';
    afficherComparaison("sphere2", "sphere1");
    afficherComparaison("cylindre1", "cylindre2");
    afficherComparaison("cube1", "cube2");

    echo "<br/>";
    echo 'c) Tableau $formes trié en ordre descendante:<br/>';
    // On trie $formes en ordre descendant avec la fonction de comparaison comparerFormes.
    uasort($formes, 'comparerFormes');

    // On affice le tableau trié. On montre aussi la valeur
    // de la superficie plus le volume de chaque forme
    // pour montrer que le tableau est bien trié.
    echo "<ul>";
    foreach ($formes as $key => $value) {
        echo "<li>" . $key . " => " . $value . " <small>--------> DEBUG: superficie + volume = " . ($value->obtenirSuperficie() + $value->obtenirVolume()) . "</small></li>";
    }
    echo "</ul>";
    ?>
</body>
</html>