<?php
//Exécuteur du jeu

include 'Des.php';
include 'Joueur.php';
include 'Partie.php';

$loik = new Joueur("Loik", 0 , new Des(6,0));
$yalou = new Joueur("yalou", 0 , new Des(6,0));

$game = new Partie($loik,$yalou,5);
$game->lancerPartie();

