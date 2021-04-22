<?php								
									try {
                                        $bdd = new PDO('mysql:host=localhost;dbname=apitpdrx_apitaxi;charset=utf8', 'apitpdrx', 'PJSB57EqsgZuzn', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
                                    }

                                    catch (Exception $e) {
                                            die('Une erreur est survenue, veuillez réessayer plus tard.');
                                    }
?>