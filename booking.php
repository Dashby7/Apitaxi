

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
        #booksection {
            background-color: #f2f2f2;
            padding: 2em 3em;
        }
    </style>
</head>

<body class="is-preload">
    <div id="page-wrapper">


        <!-- Header -->
        <div id="header">

                    <?php include("banniere_logo.php"); ?>
                    
                    <!-- Nav -->
                        <nav id="nav">
                            <ul>
                                <li><a href="index.php">Accueil</a></li>
                                <li><a href="airport.php">Aéroport</a></li>
                                <li><a href="tourism.php">Tourisme</a></li>
                                <li><a href="booking.php">Business</a></li>
                                <li class="current">
                                    <a href="booking.php">Réservation</a>
                                    <ul>
                                        <li><a href="booking.php">Réserver une course</a></li>
                                        <li><a href="findbooking.php">Retrouver une réservation</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>

        </div>

            <!-- Main -->
            <section class="wrapper style1">
                <div class="container">
                    <div id="content">

                        <!-- Content -->

                        <section>
                            <header>
                                <h2>Formulaire de réservation</h2>
                                <p>N'hésitez pas, c'est rapide !</p>
                            </header>

                            <p>Ce formulaire de réservation permet un premier contact entre vous et le chauffeur. Entrez toutes les informations relatives à la course. Une fois votre réservation validée, le chauffeur vous appelera pour confirmer la réservation.</p>


                            <div id="booksection">
                                <br/>

                                <form method="post" action="booking.php#validation">
                                    <p style="font-weight: bold; padding-left: 0.8em">Quel type de trajet voulez-vous effectuer ? </p>

                                    <!-- Choix du type de trajet -->
                                    <section class="radioboxes">

                                        <div>
                                            <input type="radio" id="control_01" name="typetrajet" value="1" onclick="autofill_dest()" checked>
                                            <label for="control_01" style="height: 90%;">
                                                <h2>De l'aéroport</h2>
                                                <p>Un taxi viens vous chercher à l'aéroport de Blagnac.</p>
                                            </label>

                                        </div>

                                        <div>
                                            <input type="radio" id="control_03" name="typetrajet" onclick="autofill_dest()" value="2">
                                            <label for="control_03" style="height: 90%;">
                                                <h2>Vers l'aéroport</h2>
                                                <p>Un taxi vous emmène à l'aéroport de Blagnac.</p>
                                            </label>

                                        </div>

                                        <div>

                                            <input type="radio" id="control_02" name="typetrajet" value="3" onclick="autofill_dest()">
                                            <label for="control_02" style="height: 90%;">
                                                <h2>Tourisme</h2>
                                                <p>Un taxi vous transporte dans Toulouse ou en Midi-Pyrénées.</p>
                                            </label>

                                        </div>

                                        <div>

                                            <input type="radio" id="control_04" name="typetrajet" value="4" onclick="autofill_dest()">
                                            <label for="control_04" style="height: 90%;">
                                                <h2>Business</h2>
                                                <p>Un taxi vous transporte vers votre lieu de travail.</p>
                                            </label>

                                        </div>

                                        <!-- Formulaire de réservation -->
                                    </section class="formulaire">

                                    <br/>
                                    <br/>

                                    <!-- Infos passagers -->
                                    <fieldset class="field_passenger">

                                        <legend>Informations passagers</legend>
                                        <br/>

                                        <input name="nom" id="nom" type="text" maxlength="50" placeholder="Nom / Last Name*" <?php if(isset($_POST['nom'])) { echo 'value="'.$_POST['nom'].'"';} ?>>
                                        <input name="prenom" id="prenom" type="text"  maxlength="50" placeholder="Prénom / First Name*" 
                                        <?php if(isset($_POST['prenom'])) { echo 'value="'.$_POST['prenom'].'"';} ?>/>
                                        <input name="tel" id="numtel" type="tel"  maxlength="15" placeholder="N° Tél. / Phone number*" 
                                        <?php if(isset($_POST['tel'])) { echo 'value="'.$_POST['tel'].'"';} ?>/>
                                        <input name="mail" id="mail" type="email" maxlength="100" placeholder="E-mail*" 
                                        <?php if(isset($_POST['mail'])) { echo 'value="'.$_POST['mail'].'"';} ?>/>

                                        <!-- Combo box nombre de passagers -->
                                        <!-- <div class="select_mate" data-mate-select="active">

                                            <p class="selecionado_opcion" onclick="open_select(this)"></p>
                                            <span onclick="open_select(this)" class="icon_select_mate">
                                                        <svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M7.41 7.84L12 12.42l4.59-4.58L18 9.25l-6 6-6-6z"/>
                                                            <path d="M0-.75h24v24H0z" fill="none"/>
                                                        </svg>
                                            </span>



                                            <select id="nbpassagers" name="nbpassagers" onclick="return false;" id="" 
                                            <?php if(isset($_POST['nbpassagers'])) { echo 'value="'.$_POST['nbpassagers'].'"';} ?>>
                                                <option value="default">&nbsp&nbspNombre de passagers</option>
                                                <option value="1">&nbsp&nbsp1</option>
                                                <option value="2">&nbsp&nbsp2</option>
                                                <option value="3">&nbsp&nbsp3</option>
                                                <option value="4">&nbsp&nbsp4</option>
                                                <option value="5">&nbsp&nbsp5</option>
                                            </select>

                                            <div class="cont_list_select_mate">
                                                <ul class="cont_select_int"> </ul>
                                            </div>
                                        </div> -->
                                        <div class="custom-select">
                                            <select id="nbpassagers" name="nbpassagers">

                                                    <option value="default" style="color:#474747;">&nbsp&nbspNombre de passagers</option>
                                                    <option value="1" <?php if(isset($_POST['nbpassagers']) && $_POST['nbpassagers'] == '1') { echo 'selected';} ?> >&nbsp&nbsp1</option>
                                                    <option value="2" <?php if(isset($_POST['nbpassagers']) && $_POST['nbpassagers'] == '2') { echo 'selected';} ?> >&nbsp&nbsp2</option>
                                                    <option value="3" <?php if(isset($_POST['nbpassagers']) && $_POST['nbpassagers'] == '3') { echo 'selected';} ?> >&nbsp&nbsp3</option>
                                                    <option value="4" <?php if(isset($_POST['nbpassagers']) && $_POST['nbpassagers'] == '4') { echo 'selected';} ?> >&nbsp&nbsp4</option>
                                                    <option value="5" <?php if(isset($_POST['nbpassagers']) && $_POST['nbpassagers'] == '5') { echo 'selected';} ?> >&nbsp&nbsp5</option>
                                            
                                            </select>
                                        </div>

                                        <!-- Radio Box Pers. Handicapé -->
                                        <p class="pershand">Une personne en fauteuil roulant est-elle présente parmi les passagers ?</p>
                                        <div class="container_subradio">
                                            <div class="radio">
                                                <input id="radio-1" name="froulant" type="radio" value="1">
                                                <label for="radio-1" class="radio-label">Oui</label>
                                            </div>

                                            <div class="radio" style="margin-left: 3em;">
                                                <input id="radio-2" name="froulant" type="radio" value="0" checked>
                                                <label for="radio-2" class="radio-label">Non</label>
                                            </div>
                                        </div>

                                    </fieldset>

                                    <!-- Infos trajet(s) -->
                                    <fieldset class="field_ride">

                                        <legend>Trajet</legend>

                                        <!-- Aller ou aller retour -->
                                        <div class="container_subradio">
                                            <div class="radio">
                                                <!-- script correspondant dans index.js -->
                                                <input id="radio-21" name="allerretour" type="radio" onclick="aller_retour();" value="allersimple" checked>
                                                <label for="radio-21" class="radio-label">Aller simple</label>
                                            </div>

                                            <div class="radio" style="margin-left: 3em;">
                                                <input id="radio-22" name="allerretour" type="radio" onclick="aller_retour();" value="allerretour">
                                                <label for="radio-22" class="radio-label">Aller-retour</label>
                                            </div>
                                        </div>

                                        <!-- Lieux et dates de départ/arrivée -->
                                            <input name="depart" id="depart" type="text" maxlength="250" placeholder="Lieu de départ / Departure*" style="width: 100%;" 
                                            <?php if(isset($_POST['depart'])) { echo 'value="'.$_POST['depart'].'"';} ?>/>
                                            
                                            <input name="arrivee" id="arrivee" type="text" maxlength="250" placeholder="Lieu d'arrivée / Arrrival*" style="width: 100%;" 
                                            <?php if(isset($_POST['arrivee'])) { echo 'value="'.$_POST['arrivee'].'"';} ?>/>
                                            
                                            <div class="horaires">
                                                <!-- Entrées date & heures aller -->
                                                <div id="blocaller" style="display:flex; flex-direction: column;  margin-bottom : 1.5em;">
                                                    
                                                    <label style="display: block;">Aller</label>
                                                    
                                                    <div class="departretour">
                                                        <div style="display: flex; flex-direction: column; justify-content: flex-start;">
                                                            <label for="datedep" style="font-weight: 400;">Date de départ</label>
                                                            <input name="datedep" id="datedep" type="date" placeholder="Date de départ" 
                                                            <?php if(isset($_POST['datedep'])) { echo 'value="'.$_POST['datedep'].'"';} ?>/>
                                                        </div>
                                                        <div style="display: flex; flex-direction: column; justify-content: flex-start;">
                                                            <label for="datedep" style="font-weight: 400;">Heure</label>
                                                            <input name="heuredep" id="heuredep" type="time" placeholder="Heure de départ" 
                                                            <?php if(isset($_POST['heuredep'])) { echo 'value="'.$_POST['heuredep'].'"';} ?>/>
                                                        </div>
                                                    </div>
                                                </div>

                                                

                                                <!-- Entrées date & heures retour -->
                                                <div id="blocretour" style="display:none; flex-direction: column;">
                                                    
                                                    <label style="display: block;">Retour</label>
                                                    
                                                    <div class="departretour">
                                                        <div style="display: flex; flex-direction: column; justify-content: flex-start;">
                                                            <label for="dateret" style="font-weight: 400;">Date de départ</label>
                                                            <input name="dateret" id="dateret" type="date" placeholder="Date de retour" 
                                                            <?php if(isset($_POST['dateret'])) { echo 'value="'.$_POST['dateret'].'"';} ?>/>
                                                        </div>
                                                        <div style="display: flex; flex-direction: column; justify-content: flex-start;">
                                                            <label for="heureret" style="font-weight: 400;">Heure</label>
                                                            <input name="heureret" id="heureret" type="time" placeholder="Heure de retour" 
                                                            <?php if(isset($_POST['heureret'])) { echo 'value="'.$_POST['heureret'].'"';} ?>/>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        <br/>
                                        <label for="comment">Commentaires</label>
                                        <textarea id="validation" name="comments" class="comments" maxlength="1500" placeholder="" rows=5><?php if(isset($_POST['comments'])) { echo $_POST['comments'];} ?></textarea>
                                    </fieldset>

                                    <div style="margin-bottom: 1.2em;">
                                        <br/>
                                        <br/>
                                        <button name="valider" id="valid_form" type="submit">Valider</button>
                                        <br/>
                                    </div>
                                </form>

                                <noscript>
                                    <p style="padding : 1em; border-radius : 5px; background-color: rgba(255,15,15,0.65); color : #474747;"><i style="color: #474747;" class="icon fa-times-circle"></i>&nbsp &nbspPour pouvoir réserver, il est fortement conseillé d'<a href="https://www.enable-javascript.com/fr/">activer JavaScript</a>.
                                    </p>
                                </noscript>

                                <?php

                                    //ini_set('display_errors', 'off');

                                    include('login_database.php');

                                    $validite = true;

                                    // check nom
                                    if (isset ($_POST['nom']) && $_POST['nom'] == '') {
                                        $validite = false;
                                        echo '<style>
                                                    #nom { border: 1px solid red;}
                                            </style>
                                            <script>document.getElementById(\'nom\').value = \''.$_POST['nom'].'\'</script>';
                                    }

                                    // check prenom
                                    if (isset ($_POST['prenom']) && $_POST['prenom'] == '') {
                                        $validite = false;
                                        echo '<style>
                                                    #prenom { border: 1px solid red;}
                                            </style>';
                                    }

                                    // check mail
                                    if (isset ($_POST['mail']) && $_POST['mail'] == '') {
                                        $validite = false;
                                        echo '<style>
                                                    #mail { border: 1px solid red;}
                                            </style>';
                                    }

                                    // check numtel
                                    if (isset ($_POST['tel']) && $_POST['tel'] == '') {
                                        $validite = false;
                                        echo '<style>
                                                    #numtel { border: 1px solid red;}
                                            </style>';
                                    }

                                    // check nombre de passagers
                                    if (isset ($_POST['nbpassagers']) && $_POST['nbpassagers'] == 'default') {
                                        $validite = false;
                                        echo '<style>
                                                    .select_mate { border: 1px solid red;}
                                            </style>';
                                    }

                                    // check lieu de départ
                                    if (isset ($_POST['depart']) && $_POST['depart'] == '') {
                                        $validite = false;
                                        echo '<style>
                                                    #depart { border: 1px solid red;}
                                            </style>';
                                    }

                                    // check lieu d'arrivée
                                    if (isset ($_POST['arrivee']) && $_POST['arrivee'] == '') {
                                        $validite = false;
                                        echo '<style>
                                                    #arrivee { border: 1px solid red;}
                                            </style>';
                                    }

                                    // Empêche l'affichage de plusieurs messages d'erreurs à la fois
                                    $valid_retour = true;

                                    // check date de départ
                                    if (isset ($_POST['datedep']) && $_POST['datedep'] == '') {
                                        $validite = false;
                                        echo '<style>
                                                    #datedep { border: 1px solid red;}
                                            </style>';
                                    }

                                    // check heure de départ
                                    if (isset ($_POST['heuredep']) && $_POST['heuredep'] == '') {
                                        $validite = false;
                                        echo '<style>
                                                    #heuredep { border: 1px solid red;}
                                            </style>';
                                    }

                                        // Check validite de la date entrée (aller)
                                        if (isset($_POST['datedep']) && isset ($_POST['heuredep']) && $_POST['datedep'] != '' && $_POST['heuredep'] != '') {
                                            
                                            $dateActuelle = new DateTime(date('Y-m-d').' '.date('H:i:s'));
                                            $dateEntree = new DateTime($_POST['datedep'].' '.$_POST['heuredep']);

                                            if ($dateEntree < $dateActuelle) {
                                                echo '<p style="padding : 1em; border-radius : 5px; background-color: rgba(255,15,15,0.65); color : #474747;"><i style="color: #474747;" class="icon fa-times-circle"></i>&nbsp &nbspLa date de départ aller indiquée est antérieure à la date d\'aujourd\'hui.</p>';
                                                $valid_retour = false;
                                                $validite = false;
                                            }
                                        }

                                    // Si on choisit aller-retour, les champs associés ne doivent pas être vides
                                    if (isset($_POST['allerretour']) && $_POST['allerretour'] == 'allerretour') {
                                        
                                        // check date de retour
                                        if (isset($_POST['dateret']) && $_POST['dateret'] == '') {
                                            //s$_POST['dateret'] = null;
                                            echo '<p style="padding : 1em; border-radius : 5px; background-color: rgba(255,15,15,0.65); color : #474747;"><i style="color: #474747;" class="icon fa-times-circle"></i>&nbsp &nbspLe champ date de départ pour le retour n\'est pas rempli ou incorrect.</p>';
                                            $validite = false;
                                            $valid_retour = false;
                                            echo '<style>
                                                        #dateret { border: 1px solid red;}
                                                </style>';
                                        }

                                        // check heure de retour
                                        if (isset($_POST['heureret']) && $_POST['heureret'] == '') {
                                            //$_POST['heureret'] = null;
                                            echo '<p style="padding : 1em; border-radius : 5px; background-color: rgba(255,15,15,0.65); color : #474747;"><i style="color: #474747;" class="icon fa-times-circle"></i>&nbsp &nbspLe champ heure de départ pour le retour n\'est pas rempli ou incorrect.</p>';
                                            $validite = false;
                                            $valid_retour = false;
                                            echo '<style>
                                                        #heureret { border: 1px solid red;}
                                                </style>';
                                        }

                                        // Check validite de la date entrée (retour)
                                        if (isset($_POST['dateret']) && isset($_POST['heureret']) && $_POST['heureret'] != '' && $_POST['dateret'] != '') {
                                            
                                            $dateActuelle = new DateTime(date('Y-m-d').' '.date('H:i:s'));
                                            $dateEntree = new DateTime($_POST['dateret'].' '.$_POST['heureret']);

                                            if ($dateEntree < $dateActuelle) {
                                                echo '<p style="padding : 1em; border-radius : 5px; background-color: rgba(255,15,15,0.65); color : #474747;"><i style="color: #474747;" class="icon fa-times-circle"></i>&nbsp &nbspLa date de départ retour indiquée est antérieure à la date d\'aujourd\'hui.</p>';
                                                $validite = false;
                                                $valid_retour = false;
                                            }
                                        }
                                    }

                                    // Valeurs par défauts si aller-retour non choisi (car pb avec la BDD)
                                    if (isset($_POST['allerretour']) && $_POST['allerretour'] == 'allersimple') {

                                        if (isset($_POST['dateret']) && isset($_POST['heureret'])) {

                                            $_POST['dateret'] = '2019-01-01';
                                            $_POST['heureret'] = '00:00';
                                        }
                                    }


                                    if (!$validite && $valid_retour) {
                                        echo '<p style="padding : 1em; border-radius : 5px; background-color: rgba(255,15,15,0.65); color : #474747;"><i style="color: #474747;" class="icon fa-times-circle"></i>&nbsp &nbspCertains champs ne sont pas remplis ou incorrects.</p>';
                                    }

                                    if (isset($_POST['valider']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tel']) && isset($_POST['datedep']) && 
                                        isset($_POST['heuredep'])) {
                                        
                                        // On vérifie qu'il n'existe pas une réservation identique afin d'éviter le spam
                                        $req_doublon = $bdd->prepare('SELECT * 
                                                                   FROM reservation 
                                                                   WHERE nom = :nom
                                                                   AND prenom = :prenom
                                                                   AND numtel = :numtel
                                                                   AND datedep = :datedep
                                                                   AND heuredep = :heuredep');

                                        $req_doublon->execute(array(
                                                'nom' => $_POST['nom'],
                                                'prenom'=> $_POST['prenom'],
                                                'numtel' => $_POST['tel'],
                                                'datedep'=> $_POST['datedep'],
                                                'heuredep'=> $_POST['heuredep']
                                        ));

                                        $resdoublon = $req_doublon->fetchAll();

                                        if (count($resdoublon) != 0) {
                                            // Pour ne pas que le message s'affiche si des champs ne sont pas remplis/incorrects
                                            if ($validite) {
                                                echo '<p style="padding : 1em; border-radius : 5px; background-color: rgba(255,15,15,0.65); color : #474747;"><i style="color: #474747;" class="icon fa-times-circle"></i>&nbsp &nbspUne réservation identique a déjà été effectuée.</p>';
                                            }
                                            $validite=false;
                                        }
                                    }


                                    if (isset($_POST['valider']) && $validite){

                                        //On récupère les valeurs entrées par l'utilisateur :
                                        $typetrajet=$_POST['typetrajet'];
                                        $nom=$_POST['nom'];
                                        $prenom=$_POST['prenom'];
                                        $numtel=$_POST['tel'];
                                        $email=$_POST['mail'];
                                        $nbpassagers=$_POST['nbpassagers'];
                                        $froulant=$_POST['froulant'];
                                        $allerretour=$_POST['allerretour'];
                                        $depart=$_POST['depart'];
                                        $arrivee=$_POST['arrivee'];
                                        $datedep=$_POST['datedep'];
                                        $heuredep=$_POST['heuredep'];
                                        $dateret=$_POST['dateret'];
                                        $heureret=$_POST['heureret'];
                                        $comments=$_POST['comments'];
                                        
                                        //On prépare la commande sql d'insertion
                                        $req = $bdd->prepare('INSERT INTO reservation(nom, prenom, numtel, email, nbpassagers, froulant, depart, arrivee, datedep, heuredep, dateret, heureret, comments) 
                                                VALUES(:nom, :prenom, :numtel, :email, :nbpassagers, :froulant, :depart, :arrivee, :datedep, :heuredep, :dateret, :heureret, :comments)');

                                        //On prépare la commande sql de recherche n° reservation
                                        $req_numres = $bdd->prepare('SELECT id_reservation 
                                                            FROM reservation 
                                                            WHERE nom= :nom
                                                            AND prenom= :prenom
                                                            AND email= :email
                                                            AND datedep= :datedep
                                                            AND heuredep= :heuredep
                                                            AND numtel= :numtel');

                                        $req->execute(array(
                                            'nom' => $nom,
                                            'prenom' => $prenom,
                                            'numtel' => $numtel,
                                            'email' => $email,
                                            'nbpassagers' => $nbpassagers,
                                            'froulant' => $froulant,
                                            'depart' => $depart,
                                            'arrivee' => $arrivee,
                                            'datedep' => $datedep,
                                            'heuredep' => $heuredep,
                                            'dateret' => $dateret,
                                            'heureret' => $heureret,
                                            'comments' => $comments
                                        ));

                                        $req_numres->execute(array(
                                            'nom' => $nom,
                                            'prenom'=> $prenom,
                                            'email' => $email,
                                            'datedep' => $datedep,
                                            'heuredep' => $heuredep,
                                            'numtel' => $numtel
                                        ));

                                        while ($donnees = $req_numres->fetch())
                                        {
                                            $numres = $donnees['id_reservation'];
                                        }

                                        $req_numres->closeCursor();

                                        // on confirme à l'utilisateur
                                        echo '
                                        <p id="pop_success" style="padding : 1em; border-radius : 5px; background-color: rgba(22,229,22,0.7); color : #474747;">
                                        
                                            <i style="color: #474747;" class="icon fa-check-circle"></i>

                                            &nbsp &nbspVotre réservation a bien été enregistrée. Un chauffeur prendra contact avec vous dans les plus brefs délais.
                                            <br/>N° de réservation : <strong>'.$numres.'</strong>. Conservez-le, il vous servira à retrouver les détails de votre réservation en cas de problème.<br/>Merci de votre confiance !
                                        
                                        </p>';
                                     
                                        $trajet ='';
                                        if ($typetrajet == '1' || $typetrajet == '4') {
                                            $trajet = 'Vous devez aller chercher M. '.$nom.' à l\'aéroport.';
                                        } else if ($typetrajet == '2') {
                                            $trajet = 'Vous devez amener M. '.$nom.' à l\'aéroport.';
                                        } else {
                                            $trajet = 'Course VTC : vous devez transporter M. '.$nom.' (voir le lieu de départ et la destination ci-dessous).';
                                        }

                                        $mail = 'apitaxi31@gmail.com'; // Déclaration de l'adresse de destination.

                                        if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn|gmail|outlook).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
                                        {
                                            $passage_ligne = "\r\n";
                                        }
                                        else
                                        {
                                            $passage_ligne = "\n";
                                        }

                                        //=====Déclaration des messages au format texte et au format HTML.
                                        
                                        $message_txt = 'Vous avez une nouvelle réservation ! : '.$passage_ligne.''.$passage_ligne.
                                                        'Réservation n° : '.$numres.''.$passage_ligne.''.$passage_ligne.
                                                        ''.$trajet.''.$passage_ligne.''.$passage_ligne.
                                                        'Nom : '.$nom.''.$passage_ligne.
                                                        'Prénom : '.$prenom.''.$passage_ligne.
                                                        'N° de téléphone : '.$numtel.''.$passage_ligne.
                                                        'Adresse électronique : '.$email.''.$passage_ligne.
                                                        'Nombre de passagers : '.$nom.''.$passage_ligne.
                                                        'Lieu de départ : '.$nom.''.$passage_ligne.
                                                        'Destination : '.$nom.''.$passage_ligne.
                                                        'Date de départ : '.$datedep.' à '.$heuredep.''.$passage_ligne.'';

                                        if ($dateret != '2019-01-01') {
                                            $message_txt .= 'Date de retour : '.$dateret.' à '.$heureret.''.$passage_ligne.'';
                                        }

                                        if ($froulant == 1) {
                                            $message_txt .= '/!\ Il y a une personne en fauteuil roulant parmi les passagers /!\ '.$passage_ligne.'';
                                        }

                                        if ($comments != '') {
                                            $message_txt .= 'Commentaires : '.$comments.'';
                                        }

                                        //==========

                                        include('mail/mailbooking.php');
                                        
                                        //==========
                                         
                                        //=====Création de la boundary
                                        $boundary = "-----=".md5(rand());
                                        //==========
                                         
                                        //=====Définition du sujet.
                                        $sujet = 'RÉSERVATION N°'.$numres.' - NOUVELLE RÉSERVATION SUR LE SITE APITAXI';
                                        //=========
                                         
                                        //=====Création du header de l'e-mail.
                                            $header = "From: \"Apitaxi Toulouse\"<apitpdrx@apitaxi.yj.fr>".$passage_ligne;
                                            $header.= "Reply-to: \"Apitaxi Toulouse\" <apitpdrx@apitaxi.yj.fr>".$passage_ligne; 
                                            $header.= "MIME-Version: 1.0".$passage_ligne;
                                            $header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
                                            //==========
                                             

                                            //=====Création du message.
                                            $message = $passage_ligne."--".$boundary.$passage_ligne;
                                            
                                            
                                            //=====Ajout du message au format texte.
                                            $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
                                            $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
                                            $message.= $passage_ligne.$message_txt.$passage_ligne;
                                            //==========
                                            
                                            
                                            $message.= $passage_ligne."--".$boundary.$passage_ligne;
                                            
                                            
                                            //=====Ajout du message au format HTML
                                            $message.= "Content-Type: text/html; charset=\"UTF-8\"".$passage_ligne; /*ISO-8859-1*/
                                            $message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
                                            $message.= $passage_ligne.$message_html.$passage_ligne;
                                            //==========

                                            
                                            $message.= $passage_ligne."--".$boundary.$passage_ligne;


                                            //=====Ajout de la première PJ
                                            $file = 'images/apitaxi.PNG';
                                            $fp   = fopen($file, 'r');   // le b c'est pour les windows
                                            $attachment = fread($fp, filesize($file));
                                            fclose($fp);
                                            $attachment = chunk_split(base64_encode($attachment));

                                            $message .= "Content-Type: application/octet-stream; name=\"".$file."\"".$passage_ligne;
                                            $message .= "Content-Transfer-Encoding: base64".$passage_ligne;
                                            $message .= "Content-ID: <image1>".$passage_ligne;
                                            $message.= $passage_ligne.$attachment.$passage_ligne;
                                            //==========


                                            $message.= $passage_ligne."--".$boundary.$passage_ligne;


                                            //=====Ajout de la deuxième PJ
                                            $file = 'images/caetano-unsplash.jpg';
                                            $fp   = fopen($file, 'r');   // le b c'est pour les windows
                                            $attachment = fread($fp, filesize($file));
                                            fclose($fp);
                                            $attachment = chunk_split(base64_encode($attachment));

                                            $message .= "Content-Type: application/octet-stream; name=\"".$file."\"".$passage_ligne;
                                            $message .= "Content-Transfer-Encoding: base64".$passage_ligne;
                                            $message .= "Content-ID: <image2>".$passage_ligne;
                                            $message .= $passage_ligne.$attachment.$passage_ligne;
                                            //==========


                                            //==========
                                            $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
                                            $message.= $passage_ligne."--".$boundary."--".$passage_ligne;
                                            //==========
                                         
                                        //=====Envoi de l'e-mail.
                                        mail($mail,$sujet,$message,$header);
                                        //==========

                                    }
                                ?>

                            </div>

                        </section>

                    </div>
                </div>
            </section>

            <!-- Footer -->
            <?php include('footer.php'); ?>

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
        window.onload = autofill_dest();
        // Remplissage d'entrée automatique en fonction du choix du type de trajet
        function autofill_dest() {
            if (document.getElementById('control_01').checked) {
                document.getElementById("depart").placeholder = " ";
                document.getElementById('depart').value = 'AÉROPORT DE BLAGNAC, 31703 TOULOUSE';
                document.getElementById('depart').readOnly = true;
                document.getElementById('arrivee').readOnly = false;
                document.getElementById('arrivee').value = '';
                document.getElementById('arrivee').placeholder = 'Lieu d\'arrivée / Arrival*';
            }
            if (document.getElementById('control_02').checked) {
                document.getElementById('arrivee').value = '';
                document.getElementById('depart').value = '';
                document.getElementById('depart').readOnly = false;
                document.getElementById('arrivee').readOnly = false;
                document.getElementById('arrivee').placeholder = 'Lieu d\'arrivée / Arrival*';
                document.getElementById('depart').placeholder = 'Lieu de départ / Departure*';
            }
            if (document.getElementById('control_04').checked) {
                document.getElementById('arrivee').value = '';
                document.getElementById('depart').value = '';
                document.getElementById('depart').readOnly = false;
                document.getElementById('arrivee').readOnly = false;
                document.getElementById('arrivee').placeholder = 'Lieu d\'arrivée / Arrival*';
                document.getElementById('depart').placeholder = 'Lieu de départ / Departure*';
            }
            if (document.getElementById('control_03').checked) {
                document.getElementById('arrivee').value = 'AÉROPORT DE BLAGNAC, 31703 TOULOUSE';
                document.getElementById('depart').value = '';
                document.getElementById('arrivee').readOnly = true;
                document.getElementById('depart').readOnly = false;
                document.getElementById('depart').placeholder = 'Lieu de départ / Departure*';
            }
        }
    </script>
    <script src="assets/js/index.js"></script>
    <script src="assets/js/selectbox.js"></script>

</body>

</html>