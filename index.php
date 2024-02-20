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
                        $errorMessage = '';
                        if( isset( $_SESSION['userId'] ) ) {
                    ?>

                                <aside>


                                    <div class="container-fluid w-100 h-25">
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

                                    <br><br><br>
                                    <aside class="container-fluid">
                                        <div class="d-flex justify-content-evenly">
                                            <div class="d-grid col-2">
                                                <a class="btn btn-outline-secondary btn-create p-2 " href="impressionPage.php">Voir la <b>Note de Frais</b></a>
                                            </div>
                                            <div class="d-grid col-2">
                                                <a class="btn btn-outline-secondary btn-create p-2 " href="genpdf.php">Imprimer le <b> Note de Frais</b></a>
                                            </div>
                                        </div>
                                    </aside>

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
                            </aside>


                        <?php 
                        }
                        ?>

        </header>
    </body>
</html>

