<?php
require '../vendor/autoload.php';
use App\Serveur;

echo "<a href='ajouter_machine.php'>&larr; Retour au formulaire</a><hr>";

// Vérification de la méthode d'envoi
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Récupération des données
    $nom = $_POST['hostname'];
    $ip  = $_POST['ip'];
    $os  = $_POST['os'];

    echo "<h3>Résultat du provisionning :</h3>";

    // 2. Tentative de création (Code "Naïf")
    // ATTENTION : Si le constructeur lance une Exception, le script plantera ici !

    try{
        $nouveauServeur = new Serveur($nom, $ip, $os);
    }
    catch (Exception $e){

    }
    ;

    // Si tout va bien, on affiche le succès
    echo "<div style='color:green; border: 1px solid green; padding: 10px;'>";
    echo "✅ Succès ! <br>";
    echo $nouveauServeur->afficherStatut();
    echo "</div>";

} else {
    // Redirection si accès direct sans POST
    header("Location: ajouter_machine.php");
    exit();
}
