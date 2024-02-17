id, num_licence, sexe, nom, prenom, DateNaissance, Adresse1, cp, ville



sql:


    ALTER TABLE Adherent ADD COLUMN date DATE;


    UPDATE Adherent
    SET DateNaissance = STR_TO_DATE(date, '%d/%m/%Y');

    ALTER TABLE Adherent DROP COLUMN date;


php:
header>div>div>nav:
	                <?php

                    $isConnect = false;
                    $errorMessage = '';
                    if( isset( $_SESSION['login'] ) ) {
                        $isConnect = true;     

                        if( $isConnect ) {
                            //$strPhoto = 'images/' . $_SESSION['photo'];

                        
                        ?>
                        <img src="images/<? echo($_SESSION['photo'])?>" width="40"/>
                        <a class="nav-link" href="logout.php">  Se déconnecter </a>
                        <?php
                        }
                    }else {
                    ?>
                        <a class="nav-link" href="login.php">Se connecter</a>
                        <a class="nav-link" href="createUserStep1.php">M'inscrire</a>
                    <?php 
                    }?>


section:
	    <?php if( $isConnect ) { ?>
    		<div class="row">
        		<div class="col-12">
            			Bienvenue <?=$_SESSION['login'];?>
        		</div>
    		</div>
    		<?php
    		}
    		?>












































Validlogin:


<?php
session_start();
?>
<html lang="fr">
<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>


<body>
<?php
include_once( 'header.php')
?>


<?php
$errorMessage  = '';
if( isset( $_GET['invalidpseudo'] ) ) {
    $errorMessage = 'Désolé ! ce pseudo est déjà utilisé.';
}
if( isset( $_GET['invalidpass'] ) ) {
    $errorMessage = 'Désolé ! Mot de passe invalide.';
}
if( isset( $_GET['invalidconfirm'] ) ) {
    $errorMessage = 'Erreur sur la confirmation du mot de passe';
}

?>

<section class="container mt-5">
    <div class="row">
        <?php
        if( !empty( $errorMessage ) ) {
            echo '<p class="col-9 ml-4 col alert alert-danger">' . $errorMessage .'</p>';
        }
        ?>
    </div>
    <div class="row">
        <div class="col-12">
            <form name="accesform" method="post" action="createUserStep2.php">

                <div class="mb-3 row">
                    <label for="login" class="col-sm-4 col-form-label">Pseudo</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="login" value="" placeholder="Votre pseudo" name="login" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Mot de passe</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" id="inputPassword" name="password" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPasswordConfirm" class="col-sm-4 col-form-label">Confirmer le mot de passe</label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" id="inputPasswordConfirm" name="passwordConfirm" required>
                    </div>
                </div>
                <div class="mb-3 row justify-content-end">
                    <div class="col-sm-4">
                        <button type="submit" class="btn btn-primary mb-3">Valider</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>



<footer class="container">

</footer>


</body>