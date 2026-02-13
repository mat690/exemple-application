<?php
require '../vendor/autoload.php';

use App\Serveur;
use App\Routeur;
use App\Imprimante ;


echo "<h1>Console de Supervision</h1>";

try {
    // ON ESSAYE (TRY) d'exécuter ce code dangereux

    $srvWeb = new Serveur("SRV-WEB", "192.168.1.10", "Debian");
    echo "<div style='color:green'>✅ " . $srvWeb->afficherStatut() . "</div>";

    // Tentative de création avec erreur
    echo "Tentative de création du serveur corrompu...<br>";
    $srvBad = new Serveur("SRV-BAD", "999.999.999.999", "Windows");
    // La ligne ci-dessous ne sera JAMAIS exécutée car ça plante juste avant
    echo "Ce message ne s'affichera pas.";

} catch (Exception $e) {
    // SI UNE ERREUR SURVIENT, on tombe ici
    // $e contient les infos sur l'erreur
    echo "<div style='background-color:#ffcccc; padding:10px; border:1px solid red; margin:10px;'>";
    echo "<strong>🛑 ALERTE SYSTÈME :</strong> " . $e->getMessage();
    echo "</div>";
}

echo "<p>Le script continue normalement après l'erreur...</p>";