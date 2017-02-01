<!DOCTYPE html>
<html lang="fr">

  <head>
    
    <!-- N'oubliez pas : stage@benoitcatillon.xyz -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CV de Benoît Catillon">
    <meta name="author" content="Benoît Catillon">
    <!-- http://benoitcatillon.xyz/wink.html -->

    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>Benoît Catillon - Contactez moi !</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- CSS Desktop & W3 -->
    <link href="assets/css/main.css" rel="stylesheet">
    <!-- CSS Mobile & W3 -->
    <link href="assets/css/mainmob.css" rel="stylesheet" media="(max-width: 480px)" type="text/CSS">
    
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
    </div> <!-- FIN navbar header -->
    
    <!-- Navbar Menu -->
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-left">
        <li><a href="index.php">ACCUEIL</a></li>
        <li><a href="index.php#competences">COMPÉTENCES</a></li>
        <li><a href="index.php#experiences">EXPÉRIENCES</a></li>
        <li><a href="index.php#formations">FORMATIONS</a></li>
        <li><a href="index.php#loisirs">LOISIRS</a></li>
        <li><a href="contact.php">CONTACT</a></li>
      </ul>
    </div><!-- FIN navbar menu -->

    <!-- +++++ Contact : WW Container +++++ -->
    <div id="ww">
      <div class="container">
        
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2 centered">
            <h1>CONTACTEZ MOI</h1>
            <hr>
            <h5><center>N'hésitez surtout pas à me contacter, je répondrais dans la journée !</center></h5>
            <p><center><i>Les champs marqué d'un * sont obligatoires</i></center></p>
          </div>
        </div> <!-- FIN row -->
        
        <div class="row mt">
          <div id="white" class="blockother col-lg-offset-2 centered center-div">
            <br />
            
            <table class="center-div" style="width: 65%;">
              <tr>
                <td>
                  <form action="msgsend.php" method="post" enctype="multipart/form-data" role="form">
                    <div class="form-group">
                      <input type="name" class="form-control" id="nom" name="nom" placeholder="Nom / Prénom*" required>
                      <br>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="mail" name="mail" placeholder="Adresse email*" required>
                      <br>
                    </div>
                    <div class="form-group">
                      <input type="tel" class="form-control" id="phone" name="phone" placeholder="Téléphone">
                      <br>
                    </div>
                    <div class="form-group">
                      <input type="form-control" class="form-control" id="subject" name="subject" placeholder="Objet*" required>
                      <br>
                    </div>
                    <textarea class="form-control" rows="6" id="message" name="message" placeholder="Tapez votre message ici :*" required></textarea>
                      <br>
                    <button type="submit" class="btn btn-success"><strong>ENVOYER</strong></button>
                    <button type="reset" class="btn btn-danger"><strong>RÉINITIALISER</strong></button>
                  </form>
                </td>
              </tr>
            </table>
            
          </div><!-- FIN blockother -->
          
        </div><!-- FIN row mt -->
        
      </div><!-- FIN container -->
    </div><!-- FIN WW Container -->


	<!-- Footer -->
    <footer>
       <div id="footer">
           <div class="container">
               <div class="row">
                   <div class="col-lg-4">
                       <h4>Me Contacter</h4>
                       <p>
                           <a href="contact.php">Formulaire de contact</a><br/>
                           <strong>Portable : 06 58 94 12 64</strong><br/>
                           <strong>Mail direct :</strong> <a href="mailto:stage@benoitcatillon.xyz">stage@benoitcatillon.xyz</a>
                       </p>
                   </div><!-- FIN col-lg-4 -->

                   <div class="col-lg-4">
                       <h4>Réseaux Sociaux</h4>
                       <p>
                           <a href="https://www.linkedin.com/in/beno%C3%AEt-catillon-7031b094" target="_blank">LinkedIn</a><br/>
                           <a href="#">StackOverflow</a><br/>
                           <a href="#">OpenClassrooms</a>
                       </p>
                   </div><!-- FIN col-lg-4 -->

                   <div class="col-lg-4">
                     <div>
                       <h4>Navigation</h4>
                       <p>
                         <a href="#">ACCUEIL</a><br/>
                         <a href="#competences">COMPÉTENCES</a>   <br/>
                         <a href="#experiences">EXPÉRIENCES</a><br/>
                         <a href="#formations">FORMATIONS</a><br/>
                         <a href="#loisirs">LOISIRS</a><br/>
                         <a href="contact.php">CONTACT</a>
                       </p>
                     </div>
                   </div><!-- FIN col-lg-4 -->

               </div><!-- FIN row -->

           </div><!-- FIN container -->
       </div><!-- FIN footer -->
    </footer>


    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

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
