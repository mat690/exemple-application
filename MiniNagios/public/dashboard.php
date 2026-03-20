<?php
require '../vendor/autoload.php';
use App\ServeurRepository;
use App\Database;
$monPDO= \App\Database::getConnection();
$monRepository= new ServeurRepository($monPDO);

$montableau= $monRepository->listerTous();



// Connexion à la base
$connexion = \App\Database::getConnection();

// Instanciation du repository
$ServeurRepository = new ServeurRepository($connexion);

// Récupération des serveurs
$serveurs = $ServeurRepository->listerTous();

?>

