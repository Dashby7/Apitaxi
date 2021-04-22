<!DOCTYPE HTML>

<html>

<head>
    <title>Apitaxi | Taxi Aéroport Blagnac | Toulouse Occitanie | Tourisme VTC</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/foxholder.css" />
    <link rel="shortcut icon" type="image/x-icon" href="icons/taxi.ico" />
    <style>
    
        .lienretour {
            text-decoration: none;
            border:none;
            font:inherit;
        }

    </style>
</head>

<body class="is-preload">
    <div id="page-wrapper">

            <!-- Header -->
            <div id="header">

                    <?php include("banniere_logo.php"); ?>
            </div>

            <!-- Main -->
            <section class="wrapper style1 login">

                <div class="div_retour">
                    <a href="index.php" class="lienretour"><button id="bt_retour" type="submit" data-size="sm"><img src="icons/icon_back.png">Retour</button></a>
                </div>

                <div class="container login">
                    <div id="containerlogin">

                        <!-- Content -->

                        
                            <header id="headlogin">
                                <h2 class="h_findbooking">Retrouver ma réservation</h2>
                                <p class="subh">Assurez vous d'entrer le n° de réservation ainsi que l'adresse électronique liée.</p>
                            </header>

                            <article id="bodylogin">

                                <!-- Formulaire de connexion -->
                                
                                <fieldset id="fieldlogin">

                                    <form method="post" action="findbooking.php#bt_login">

                                        <input name="numres" id="numres" type="text" placeholder="Numéro de réservation" maxlength="8"
                                        <?php if(isset($_POST['numres'])) { echo 'value="'.$_POST['numres'].'"';} ?>/>
                                        <br/>
                                        <input name="mail" id="mail" type="email" placeholder="Adresse électronique (e-mail)" maxlength="100"
                                        <?php if(isset($_POST['mail'])) { echo 'value="'.$_POST['mail'].'"';} ?>/>
                                        <br/>
                                        <br/>
                                        <button name="retrouver" id="bt_login" type="submit" data-size="sm">Retrouver</button>

                                    </form>
                                </fieldset>

                            </div>

                            <?php 

                                    //ini_set('display_errors', 'off');

                                    include('login_database.php');

                                    $validite = true;

                                    // check numres
                                    if (isset ($_POST['numres']) && $_POST['numres'] == '') {
                                        $validite = false;
                                        echo '<style>
                                                    #numres { border: 1px solid red;}
                                            </style>';
                                    }

                                    // check adresse
                                    if (isset ($_POST['mail']) && $_POST['mail'] == '') {
                                        $validite = false;
                                        echo '<style>
                                                    #mail { border: 1px solid red;}
                                            </style>';
                                    }

                                    if (isset($_POST['retrouver']) && $validite) {

                                        //On prépare la commande sql de recherche n° reservation
                                        $req_res = $bdd->prepare('SELECT * 
                                                               FROM reservation 
                                                               WHERE id_reservation = :numres
                                                               AND email = :mail');

                                        $req_res->execute(array(
                                            'numres' => $_POST['numres'],
                                            'mail'=> $_POST['mail']
                                        ));

                                        $res = $req_res->fetchAll();

                                        if (count($res) != 0) {

                                            echo '<p id="pop_success" style="margin : 1em 0 0 0;padding : 1em; border-radius : 5px; background-color: rgba(22,229,22,0.7); color : #474747;">
                                                    <i style="color: #474747;" class="icon fa-check-circle"></i>
                                                    &nbsp &nbspVotre réservation a bien été trouvée.</p>';
                                            
                                            // Affichage du résultat
                                            foreach ($res as $donnees) {
                                                
                                                echo 
                                                '<article id="success_res">
                                                    <p>
                                                        <span><strong>Nom</strong></span> <span>'.$donnees['nom'].'</span>
                                                    </p>

                                                    <p>
                                                        <span><strong>Prénom</strong></span> <span>'.$donnees['prenom'].'</span>
                                                    </p>

                                                    <p>
                                                        <span><strong>Nombre de passagers</strong></span> <span>'.$donnees['nbpassagers'].'</span>
                                                    </p>

                                                    <p>
                                                        <span><strong>Lieu de départ</strong></span> <span>'.$donnees['depart'].'</span>
                                                    </p>

                                                    <p>
                                                        <span><strong>Lieu d\'arrivée</strong></span> <span>'.$donnees['arrivee'].'</span>
                                                    </p>

                                                    <p>
                                                        <span><strong>Date de départ</strong></span> <span>'.$donnees['datedep'].'</span>
                                                    </p>

                                                    <p>
                                                        <span><strong>Heure de départ</strong></span> <span>'.$donnees['heuredep'].'</span>
                                                    </p>';

                                                    /* Si dateret contient la valeur par défaut (2019-01-01) alors cela signifie que l'utilisateur aura choisi un aller simple donc on ne 
                                                    l'affiche pas sinon : on affiche la date de retour et l'heure de retour */
                                                    if ($donnees['dateret'] != '2019-01-01') {
                                                        echo '
                                                        <p>
                                                            <span><strong>Date de retour</strong></span> <span>'.$donnees['dateret'].'</span>
                                                        </p>

                                                        <p>
                                                            <span><strong>Heure de retour</strong></span> <span>'.$donnees['heureret'].'</span>
                                                        </p>

                                                        '; 
                                                    }
                                                    
                                                    if ($donnees['comments'] != '') {
                                                        echo '
                                                        <p>
                                                            <span><strong>Commmentaires</strong></span> <span>'.$donnees['comments'].'</span>
                                                        </p>';
                                                    }

                                                    echo '</article>';

                                                    echo '
                                                        <style>
                                                            #success_res {
                                                                margin-top : 1em;
                                                                display: flex;
                                                                flex-direction: column;
                                                                justify-content: center;   
                                                                background-color: #ffffff;
                                                                border : 1px solid #d3d3d3;
                                                                padding: 3em 3em;
                                                                width:100%;
                                                                overflow: auto;
                                                            }

                                                            #success_res p {
                                                                display: flex;
                                                                margin: 0;
                                                                padding : 0;
                                                                flex-direction: row;
                                                                justify-content: space-between;

                                                            }

                                                            #success_res span {
                                                                display: inline-block;

                                                            }
                                                        </style>
                                                    ';
                                                
                                            }
                                        
                                        } 

                                        else {
                                                
                                                echo '<p style="margin: 1em 0; padding : 1em; border-radius : 5px; background-color: rgba(255,15,15,0.65); color : #474747;"><i style="color: #474747;" class="icon fa-times-circle"></i>&nbsp &nbspLa réservation n\'a pas été trouvée. Veuillez vérifier que les informations entrées sont correctes.</p>';
                                        
                                        }
                                
                                        $req_res->closeCursor();

                                    }

                                ?>


                </div>
            </section>

    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.dropotron.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/foxholder.js"></script>
    <script>
        jQuery('.form_passenger').foxholder({
            placeholderDemo: 5, // for placeholder demo (1 - 15)
            buttonDemo: 1 //for button demos (1 - 8), if you need a button effect
        });
    </script>
    <script src="assets/js/index.js"></script>
    

</body>

</html>