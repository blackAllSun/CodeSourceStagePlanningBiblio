<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Test Conges</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
<?php
ini_set('display_errors','on');
error_reporting(E_ALL);

require_once __DIR__.'/../vendor/autoload.php';
require_once(__DIR__.'/init.php');
use App\Model\Conges;
use App\Model\Agent;

$conges=new Conges();
$conges->perso_id(1);
$conges->debut(new \DateTime('now'));
$conges->fin(new \DateTime('now'));
$conges->halfday(true);
$conges->start_halfday('contagieuse');
$conges->end_halfday('contagieuse');
$conges->commentaires('covid-19');
$conges->refus('contagieux');
$conges->heures('12');
$conges->debit('56');
$conges->saisie(new \DateTime('now'));
$conges->saisie_par(1);
$conges->modif(1);
$conges->modification(new \DateTime('now'));
$conges->valide_n1(6);
$conges->validation_n1(new \DateTime('now'));
$conges->valide(2);
$conges->validation(new \DateTime('now'));
$conges->solde_prec(1_234.567);
$conges->solde_actuel(1_234.567);
$conges->recup_prec(1_234.567);
$conges->recup_actuel(1_234.567);
$conges->anticipation_prec(1_234.567);
$conges->anticipation_actuel(1_234.567);
$conges->supprime(0);
$conges->suppr_date(new \DateTime('now'));
$conges->information(1);
$conges->info_date(new \DateTime('now'));
$entityManager->persist($conges);
$entityManager->flush();

$congesRepository = $entityManager->getRepository(Conges::class);
$congess=$congesRepository->findAll();
$agentRepository=$entityManager->getRepository(Agent::class);

echo "<div class='container-fluid'>";
echo "<table class='table table-striped'>";
echo '<tr>
        <td>Id</td>
        <td>Perso Id</td>
        <td>Debut</td>
        <td>Fin</td>
        <td>HalfDay</td>
        <td>Start HalfDay</td>
        <td>End HalfDay</td>
        <td>Commentaires</td>
        <td>Refus</td>
        <td>Heures</td>
        <td>Debit</td>
        <td>Saisie</td>
        <td>Saisie Par</td>
        <td>Modif</td>
        <td>Modification</td>
        <td>Valide N1</td>
        <td>Validation N1</td>
        <td>Valide</td>
        <td>Validation</td>
        <td>Solde Prec</td>
        <td>Solde Actuel</td>
        <td>Recup Prec</td>
        <td>Recup Actuel</td>
        <td>Reliquat Prec</td>
        <td>Reliquat Actuel</td>  
        <td>Anticipation Prec</td>
        <td>Anticipation Actuel</td>    
        <td>Supprime</td>
        <td>Suppr Date</td>
        <td>Information</td>
        <td>Info Date</td>
    </tr>';
foreach($congess as $conges) {
    echo '<tr>';
    echo '<td>'.$conges->id().'</td>';
    $perso=$agentRepository->find($conges->perso_id());
    echo '<td>'.$perso->nom().' '.$perso->prenom().'</td>';
    echo '<td>'.date_format($conges->debut(), "d-m-Y").'</td>';
    echo '<td>'.date_format($conges->fin(), "d-m-Y").'</td>';
    echo '<td>'.$conges->halfday().'</td>';
    echo '<td>'.$conges->start_halfday().'</td>';
    echo '<td>'.$conges->end_halfday().'</td>';
    echo '<td>'.$conges->commentaires().'</td>';
    echo '<td>'.$conges->refus().'</td>';
    echo '<td>'.$conges->heures().' </td>';
    echo '<td>'.$conges->debit().'</td>';
    echo '<td>'.date_format($conges->saisie(), "d-m-Y").'</td>';
    $saisie_par=$agentRepository->find($conges->saisie_par());
    var_dump($conges->saisie_par());
    echo '<td>'.$saisie_par->nom().' '.$saisie_par->prenom().'</td>';
    echo '<td>'.$conges->modif().'</td>';
    echo '<td>'.date_format($conges->modification(), "d-m-Y").'</td>';
    echo '<td>'.$conges->valide_n1().'</td>';
    echo '<td>'.date_format($conges->validation_n1(), "d-m-Y").'</td>';
    echo '<td>'.$conges->valide().'</td>';
    echo '<td>'.date_format($conges->validation(), "d-m-Y").'</td>';
    echo '<td>'.$conges->solde_prec().'</td>';
    echo '<td>'.$conges->solde_actuel().'</td>';
    echo '<td>'.$conges->recup_prec().'</td>';
    echo '<td>'.$conges->recup_actuel().'</td>';
    echo '<td>'.$conges->anticipation_prec().'</td>';
    echo '<td>'.$conges->anticipation_actuel().'</td>';
    echo '<td>'.$conges->supprime().'</td>';
    echo '<td>'.date_format($conges->suppr_date(), "d-m-Y").'</td>';
    echo '<td>'.$conges->information().'</td>';
    echo '<td>'.date_format($conges->info_date(), "d-m-Y").'</td>';
    echo '</tr>';
}

echo '</table>';
echo '</container>';
?>
</body>
</html>
