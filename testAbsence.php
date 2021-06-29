<?php

require_once __DIR__.'/../autoload.php';
require_once __DIR__.'/init.php';
use App\Model\Absence;

$em=$entityManager->getRepository(Absence::class);

$absence=new Absence();
$absence->perso_id(1);
echo $absence->perso_id;
var_dump($absence);
