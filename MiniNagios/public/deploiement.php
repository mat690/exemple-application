<?php

<<<<<<< HEAD
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

=======
require "../vendor/autoload.php";

use App\Service;
use App\Serveur;

$serveurWeb = new Serveur("SRV-WEB-01", "192.168.1.1", "Debian");
$serviceApache = new Service("Apache", 80, true);
$serviceSSH = new Service("SSH", 22, false);

$serviceApache->demarrer();
$serveurWeb->ajouterService($serviceApache);
$serveurWeb->ajouterService($serviceSSH);

echo $serveurWeb->afficherStatut();
echo "<BR>" ;

$serveurBDD = new Serveur("SRV-DB-01", "10.0.210.1", "Windows Server 2022");

$serviceMySQL = new Service("MySQL", 3306, true);
$serviceMySQL->demarrer();
$serviceRDP = new Service("RDP", 3389, false);

$serveurBDD->ajouterService($serviceMySQL);
$serveurBDD->ajouterService($serviceRDP);
echo $serveurBDD->afficherStatut();
>>>>>>> 9065e35310ef420a3e9e87bd81fdd6d5586c1776
