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
