<?php

$teRadenGetal = rand(1, 100);
$aantalPogingen = 1;
$geraden = false;

echo "Raad een getal tussen 1 en 100:\n";

while (!$geraden) {
    $gok = readline("Jouw gok: ");
    $aantalPogingen++;

    if (!is_numeric($gok) || $gok < 1 || $gok > 100) {
        echo "Ongeldige invoer. Voer een getal tussen 1 en 100 in.\n";
        continue;
    }

    if ($gok < $teRadenGetal) {
        echo "Het te raden getal is groter.\n";
    } elseif ($gok > $teRadenGetal) {
        echo "Het te raden getal is kleiner.\n";
    } else {
        echo "Gefeliciteerd! Je hebt het juiste getal geraden in $aantalPogingen pogingen.\n";
      $geraden = true;  }
}

