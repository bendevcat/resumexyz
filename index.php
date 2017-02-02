<!DOCTYPE html>
<html lang="fr">

    <head>

        <!-- Welcome to you / Bienvenue à vous ;) -->
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

        <?php include('php/header.inc.php'); ?>

      	<!-- Index : WW Container Include -->
      	<div id="ww">
      	    <div class="container">
                <?php include('php/content.inc.php'); ?>

                    <br /><br />
                <?php include('php/skills.inc.php'); ?>

                    <br /><br />
                    <br /><br />

                <?php include('php/training.inc.php'); ?>

                    <br /><br />
                    <br /><br />

                <?php include('php/experience.inc.php'); ?>

                    <br /><br />
                    <br /><br />

                <?php include('php/hobbies.inc.php'); ?>

            </div> <!-- FIN container -->
        </div><!-- FIN WW  -->

  	    <?php include('php/footer.inc.php'); ?>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

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
