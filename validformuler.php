<?php
require_once("class/bd.php");

$ligue = htmlspecialchars( $_POST['ligue'] );
$nom = htmlspecialchars( $_POST['nom'] );
$sigle = htmlspecialchars($_POST['sigle']);
$president = htmlspecialchars($_POST['president']);
$dat = htmlspecialchars($_POST['dat']);
$trajet = htmlspecialchars($_POST['trajet']);
$km = htmlspecialchars($_POST['km']);
$costpeag =  htmlspecialchars($_POST['costpeag']);
$costrepas = htmlspecialchars( $_POST['costrepas'] );
$costheber = htmlspecialchars( $_POST['costheber'] );
$costtrajet = htmlspecialchars($_POST['costtrajet']);
$libelle = htmlspecialchars( $_POST['libelle'] );

if ($ligue < 30) {
    // License number not found in the database
    header('Location: formular.php?invalidligue=1');
    exit();
}

if ($nom > 30) {
    header( 'Location: formular.php?invalidnom=1' );
    exit();
}

if ($sigle > 30) {
    header( 'Location: formular.php?invalidsigle=1' );
    exit();
}

if ($president > 30) {
    header( 'Location: formular.php?invalidpresident=1' );
    exit();
}

if ($libelle > 30) {
    header( 'Location: formular.php?invalidlibelle=1' );
    exit();
}

if ($trajet > 30) {
    header( 'Location: formular.php?invalidtrajet=1' );
    exit();
}

settype($km, "int");
if( !is_numeric($km) || $km > 30000 ) {
    header( 'Location: formular.php?invalidkm=1' );
    exit();
} 
settype($costpeag, "int");
if( !is_numeric($costpeag) || $costpeag > 100 ) {

    header( 'Location: formular.php?invalidcostpeag=1' );
    exit();
} 
settype($costrepas, "int");
if( !is_numeric($costrepas) || $costrepas > 100 ) {

    header( 'Location: formular.php?invalidcostreapas=1' );
    exit();
} 
settype($costheber, "int");
if( !is_numeric($costheber) || $costheber > 100 ) {

    header( 'Location: formular.php?invalidcostheber=1' );
    exit();
} 
settype($costtrajet, "int");
if( !is_numeric($costtrajet) || $costtrajet > 100 ) {

    header( 'Location: formular.php?invalidcosttrager=1' );
    exit();
} 

$req_ligues = $db->prepare( 
    "INSERT INTO ligues( num, nom, sigle, president)
     VALUES( :ligue, :nom, :sigle, :president)"
);

$isInsertOk_ligues = $req_ligues->execute([
    ':ligue'   => $ligue,
    ':nom'     => $nom,
    ':sigle'  => $sigle,
    ':president' => $president
]);

$req_ligues_frais = $db->prepare( 
    "INSERT INTO lignes_frais( dat, trajet, km, costtrajet, cout_peage, cout_repas, cout_hebergement)
     VALUES( :dat, :trajet, :km, :costtrajet, :costpeag, :costrepas, :costheber)"
);

$isInsertOk_ligues_frais = $req_ligues_frais->execute([
    ':dat'          => $dat,
    ':trajet'       => $trajet,
    ':km'           => $km,
    ':costtrajet'   => $costtrajet,
    ':costpeag'     => $costpeag,
    ':costrepas'    => $costrepas,
    ':costheber'    => $costheber
]);

$req_motifs = $db->prepare( 
    "INSERT INTO motifs( libelle)
     VALUES( :libelle)"
);
$isInsertOk_motifs = $req_motifs->execute([
    ':libelle'   => $libelle
]);

$req_adherent = $db->prepare(
    "SELECT * FROM adherent WHERE num_licence = ?"
);

$adherent[] = $req_adherent->execute();

if( !$isInsertOk_ligues && !$isInsertOk_motifs && !$isInsertOk_ligues_frais) {
    echo "Erreur lors de l'enregistrement";
    var_dump($isInsertOk_ligues);
    die;
} else {
    session_start();
    $_SESSION['ligue']       = $ligue;
    $_SESSION['nom']         = $nom;
    $_SESSION['sigle']       = $sigle;
    $_SESSION['president']   = $president;
    $_SESSION['dat']         = $dat;
    $_SESSION['trajet']      = $trajet;
    $_SESSION['km']          = $km;
    $_SESSION['costpeag']    = $costpeag;
    $_SESSION['costrepas']   = $costrepas;
    $_SESSION['costheber']   = $costheber;
    $_SESSION['libelle']     = $libelle;
    $_SESSION['costtrajet']  = $costtrajet;
    var_dump($_SESSION);
    header("Location: impressionPage.php");
}
