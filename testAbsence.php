<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

require_once __DIR__.'/../vendor/autoload.php';
require_once(__DIR__.'/init.php');
use App\Model\Absence;

$absence=new Absence();
$absence->perso_id(1);
$absence->debut(new \DateTime());
$absence->fin(new \DateTime());
$absence->motif('maladie');
$absence->motif_autre('contagieuse');
$absence->commentaires('covid-19');
$absence->etat('contagieux');
$absence->demande(new \DateTime());
$absence->valide(1);
$absence->validation(new \DateTime());
$absence->valide_n1(2);
$absence->validation_n1(new \DateTime());
$absence->pj1(1);
$absence->pj2(1);
$absence->so(6);
$absence->groupe('test');
$absence->cal_name('test');
$absence->ical_key('');
$absence->last_modified('');
$absence->uid('');
$absence->rrule('');
$absence->id_origin(1);
$entityManager->persist($absence);
$entityManager->flush();

$absenceRepository = $entityManager->getRepository(Absence::class);
$absences=$absenceRepository->findAll();
foreach($absence as $absences){
    var_dump($absence);
}
