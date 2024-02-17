<!DOCTYPE html>
<?php 
session_start();
require_once("class/bd.php");
?>



<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDF</title>
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="asset/css/style.css">
</head>
<body>

<aside class="pdf-content col-8">


<?php


    if (isset($_SESSION['ligue'])) {
        $ligue = $_SESSION['ligue'];
    } else {
        echo 'Variable not set.';
    }
    if (isset($_SESSION['nom'])) {
        $nom = $_SESSION['nom'];
    } else {
        echo 'Variable not set.';
    }
    if (isset($_SESSION['sigle'])) {
        $sigle = $_SESSION['sigle'];
    } else {
        echo 'Variable not set.';
    }
    if (isset($_SESSION['president'])) {
        $president = $_SESSION['president'];
    } else {
        echo 'Variable not set.';
    }
    if (isset($_SESSION['dat'])) {
        $dat = $_SESSION['dat'];
    } else {
        echo 'Variable not set.';
    }
    if (isset($_SESSION['trajet'])) {
        $trajet = $_SESSION['trajet'];
    } else {
        echo 'Variable not set.';
    }
    if (isset($_SESSION['km'])) {
        $km = $_SESSION['km'];
    } else {
        echo 'Variable not set.';
    }
    if (isset($_SESSION['costpeag'])) {
        $costpeag = $_SESSION['costpeag'];
    } else {
        echo 'Variable not set.';
    }
    if (isset($_SESSION['costrepas'])) {
        $costrepas = $_SESSION['costrepas'];
    } else {
        echo 'Variable not set.';
    }
    if (isset($_SESSION['costheber'])) {
        $costheber = $_SESSION['costheber'];
    } else {
        echo 'Variable not set.';
    }
    if (isset($_SESSION['costtrajet'])) {
        $costtrajet = $_SESSION['costtrajet'];
    } else {
        echo 'Variable not set.';
    }
    if (isset($_SESSION['libelle'])) {
        $libelle = $_SESSION['libelle'];
    } else {
        echo 'Variable not set.';
    }
?> 

<div class="d-flex justify-content-between">
    <H4 class="fw-bold">Notes de frais des bénévoles</H4>

    <div class="dominant-color d-flex justify-content-end" style="padding: 0px 40px;">
        <H4 class="">Année civile 2023</H4>
    </div>
    
</div>

<div class="row justify-content-center">
    <div class="grid gap-3 justify-content-center">
        <div class=" fw-bold p-2 g-col-6">Je soussigné(e) </div>
    </div>
    
    <div class="dominant-color d-flex justify-content-center">
        Jean-Christophe Berbier
    </div>
    
</div>

<div class="row justify-content-center">
    <div class="grid gap-3 justify-content-center">
        <div class=" fw-bold p-2 g-col-6">demeurant </div>
    </div>

    <div class="dominant-color d-flex justify-content-center">
        12, rue de Marron, 54600 Villers lès Nancy
    </div>
    
</div>

<div class="row justify-content-center">
    <div class="grid gap-3 justify-content-center">
        <div class=" fw-bold  p-2 g-col-6">certifie renoncer au remboursement des frais ci-dessous et les laisser à l'association </div>
    </div>
    <div class="dominant-color d-flex justify-content-center">
        Salle d'Armes de Villers lès Nancy, 1 rue Rodin - 54600 Villers lès Nancy
    </div>
</div>

<div class="row">
    <div class="d-flex gap-3 justify-content-start">
        <div class=" fw-bold p-2 g-col-6">en tant que don. </div>
    </div>
</div>


<div class="d-flex justify-content-start ">
    <div class=" fw-bold gap-3">
        <div class="p-2 g-col-6">Frais de déplacement </div>

    </div>

    <div class="cost-info">
        <span class="p-2  g-col-6">Tarif kilométrique appliqué pour le remboursement : 0,28 €</span>
    </div>

</div>

<table class="table-content">

    <thead>
        <th>Date</th>
        <th>Motif</th>
        <th>Trajet</th>
        <th>Kms parcouru</th>
        <th>Coût Trajet</th>
        <th>Péages</th>
        <th>Repas</th>
        <th>Hébergements</th>
        <th>Total</th>
    </thead>
    <tbody>
        <tr>
            <td class=""><?php echo($dat) ; ?></td>
            <td class=""><?php echo($libelle); ?></td>
            <td class=""><?php echo($nom); ?></td>
            <td class=""><?php echo($km); ?></td>
            <td class="cost"><?php echo($costtrajet); ?></td>
            <td class=""><?php echo($costpeag); ?></td>
            <td class=""><?php echo($costrepas); ?></td>
            <td class=""><?php echo($costheber); ?></td>
            <td class="cost"><?php echo($total_cost = $costheber + $costpeag + $costrepas + $costtrajet); ?></td>
        </tr>
    </tbody>

    <tfoot class="text-center">

        <tr>
            <th colspan="8">
                Montant total des frais de déplacement
            </th>
            <td class="cost fw-bold">
                <?php echo($total_cost) ?>
            </td>
        </tr>
    </tfoot>

</table>

<div class="row">
<div class="grid gap-3 justify-content-center">
        <div class=" fw-bold  p-2 g-col-6">certifie renoncer au remboursement des frais ci-dessous et les laisser à l'association </div>
    </div>
    <div class="dominant-color d-flex justify-content-center">
        Théo Berbier, licence n° 170540010338 
    </div>
    
</div>

<br>

<div class="d-flex justify-content-start">
    <div class="gap-3 ">
        <div class="p-2">Montant total des dons </div>
    </div>
    <div class=" cost-info gap-3">
        <div class=" cost p-2 col-12"><?php echo($_SESSION['costtrajet']); ?></div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="d-flex gap-3 justify-content-center">
        <div class=" fw-bold  p-2 g-col-6">certifie renoncer au remboursement des frais ci-dessous et les laisser à l'association </div>
    </div>
</div>

<div class="d-flex justify-content-center">
    <div class="gap-3 ">
        <div class="p-2">Fait à</div>
    </div>
    <div class=" gap-3">
        <div class="complet-space dominant-color p-2 col-12"></div>
    </div>

    <div class="gap-3 ">
        <div class="p-2">Le </div>
    </div>
    <div class=" gap-3">
        <div class="complet-space dominant-color p-2 col-12"></div>
    </div>
</div>
<br>

<div class="d-flex justify-content-center">
    <div class="gap-3 ">
        <div class="p-2">Signature du bénévole </div>
    </div>
    <div class=" gap-3">
        <div class="sign-space dominant-color p-2 col-12"></div>
    </div>
</div>
<br>

<table class="P-font association-space" style="text-align: left;">
    <thead>
        <th class="fw-bold" style="text-align: center;">
            Partie réservée à l'association
        </th>
    </thead>
    <tbody>
        <tr>
            <th>N° d'ordre du Reçu :</th>
            <td>2009-014</td>
        </tr>
        <tr>
            <th>Remis le :</th>
            <td></td>
        </tr>
        <tr>
            <th>Signature du Trésorier : </th>
            <td></td>
        </tr>
    </tbody>
</table>

</aside>


<aside class="container-fluid mb-5">
    <div class="d-flex justify-content-evenly">
        <div class="d-grid col-2">
            <a class="btn btn-outline-secondary btn-create p-2 " href="genpdf.php">Imprimé le pdf</a>
        </div>


    </div>
</aside>

</body>

</html>
