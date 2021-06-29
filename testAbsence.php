<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
/**
Fatal error: Uncaught Error: Call to a member function persist() on array in /home/planning/www/planningbiblio/public/test.php:38 Stack trace: #0 {main} thrown in /home/planning/www/planningbiblio/public/test.php on line 38

Fatal error: Uncaught Error: Cannot access protected property App\Model\Absence::$perso_id in /home/planning/www/planningbiblio/public/test.php:12 Stack trace: #0 {main} thrown in /home/planning/www/planningbiblio/public/test.php on line 12
**/

require_once __DIR__.'/../vendor/autoload.php';
require_once(__DIR__.'/init.php');
use App\Model\Absence;

$em=$entityManager->getRepository(Absence::class)->findBy(array('perso_id' => 1));
$absence=new Absence();
$absence->perso_id(1);
$absence->debut('2021-07-27 23:59:59.000000');
$absence->fin('2021-07-30 23:59:59.000000');
$absence->motif('maladie');
$absence->motif_autre('contagieuse');
$absence->commentaires('covid-19');
$absence->etat('contagieux');
$absence->demande('2021-07-30 23:59:59.000000');
$absence->valide(1);
$absence->validation('2021-07-30 23:59:59.000000');
$absence->valide_n1(2);
$absence->validation_n1('2021-07-30 23:59:59.000000');
$absence->pj1(1);
$absence->pj2(1);
$absence->so(6);
$absence->groupe('test');
$absence->cal_name('test');
$absence->ical_key('');
$absence->last_modified('2021-07-30 23:59:59.000000');
$absence->uid('');
$absence->rrule('');
$absence->id_origin(1);
$em->persist($absence);
$em->flush();
var_dump($absence);

