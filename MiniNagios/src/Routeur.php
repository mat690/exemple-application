<?php
namespace App;

class Routeur extends EquipementReseau
{
    private int $nbPorts;

    public function __construct(string $hostname, string $ip, int $nbPorts)
    {
        if($nbPorts<1 || $nbPorts >120) {
            throw new\Exception(message"Erreur Matterielel : le nombre de ports n'est pas valide. ici vous demnandez $nbPorts pas corret")
        }
        parent::__construct($hostname, $ip);
        $this->nbPorts = $nbPorts;
    }

    public function afficherStatut(): string
    {
        return parent::afficherStatut() . " | Ports : $this->nbPorts";
    }
}

