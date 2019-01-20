<?php

echo "<h1>Exercice boucle d'images</h1>";

echo "<br><br><br><br><br>";

echo '<img src="image1.jpg" alt="image1" width="350">';

echo "<br>";

$i = 0;

while ($i < 5) {
    echo '<img src="image1.jpg" alt="image1" width="350">';
    $i++;
}

echo "<br>";

$i = 1;

while ($i <= 5) {
    echo "<img src='image$i.jpg' alt='image$i' width='350'>";
    $i++;
}


echo "<br>";

























?>