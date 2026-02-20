<?php

require '../vendor/autoload.php';

use App\Serveur;

use App\Service;

$serveurWeb=new Serveur("SRV-WEB-01", "192.168.1.1", "Debian");
$objetServiceApache = new Service("Apache", 80);
$objetServiceSSH = new Service("SSH", 22);

$objetServiceApache->demarrer();
$objetServiceSSH->demarrer();
$serveurWeb->ajouterService($objetServiceApache);
$serveurWeb->ajouterService($objetServiceSSH);

echo $serveurWeb->afficherStatut();
$serveurBDD= new Serveur("SRV-DB-01", "192.168.1.2", "Windows");
$objetserviceSQL= new Service("MySQL", "3306");
$objetserviceSQL-> demarrer();
$objetserviceRDP= new Service("RDP", "3389");
$objetserviceRDP->arreter();

echo $serveurBDD->afficherStatut();
echo "<Br>";
$serveurBDD= new Serveur("SRV-DB-01", "192.168.1.2", "Windows Server 2022");
$objetserviceSQL= new Service("MySQL", "3306");
$objetserviceSQL-> demarrer();
$objetserviceRDP= new Service("RDP", "3389");
$objetserviceRDP->arreter();

 $serveurBDD->ajouterService($objetserviceSQL);
$serveurBDD->ajouterService($objetserviceRDP);

