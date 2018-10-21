<?php
// merlen
require 'Personnage.php';
require 'archer.php';
echo $_SESSION['username'];
$badr = new archer('badr');
var_dump($badr);
$merlin = new personnage("merlen");
var_dump($merlin->mort());
$merlin->regenerer(100);

var_dump($merlin->setNom('marr') );
echo $merlin->getNom();

// teste de soustraction 
$harry = new personnage("harry");
$harry->vie =0;
var_dump($harry->mort());
$merlin->attaque($harry);
var_dump($harry);
?>