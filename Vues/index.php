<?php
require('../interface/BatiStructure.php');
require('../interface/BatiHome.php');
require('../FonctionMetier/Batiment.php');
require('../FonctionMetier/Maison.php');
require('../FonctionMetier/Immeuble.php');
require('../FonctionMetier/Cabane.php');

$construction = new Batiment("Batiment : Chez moi", 100, "maison", 3);

//echo "<p>";
echo $construction->getNom();
print $construction->getSuperficie();
print $construction->getType();
print $construction->getNbEtage();
print_r($construction->getNom());
//echo "</p>";

