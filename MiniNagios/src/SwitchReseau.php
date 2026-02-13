<?php
namespace App;

class SwitchReseau extends EquipementReseau{

    private int $nombrePorts= 24;
    public function __construct(string $hostname, string $ip, int $nombrePorts)  {
        $this->nombrePorts= $nombrePorts;
        parent::__construct($hostname, $ip);
    }

    public function scannerPorts(): void{
        for($compteur=1; $compteur<=$this->nomprePorts;$compteur++){
            $activateur= rand (0,1) ;
            if ($activateur == 1) {
                echo "<p><span style= color: 'green'>Port numéro $compteur: activé </span> </p>";
            }
            else
                echo "<P> <span style= color:'green'>Port numéro $compteur: désactivé </span></P>" ;

        }
    }


}




