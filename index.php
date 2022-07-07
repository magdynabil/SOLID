<?php
use SOLID\SRP\Bus;
use SOLID\SRP\Route;
use SOLID\SRP\Driver;
require_once __DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php';
$magdy=new Driver('magdynabil','32','shobra misr 70 toson street');
$route80=new Route('El-Sherouk city','Shobra misr',64);
$route90=new Route('El-Sherouk city','bader city',20);
$bus=new Bus();
$bus->setBusNumber('123');
$bus->setColor('red');
$bus->setDriver($magdy);
$bus->setDoors('3');
$bus->setMaxmumSpeed('240');
$bus->setNumberOfPassangers('64');
$bus->addRoute($route80);
$bus->addRoute($route90);
echo$bus->move();

