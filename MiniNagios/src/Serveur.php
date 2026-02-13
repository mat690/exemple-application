<?php
namespace App;
class Serveur extends EquipementReseau
{
    private string $os;

    public function __construct(string $hostname, string $ip,  string $os)
    {
        parent::__construct($hostname, $ip);
        $this->os = $os;
    }


    public function afficherStatut(): string
    {
        return parent::afficherStatut() . "| OS : $this->os";
    }




}
