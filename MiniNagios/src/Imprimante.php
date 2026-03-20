<?php
namespace App;

use App\Serveur;

class Imprimante extends EquipementReseau {

    private string $type ;
    private bool $estCouleur ;


    public function __construct(string $typeParam, bool $estCouleurParam, string $ipParam, string $hostnameParam ){
        if (!Validator::isPrinterTypeValid($typeParam)) {

            // Si l'IP est pourrie, on lance une Exception (une erreur fatale contrôlée)
            throw new \Exception("Type d’imprimante non supporté : Le type  '$typeParam' n'est pas valide !");
        }
        $this->type = $typeParam ;
        $this->estCouleur = $estCouleurParam ;

        parent::__construct($hostnameParam, $ipParam);

    }
    public function afficherStatut(): string
    {
        $afficherCouleur= "NON";

    if ($this->estCouleur)
        $afficherCouleur="OUI";
        return parent::afficherStatut()." | Type: ".$this->type. " | Couleur : ".$afficherCouleur ;
}



}