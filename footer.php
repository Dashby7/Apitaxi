<footer id="footer">
					<div class="container">
						<div class="row">
							<section class="col-3 col-6-narrower col-12-mobilep">
								<h3>Liens annexes</h3>
								<ul class="links">
									<li><a href="booking.php">Réserver en ligne</a></li>
									<li><a href="findbooking.php">Retrouver sa réservation</a></li>
									<li><a href="http://www.toulouse.aeroport.fr/passagers/vols-destinations/departs-du-jour">Consulter les départs de l'aéroport</a></li>
									<li><a href="http://www.toulouse.aeroport.fr/passagers/vols-destinations/arrivees-du-jour">Consulter les arrivées de l'aéroport</a></li>
									<li><a href="bestplaces.php">Les meilleurs endroits à visiter en Occitanie</a></li>
									<li><a href="legals.php">Mentions légales</a></li>
								</ul>
							</section>
							<section class="col-3 col-6-narrower col-12-mobilep">
								<h3>Tags</h3>
								<ul class="links">
									<li><a>#Taxi</a></li>
									<li><a>#Toulouse</a></li>
									<li><a>#Aéroport</a></li>
									<li><a>#Tourisme</a></li>
									<li><a>#VTC</a></li>
									<li><a>#Occitanie</a></li>
									<li><a>#Taxi conventionné</a></li>
								</ul>
							</section>
							<section class="col-6 col-12-narrower">
								<h3 id="sendmssuccess">Contactez-nous</h3>
								<br/>
								<form method="post" action="#sendmssuccess">
									<div class="row gtr-50">
										<div class="col-6 col-12-mobilep">
											<input class="inputfoot" id="name_contact" type="text" name="namems" id="name" placeholder="Nom" />
										</div>
										<div class="col-6 col-12-mobilep">
											<input class="inputfoot" type="email" name="emailms" id="emailms" placeholder="Email" />
										</div>
										<div class="col-12">
											<textarea name="message" id="message" placeholder="Message" rows="5" style="margin:0;"></textarea>
										</div>
										<div class="col-12">
											<ul class="actions">
												<li><input name="sendms" type="submit" class="button alt" value="Envoyer" /></li>
											</ul>
										</div>
									</div>
								</form>

								<?php

									if (isset($_POST['sendms'])) {

										$validms = true;

										if ($_POST['namems'] == '') {
											echo '<p style="padding : 1em; border-radius : 5px; background-color: rgba(255,15,15,0.65); color : #474747;"><i style="color: #474747;" class="icon fa-times-circle"></i>&nbsp &nbspVous n\'avez pas entré votre nom.</p>
												<style>
                                                        #name_contact { border: 1px solid red;}
                                                </style>';
                                                $validms = false;
										}

										if ($_POST['emailms'] == '') {
											echo '<p style="padding : 1em; border-radius : 5px; background-color: rgba(255,15,15,0.65); color : #474747;"><i style="color: #474747;" class="icon fa-times-circle"></i>&nbsp &nbspVous n\'avez pas entré votre e-mail.</p>
												<style>
                                                        #emailms { border: 1px solid red;}
                                                </style>';
                                                $validms = false;
										}

										if ($_POST['message'] == '') {
											echo '<p style="padding : 1em; border-radius : 5px; background-color: rgba(255,15,15,0.65); color : #474747;"><i style="color: #474747;" class="icon fa-times-circle"></i>&nbsp &nbspVous n\'avez pas entré votre message.</p>
												<style>
                                                        #message { border: 1px solid red;}
                                                </style>';
                                                $validms = false;
										}

										if ($validms) {

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
	                                        
	                                        $message_txt = 'Vous avez un nouveau message de la part de M.'.$_POST['namems'].''.$passage_ligne.''.$passage_ligne.
	                                                        'E-mail : '.$_POST['emailms'].''.$passage_ligne.
	                                                        'Message : '.$_POST['message'].''.$passage_ligne.'';

	                                        //==========

	                                        include('mail/mailms.php');
	                                        
	                                        //==========
	                                         
	                                        //=====Création de la boundary
	                                        $boundary = "-----=".md5(uniqid(rand()));
	                                        //==========
	                                         
	                                        //=====Définition du sujet.
	                                        $sujet = 'NOUVEAU MESSAGE SUR LE SITE APITAXI';
	                                        //=========
	                                         
	                                        //=====Création du header de l'e-mail.
	                                        $header = "From: \"Apitaxi Toulouse\"<apitjbys@apitaxi.yj.fr>".$passage_ligne;
	                                        $header.= "Reply-to: \"Apitaxi Toulouse\" <apitjbys@apitaxi.yj.fr>".$passage_ligne; 
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
	                                        $message.= $passage_ligne.$message_html2.$passage_ligne;
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
	                                        $file = 'images/msg.png';
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

	                                        // on confirme l'envoi à l'utilisateur
	                                        echo '
	                                        <p id="pop_success" style="padding : 1em; border-radius : 5px; background-color: rgba(22,229,22,0.7); color : #474747;">
	                                        
	                                            <i style="color: #474747;" class="icon fa-check-circle"></i>

	                                            &nbsp &nbspVotre message a bien été envoyé. Nous y répondrons dans les plus brefs délais. Merci de votre confiance !
	                                        
	                                        </p>';
	                                    }
									}

								?>
							</section>
						</div>
					</div>

					<!-- Icons 
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
						</ul>
					-->

					<!-- Copyright -->
						<div class="copyright">
							<ul class="menu">
								<li>&copy; Apitaxi. Tous droits réservés – 2019.</li><li></li>
							</ul>
						</div>

</footer>