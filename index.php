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
            <div class="container-fluid w-100">
                <div class="row justify-content-center mb-5">
                    <div class="col-12 text-center">
                        <H1>Notes de Frais</H1>
                    </div>
                </div>

                <?php
                    $isConnect = false;
                    $errorMessage = '';
                    if( isset( $_SESSION['userId'] ) ) {
                        $isConnect = true;     

                        if( $isConnect ) {
                         ?>
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
                    session_destroy();
                    ?>
            </div>
        </header>
    </body>
</html>

