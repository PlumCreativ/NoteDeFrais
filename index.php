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
                                

                            <?php if(isset($_SESSION['num_licence']) || isset($_SESSION['num_recu'])){?>
                                
                                <nav>

                                    <ul>
                                        
                                    </ul>
                        
                                    <ul>
                                        <li class="nav-button">
                                            <a class="btn btn-outline-secondary btn-create px-5" href="formular.php">Faire une <b>Note de Frais</b></a>
                                        </li>
                                        <li class="nav-button">
                                            <a class="btn btn-outline-secondary btn-create px-5" href="impressionPage.php">Voir la <b>Note de Frais</b></a>
                                        </li>                

                                        <li class="nav-button">
                                            <a class="btn btn-outline-secondary btn-create p-2 " href="genpdf.php">Imprimer le <b> Note de Frais</b></a>
                                        </li>
                                                                                    
                                    </ul>

                                    <ul class="secondary">
                                        <li class="nav-button">
                                            <a class="btn btn-outline-secondary btn-create px-5" href="logout.php">Se déconnecter</a>
                                        </li>                                                    
                                    </ul>                                                 

                                </nav>

                                <div class="container-fluid w-100 h-25">
                                    <div class="row justify-content-center mb-5">
                                        <div class=" text-center">
                                            <H1>Notes de Frais</H1>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } 
                            else{?>          
                                        
                                    <nav>
                                        <ul>
                                            <li class="nav-button">
                                                <a class="btn btn-outline-secondary btn-create px-5" href="formular.php">Faire une <b>Note de Frais</b></a>
                                            </li>


                                                                                                
                                        </ul>

                                        <ul class="secondary">
                                            <li class="nav-button">
                                                <a class="btn btn-outline-secondary btn-create px-5" href="logout.php">Se déconnecter</a>
                                            </li>                                                    
                                        </ul>                                                 

                                    </nav>

                                    <div class="container-fluid w-100 h-25">
                                        <div class="row justify-content-center mb-5">
                                            <div class=" text-center">
                                                <H1>Notes de Frais</H1>
                                            </div>
                                        </div>
                                    </div>
                            </aside>




                                <!-- Previous style "Functional"-->
                                <!-- <div class="d-flex justify-content-evenly">
                                    <div class="d-grid col-2">
                                        <a class="btn btn-outline-secondary btn-create p-2 " href="formular.php">Faire une Note de Frais</a>
                                    </div>
                                    <div class="d-grid col-2">
                                        <a class="btn btn-outline-secondary btn-create p-2 " href="logout.php">Se déconnecter</a>
                                    </div>
                                </div> -->
                            
                                <?php
                            }
                            ?>  


                        <?php
                    }else {
                    ?>              
                                    
                        <aside class="container-fluid">

                            <nav>

                                <ul>
                                    <li class="nav-button">
                                        <a class="btn btn-outline-secondary btn-create px-5" href="login.php">Log in</a>
                                    </li>
                                    <li class="nav-button">
                                        <a class="btn btn-outline-secondary btn-create px-5" href="singin.php">Sign in</a>
                                    </li>                                                      
                                </ul>                                                

                            </nav>

                        </aside>
        

                                    <!-- <div class="d-flex justify-content-evenly">
                                        <div class="d-grid col-2">
                                            <a class="btn btn-outline-secondary btn-create p-2 " href="login.php">Log in</a>
                                        </div>

                                        <div class="d-grid col-2">
                                            <a class="btn btn-outline-secondary btn-create p-2 " href="singin.php">Sing in</a>

                                        </div>

                                    </div> -->
                                


                    <?php 
                    }
                    ?>

        </header>
    </body>
</html>

