<?php
<<<<<<< HEAD
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




=======
namespace App ;

class SwitchReseau extends EquipementReseau {
    private int $nombrePorts = 24 ;
    private int $vlanGestion;
    public function __construct(string $hostname, string $ip, int $nombrePorts , int $vlanGestion) {
        if ($vlanGestion < 1 || $vlanGestion > 4094) {
            // Si le nombre de ^ports est trop petit ou trop grand
            throw new \Exception("ERREUR CONFIGURATION : le nombre de VLAN n'est pas valide. Ici vous demandez $vlanGestion pas correct.");
        }
        $this->nombrePorts = $nombrePorts ;
        $this->vlanGestion = $vlanGestion ;
        parent::__construct($hostname, $ip);

    }

    public function scannerPorts() : void {
        // Une boucle for, utilisation 10 % du temps, 80 % du temps foreach , 10 % while
        // on a un compteur $compteur
        // un point de départ ici 1
        // un seuil: attribut $nombrePorts
        // un palier: ++ donc 1
        for ($compteur = 1; $compteur <= $this->nombrePorts; $compteur++) {
            $activateur = rand(0, 1) ;
            if ($activateur == 1) {
                echo "<P> Port numéro $compteur :<span style='color:green'>  activé </span></P>" ;
            }
            else
                echo "<P> Port numéro $compteur :<span style='color:red'>  déconnecté </span></P> " ;
        }


    }

}
>>>>>>> 8b45384ec0ad0ee109ea85da78c2932cbbd9ef76
