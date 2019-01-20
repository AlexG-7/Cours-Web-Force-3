<?php


// Afficher image1.jpg
echo '<img src="image1.jpg" width="350" />';

// Afficher image1.jpg 5 fois (boucle while)

$i = 0;
while ($i < 5) { // 0 - 1 - 2 - 3 - 4
    echo '<img src="image1.jpg" width="350" />';
    $i ++;
}

// Afficher les 5 images (boucle while)
$i = 1;
while ($i <= 5) { // 1 - 2 - 3 - 4 - 5
    echo '<img src="image' . $i . '.jpg" width="350" />';
    $i ++;
}
