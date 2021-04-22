<!DOCTYPE HTML>

<html>

<head>
    <title>Connexion – APITAXI</title>
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
                                <h2>Connexion</h2>
                                <p class="subh">Vous n'avez pas de compte ? <a href="register.php">Inscrivez-vous</a>.</p>
                            </header>

                            <article id="bodylogin">

                                <!-- Formulaire de connexion -->
                                
                                <fieldset id="fieldlogin">

                                    <form>

                                        <input name="identifiant" id="identifiant" type="text" placeholder="Identifiant (e-mail)" />
                                        <br/>
                                        <input name="passwd" id="passwd" type="text" placeholder="Mot de passe" />
                                        <a class="mdpoublie" href="forgot.php">Mot de passe oublié ?</a>
                                        <br/>
                                        <br/>
                                        <button id="bt_login" type="submit" data-size="sm">Se connecter</button>

                                    </form>
                                </fieldset>

                            </div>
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