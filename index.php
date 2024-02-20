<!DOCTYPE html>
<?php
session_start();
require_once("class/bd.php");?>

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Notes de Frais</title>
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">
</head>

    <body>
        <header>


                <?php
                    $isConnect = false;
                    $errorMessage = '';
                    if( isset( $_SESSION['userId'] ) ) {

                        
                        $isConnect = true;     

                        if( $isConnect ) {
                         ?>


                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a href="logout.php" class="nav-link" aria-disabled="true">Se déconnecter</a>
                                </li>
                                
                            </ul>
                                    

                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                <a href="formular.php" class="nav-link" aria-current="page" href="#">Faire une Note de Frais</a>
                                </li>
                                <li class="nav-item">
                                    <a href="genpdf.php" class="nav-link" href="#">Imprimer le <b> Note de Frais</b></a>
                                </li>
                            </ul>
                               

                            <div class="container-fluid w-100 ">
                                <div class="row justify-content-center mb-5">
                                    <div class="col-12 text-center">
                                        <H1>Notes de Frais</H1>
                                    </div>
                                </div>

                            
                                <aside class="container-fluid">
                                    <div class="d-flex justify-content-evenly">
                                        <div class="d-grid col-2">
                                            <a class="btn btn-outline-secondary btn-create p-2 " href="formular.php">Faire une Note de Frais</a>
                                        </div>
                                        <div class="d-grid col-2">
                                            <a class="btn btn-outline-secondary btn-create p-2 " href="logout.php">Se déconnecter</a>
                                        </div>
                                    </div>
                                </aside>
                            </div>
                            <?php if(isset($_SESSION['num_licence']) || isset($_SESSION['num_recu'])){?>


                                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                                    <div class="container-fluid">
                                        <a class="navbar-brand" href="#">Logo</a>
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                        </button>
                                        <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                            <a href="impressionPage.php" class="nav-link active" aria-current="page" href="#">Voir la <b>Note de Frais</b></a>
                                            </li>
                                            <li class="nav-item">
                                            <a href="genpdf.php" class="nav-link" href="#">Imprimer le <b> Note de Frais</b></a>
                                            </li>

                                        </ul>
                                        </div>
                                    </div>
                                </nav>
                            <?php
                            }
                            ?>

                        <?php
                        }
                    }else {
                    ?>

                        <aside class="container-fluid">
                            <div class="d-flex justify-content-evenly">
                                <div class="d-grid col-2">
                                    <a class="btn btn-outline-secondary btn-create p-2 " href="login.php">Log in</a>
                                </div>

                                <div class="d-grid col-2">
                                    <a class="btn btn-outline-secondary btn-create p-2 " href="singin.php">Sing in</a>

                                </div>

                            </div>
                        </aside>

                    <?php 
                    }
                    ?>
        </header>
    </body>
</html>

