<?php
namespace App;
use App\Serveur;

class Imprimante extends EquipementReseau {

    private string $type ;
    private bool $estCouleur ;
    public function __construct(string $typeParam, bool $estCouleurParam, string $ipParam, string $hostnameParam) {
        $this->type=$typeParam;
        $this->estCouleur=$estCouleurParam;

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