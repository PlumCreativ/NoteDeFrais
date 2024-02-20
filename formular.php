<!DOCTYPE html>
<?php
session_start();
// Connexion Ã  la base de donnÃ©es
require_once("class/bd.php");?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Notes de Frais</title>
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet" />
</head>

    <?php
        $errorMessage  = '';
        if( isset( $_GET['invaliddate'] ) ) {
            $errorMessage = 'Désolé ! cette date n\'est pas valide.';
        }
        if (isset($_GET['invalidtrajet'])) {
            $errorMessage = 'Désolé ! mais votre trajet n\'est pas valide';
        }
        if (isset($_GET['invalidadresse'])) {
            $errorMessage = 'Désolé ! mais votre adresse n\'est pas valide';
        }
        if (isset($_GET['invalidkm'])) {
            $errorMessage = 'Désolé ! mais votre distance est trop longue';
        }
        if( isset( $_GET['invalidcostpeag'] ) ) {
            $errorMessage = 'Désolé ! le coût de péage est trop élever.';
        }
        if( isset( $_GET['invalidcostreapas'] ) ) {
            $errorMessage = 'Désolé ! mais le coût du repas est trop coûteux';
        }
        if( isset( $_GET['invalidcostheber'] ) ) {
            $errorMessage = 'Désolé ! mais le coût d\'hébergement est trop grand';
        }
        if( isset( $_GET['invalidcosttrager'] ) ) {
            $errorMessage = 'Désolé ! mais le coût du trajet est trop grand';
        }
        if( isset( $_GET['invalidligue'] ) ) {
            $errorMessage = 'Désolé ! mais le numéro de la ligue est trop grand';
        }
        if( isset( $_GET['invalidnom'] ) ) {
            $errorMessage = 'Désolé ! mais le nom de la ligue est déjà pris';
        }
        if( isset( $_GET['invalidsigle'] ) ) {
            $errorMessage = 'Désolé ! mais le sigle est trop long';
        }
        if( isset( $_GET['invalidpresident'] ) ) {
            $errorMessage = 'Désolé ! mais le nom trop long';
        }
        if( isset( $_GET['invalidlibelle'] ) ) {
            $errorMessage = 'Désolé ! mais le motif trop long';
        }

    ?>

    <body>
        <header class="container-fluid">

        <?php
        if( !empty( $errorMessage ) ) {
            echo '<p class="col-9 ml-4 col alert alert-danger">' . $errorMessage .'</p>';
        }
        ?>

        <div class=" row justify-content-center">


            <aside class="container-fluid col-4">

                <div class="row justify-content-center gap-3">

                    <!-- Icon -->
                    <div class="d-flex justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64" fill="none">
                        <circle cx="32" cy="32" r="32" fill="#C4C4C4"/>
                        </svg>
                    </div>
                
                    <!-- Sing in-->
                    <div class="frame-formulaire">

                        <div class="row justify-content-center mb-4">
                            <div class="col-12">
                                <H2 class="header-font H-font">Formulaire de <b>Notes de Frais<b></H2>
                            </div>
                        </div>

                        <!-- Form -->
                        <form class="mb-5" name="accesform" method="post" action="validformuler.php">
                            
                            <!-- Inputs -->
                            <div class="d-column justify-content-center">


                                <div class="d-flex justify-content-center">
                                    <P class="P-font">Information sur la ligue</P>
                                </div>

                                
                                <div class="mb-4">
                                    <input type="number" class="form-control border rounded p-2"
                                    id="ligue" placeholder="Numéro de la ligue (€)" name="ligue" required>
                                </div>

                                <div class="mb-4">
                                    <input type="text" class="form-control border rounded p-2"
                                    id="nom" placeholder="Nom" name="nom" required>
                                </div>

                                <div class="mb-4">
                                    <input type="text" class="form-control border rounded p-2"
                                    id="sigle" placeholder="Sigle" name="sigle" required>
                                </div>

                                <div class="mb-4">
                                    <input type="text" class="form-control border rounded p-2"
                                    id="president" placeholder="President" name="president" required>
                                </div>
                                

                                <div class="d-flex justify-content-center">
                                    <P class="P-font">Information sur le coûte du trajet</P>
                                </div>


                                <div class="mb-4">
                                    <input type="date" class="form-control border rounded p-2"
                                    id="dat" placeholder="Date de départ" name="dat" required>
                                </div>

                                <div class="mb-4">
                                    <input type="text" class="form-control border rounded p-2"
                                    id="trajet" placeholder="Destination" name="trajet" required>
                                </div>

                                <div class="mb-4">
                                    <input type="number" class="form-control border rounded p-2"
                                    id="km" placeholder="Distance du trajet (km)" name="km" required>
                                </div>

                                <div class="mb-4">
                                    <input type="number" class="form-control border rounded p-2"
                                    id="costtrajet" placeholder="Coût du trajet (€)" name="costtrajet" required>
                                </div>

                                <div class="mb-4">
                                    <input type="number" class="form-control border rounded p-2"
                                    id="costpeag" placeholder="Coût du péage (€)" name="costpeag" required>
                                </div>

                                <div class="mb-4">
                                    <input type="number" class="form-control border rounded p-2"
                                    id="costrepas" placeholder="Coût d'alimentation (€)" name="costrepas" required>
                                </div>

                                <div class="mb-4">
                                    <input type="number" class="form-control border rounded p-2"
                                    id="costheber" placeholder="Coût d’hébergement (€)" name="costheber" required>
                                </div>


                        

                                <div class="d-flex justify-content-center">
                                    <P class="P-font">Motif du trajet</P>
                                </div>


                                <div class="mb-4">
                                    <input type="text" class="form-control border rounded p-2"
                                    id="libelle" placeholder="Motif du trajet" name="libelle" required>
                                </div>

                            </div>  

                            <!-- Button Log in-->
                            <div class="row justify-content-center gap-3">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-secondary rounded-5 p-2">Generate the Formuler</button>
                                </div>
                            </div>

                        </form>                            

                    </div>

                </div>

            </aside>

        </div>

        </header>
    </body>
</html>
