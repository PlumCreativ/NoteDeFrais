<?php
require_once("class/bd.php");


session_start();

// Vérifier si le nom existe déjà
$userId = htmlspecialchars( $_POST['userId'] );
$mail = htmlspecialchars( $_POST['mail'] );
$licence = htmlspecialchars($_POST['licence']);
$recu = htmlspecialchars($_POST['recu']);
$adresse = htmlspecialchars($_POST['adresse']);
$code_postale = htmlspecialchars($_POST['code_postale']);
$ville = htmlspecialchars($_POST['ville']);
$password =  htmlspecialchars($_POST['password']);
$passwordConfirm = htmlspecialchars( $_POST['passwordConfirm'] );

$req = $db->prepare( 'SELECT * FROM demandeur WHERE identifiant=:userId' );
$req->execute( [':userId'=>$userId] );
if( $req->rowCount() ) {
    
    header( 'Location: singin.php?invaliduserId=1' );
    exit();
}
// Vérifier le mot de passe et le confirmer
if( strlen( $password ) < 12 ) {
    header( 'Location: singin.php?invalidpass=1' );
    exit();
}

$email_car = '@';

if( !strstr($mail, $email_car) ) {
    
    header( 'Location: singin.php?invalidmail=1' );
    exit();
}

$checkLicence = $db->prepare('SELECT num_licence FROM adherent WHERE num_licence=:licence');
$checkLicence->execute([':licence'=>$licence]);
$result = $checkLicence->fetch(PDO::FETCH_ASSOC);


if (!$result['num_licence']) {
    // License number not found in database
    header('Location: singin.php?invalidlicence=1');
    exit();
}

if (strlen($recu) < 10) {
    header( 'Location: singin.php?invalidlicence=1' );
    exit();
}

if (strlen($adresse) > 30) {
    header( 'Location: singin.php?invalidadresse=1' );
    exit();
}

if (strlen($code_postale) > 20) {
    header( 'Location: singin.php?invalidcode_postale=1' );
    exit();
}

if (strlen($ville) < 10) {
    header( 'Location: singin.php?invalidville=1' );
    exit();
}

if( $password != $passwordConfirm ) {
    header( 'Location: singin.php?invalidconfirm=1' );
    exit();
} 

$passHash = sodium_crypto_pwhash_str( 
    $password, 
    SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE,
    SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE
);

$req = $db->prepare( 
    "INSERT INTO demandeur( identifiant, password, mail, num_recu, num_licence, route, cp, city)
     VALUES( :userId, :password, :mail, :recu, :licence, :adresse, :code_postale, :ville)"
);

$isInsertOk = $req->execute([
    ':userId'           => $userId,
    ':mail'             => $mail,
    ':licence'          => $licence,
    ':recu'             => $recu,
    ':password'         => bin2hex($passHash),
    ':adresse'          => $adresse,
    ':code_postale'     => $code_postale,
    ':ville'            => $ville
]);

if( !$isInsertOk ) {
    echo "Erreur lors de l'enregistrement ";
    var_dump($isInsertOk);
    die;
} else {
    $idUser = $db->lastInsertId();
    $_SESSION['id']             = $idUser;
    $_SESSION['userId']         = $userId;
    $_SESSION['mail']           = $mail;
    $_SESSION['licence']        = $licence;
    $_SESSION['recu']           = $recu;
    $_SESSION['password']       = $password;
    $_SESSION['adresse']        = $adresse;
    $_SESSION['code_postale']   = $code_postale;
    $_SESSION['ville']          = $ville;
    header("Location: index.php");
}
