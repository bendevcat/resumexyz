<?php

  $nom = $_POST['nom'];
  $email = $_POST['mail'];
  $phone = $_POST['phone'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];



  $mail = 'contact@benoitcatillon.xyz'; // DESTINATAIRE
    if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
      {
      	$sautligne = "\r\n";
      }
      else
      {
      	$sautligne = "\n";
      }
  //=====Déclaration des messages au format texte et au format HTML.
  $message_txt = " " . $nom . " " . $email . " " . $phone . " " .$message . " ";
  $message_html = "<html><head></head><body>
                      <b>Contact XYZ</b>,<br /><br /><br />
                      <b>Nom</b> : " . strip_tags($nom) . "<br />
                      <b>Mail</b> : " . strip_tags($email) . "<br />
                      <b>Téléphone</b> : " . strip_tags($phone) . "<br /><br />
                      <b>Objet</b> : " . strip_tags($subject) . "<br />
                      <b>Message</b> :<br />" . strip_tags($message) . "
                    </body></html>";
  //==========

  //=====Création de la boundary
  $boundary = "-----=".md5(rand());
  //==========

  //=====Définition du sujet.
  $sujet = "Contact Pro depuis XYZ";
  //=========

  //=====Création du header de l'e-mail.
  $header = "From: \"BenCat XYZ\"<contact@benoitcatillon.xyz>".$sautligne;
  $header.= "Reply-to: \"" .$_POST['nom']. "\" <" .$_POST['mail']. ">".$sautligne;
  $header.= "MIME-Version: 1.0".$sautligne;
  $header.= "X-Priority: 1".$sautligne;
  $header.= "Content-Type: multipart/alternative;".$sautligne." boundary=\"$boundary\"".$sautligne;
  //==========

  //=====Création du message.
  $message = $sautligne."--".$boundary.$sautligne;
  //=====Ajout du message au format texte.
  $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$sautligne;
  $message.= "Content-Transfer-Encoding: 8bit".$sautligne;
  $message.= $sautligne.$message_txt.$sautligne;
  //==========
  $message.= $sautligne."--".$boundary.$sautligne;
  //=====Ajout du message au format HTML
  $message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$sautligne;
  $message.= "Content-Transfer-Encoding: 8bit".$sautligne;
  $message.= $sautligne.$message_html.$sautligne;
  //==========
  $message.= $sautligne."--".$boundary."--".$sautligne;
  $message.= $sautligne."--".$boundary."--".$sautligne;
  //==========

  //=====Envoi de l'e-mail.
  mail($mail,$sujet,$message,$header);
  //==========
?>

<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Benoît Catillon - Contactez moi !</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- CSS -->
    <link href="assets/css/main.css" rel="stylesheet">
    <!--<link href="assets/css/w3.css" rel="stylesheet">-->

    <!-- JavaScript / jQuery -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/hover.zoom.js"></script>
    <script src="assets/js/hover.zoom.conf.js"></script>

  </head>

  <body>

    <!-- Barre de Navigation : navbar -->
    <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Benoît Catillon</a>
            <br /><br /><br />
          <p class="navbar-brand2">Concepteur Développeur Informatique</p>
        </div>
      </div>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="index.php">ACCUEIL</a></li>
        <li><a href="#competences">COMPÉTENCES</a></li>
        <li><a href="#experiences">EXPÉRIENCES</a></li>
        <li><a href="#formations">FORMATIONS</a></li>
        <li><a href="#loisirs">LOISIRS</a></li>
        <li><a href="contact.php">CONTACT</a></li>
      </ul>
      <!--<a href="#" class="btn btn-success"><span class="icon-white icon-circle-arrow-down"></span> Télécharger mon CV</a>-->
    </div><!--/.nav-collapse -->

    <!-- +++++ Formulaire de Contact +++++ -->
    <div id="ww">
      <div class="container"><!-- class="container mt" -->
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
      </div>
    </div><!-- /container -->


	<!-- +++++ Projects Section +++++ -->


	<!-- +++++ Footer Section +++++ -->
 <footer>
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h4>Me Contacter</h4>
					<p>
						<a href="contact.php">Formulaire de contact</a><br/>
						<strong>Portable : 06 58 94 12 64</strong><br/>
						<strong>Mail direct :</strong> <a mailto="contact@benoitcatillon.xyz">contact@benoitcatillon.xyz</a>
					</p>
				</div><!-- /col-lg-4 -->

				<div class="col-lg-4">
					<h4>Réseaux Sociaux</h4>
					<p>
						<a href="https://www.linkedin.com/in/beno%C3%AEt-catillon-7031b094" target="_blank">LinkedIn</a><br/>
						<a href="#">StackOverflow</a><br/>
						<a href="#">OpenClassrooms</a>
					</p>
				</div><!-- /col-lg-4 -->

				<div class="col-lg-4">
          <div>
            <h4>Navigation</h4>
            <p>
              <a href="#">ACCUEIL</a><br/>
              <a href="#competences">COMPÉTENCES</a><br/>
              <a href="#experiences">EXPÉRIENCES</a><br/>
              <a href="#formations">FORMATIONS</a><br/>
              <a href="#loisirs">LOISIRS</a><br/>
              <a href="contact.php">CONTACT</a>
            </p>
          </div>
				</div><!-- /col-lg-4 -->

			</div>

		</div>
	</div>
 </footer>


    <!-- Bootstrap Core JS -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Bouton UpToTop -->
    <script>
      $(document).ready( function () {
        // Add return on top button
        $('body').append('<div id="returnOnTop" title="Retour en haut">&nbsp;</div>');

        // On button click, let's scroll up to top
        $('#returnOnTop').click( function() {
            $('html,body').animate({scrollTop: 0}, 'slow');
        });
      });

      $(window).scroll(function() {
        // If on top fade the bouton out, else fade it in
        if ( $(window).scrollTop() == 0 )
            $('#returnOnTop').fadeOut();
        else
            $('#returnOnTop').fadeIn();
      });
    </script> <!-- END UpToTop -->

  </body>
</html>

<!DOCTYPE html>
<html lang="fr">

    <head>

        <!-- Don't forget / N'oubliez pas : stage@benoitcatillon.xyz -->
        <meta  charset="iso-8859-1">
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
        <script>
          $(document).ready( function () {
            // Ajoute le bouton Return on Top
            $('body').append('<div id="returnOnTop" title="Retour en haut">&nbsp;</div>');

            // Retour en Haut de Page lorsque l'on click sur le bouton
            $('#returnOnTop').click( function() {
                $('html,body').animate({scrollTop: 0}, 'slow');
            });
          });

          // Si en Haut, fadeOut, sinon, fadeIn
          $(window).scroll(function() {
            if ( $(window).scrollTop() == 0 )
                $('#returnOnTop').fadeOut();
            else
                $('#returnOnTop').fadeIn();
          });
        </script><!-- FIN returnOnTop -->

    </body>

</html>
