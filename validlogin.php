<?php
session_start();

require_once("class/bd.php");


$userId = $_POST['userId'];
$password = $_POST['password'];
$sql = $db->prepare("SELECT * FROM demandeur WHERE identifiant=:userId");
$sql->execute( [':userId'=>$userId] );



if( $acces = $sql->fetch(PDO::FETCH_ASSOC) ) {
    $passHash =  hex2bin($acces['password']);
    //password_verify($password, $passHash) 
    if( sodium_crypto_pwhash_str_verify($passHash, $password  )) {
        $_SESSION['userId'] = $userId;
        header('Location:index.php?error=0');
        die;
    } else {
        $_SESSION['userId'] = $userId;
        header('Location:login.php?error=1&passerror=1&nom='.$userId);
        die;
    }
} else {
    header('Location:login.php?error=1&userIderror=1');
    die;

}

header( "Location:index.php?error=0" );
