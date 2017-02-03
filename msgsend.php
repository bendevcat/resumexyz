<?php

  // Déclaration et affectation des variables
  $nom = $_POST['nom'];
  $email = $_POST['mail'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];


  // Destinataire
  $mail = 'contact@benoitcatillon.xyz';

  // On filtre les serveurs qui rencontrent des bugs
  if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail))
  {
  	$sautligne = "\r\n";
  }
  else
  {
  	$sautligne = "\n";
  }
  // Déclaration des messages au format texte et au format HTML
  $message_txt = " " . $nom . " " . $email . " " . $phone . " " .$message . " ";

  $message_html = "<html><head></head>
                      <body>
                          <b>Contact XYZ</b>,<br /><br /><br />
                          <b>Nom</b> : " . strip_tags($nom) . "<br />
                          <b>Mail</b> : " . strip_tags($email) . "<br />
                          <b>Téléphone</b> : " . strip_tags($phone) . "<br /><br />
                          <b>Objet</b> : " . strip_tags($subject) . "<br /><br />
                          <b>Message</b> :<br />" . strip_tags($message) . "
                      </body></html>";

  // Création de la boundary
  $boundary = "-----=".md5(rand());

  // Définition du sujet
  $sujet = "Contact Pro depuis XYZ";

  // Création du header du mail
  $header = "From: \"Benoit Catillon XYZ\"<contact@benoitcatillon.xyz>".$sautligne;
  $header.= "Reply-to: \"" .$_POST['nom']. "\" <" .$_POST['mail']. ">".$sautligne;
  $header.= "MIME-Version: 1.0".$sautligne;
  $header.= "X-Priority: 1".$sautligne;
  $header.= "Content-Type: multipart/alternative;".$sautligne." boundary=\"$boundary\"".$sautligne;

  // Création du message
  $message = $sautligne."--".$boundary.$sautligne;

  // Ajout du message au format texte
  $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$sautligne;
  $message.= "Content-Transfer-Encoding: 8bit".$sautligne;
  $message.= $sautligne.$message_txt.$sautligne;
  $message.= $sautligne."--".$boundary.$sautligne;

  // Ajout du message au format HTML
  $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$sautligne;
  $message.= "Content-Transfer-Encoding: 8bit".$sautligne;
  $message.= $sautligne.$message_html.$sautligne;
  $message.= $sautligne."--".$boundary."--".$sautligne;
  $message.= $sautligne."--".$boundary."--".$sautligne;

  // Envoi du mail
  mail($mail,$sujet,$message,$header);

?>

<!DOCTYPE html>
<html lang="fr">

    <head>

        <!-- Thank you for contacting me / Merci de m'avoir contacté -->
        <meta charset="iso-8859-1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="CV de Benoît Catillon">
        <meta name="author" content="Benoît Catillon">
        <!-- http://benoitcatillon.xyz/wink.html -->

        <link rel="shortcut icon" href="img/ico/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/ico/favicon.ico" type="image/x-icon">

        <title>Benoît Catillon - Bienvenue sur mon CV</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">

        <!-- CSS Desktop & W3 -->
        <link href="css/main.css" rel="stylesheet">
        <!-- CSS Mobile & W3 -->
        <link href="css/mainmob.css" rel="stylesheet" media="(max-width: 480px)" type="text/CSS">

        <!-- JavaScript / jQuery -->
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="js/hover.zoom.js"></script>
        <script src="js/hover.zoom.conf.js"></script>

    </head>

    <body>

        <!-- Inclusion du Header -->
        <?php include('php/header.inc.php'); ?>

      	<!-- Index : WW Container Include -->
      	<div id="ww">
      	    <div class="container">
                <div class="row mt">
                  <div class="col-lg-8 col-lg-offset-2 centered">
                    <h1>CONTACTEZ MOI</h1>
                  </div>
                </div>
                <div class="row mt">
                  <div id="white" class="blockother col-lg-offset-2 centered center-div">
                    <br />
                    <p><center>L'envoi s'est bien passé, je vous répond dès que possible, merci !</center></p>
                  </div>
                </div><!-- /row -->
            </div><!-- FIN container -->
        </div><!-- FIN WW -->

        <!-- Inclusion du Footer -->
  	    <?php include('php/footer.inc.php'); ?>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
        <!-- GitHub Button -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>

        <!-- Return-on-Top Button -->
        <script src="js/returnontop.js"></script>

    </body>

</html>
