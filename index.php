<?php
//include_once __DIR__ .'/classes/utenti.php';
include_once __DIR__ .'/classes/clienti.php';
include_once __DIR__ .'/classes/agenti.php';
include_once __DIR__ .'/classes/immobiliInAffitto.php';
include_once __DIR__ .'/classes/immobiliInVendita.php';



$cliente1 = new Client("Mario","rossi","mariorossi@info.it","33888888","via del popolo 9");
echo $cliente1->getFullName();

$agente1 = new Agent("Ugo","bianchi","ugo.agentii@info.it","338667888","via del campo 1b","1444433");
echo $agente1->getFullName();

$immobili1 = new propertyForRent("via grande 9, RM","monolocal","furnished","40m","500euro","disponibile");

echo $immobili1->houseInfo();//stampa info

$immobili1->availability("disponibile");//stampa disponibilità

//prove uso Trait ---da rivedere

?>

