<?php
/**

Fatal error: Uncaught Error: Cannot access protected property App\Model\Absence::$perso_id in /home/planning/www/planningbiblio/public/test.php:12 Stack trace: #0 {main} thrown in /home/planning/www/planningbiblio/public/test.php on line 12
**/
require_once __DIR__.'/../autoload.php';
require_once __DIR__.'/init.php';
use App\Model\Absence;

$em=$entityManager->getRepository(Absence::class);

$absence=new Absence();
$absence->perso_id(1);
echo $absence->perso_id;
var_dump($absence);
