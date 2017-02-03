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
