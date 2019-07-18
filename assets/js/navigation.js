
var menuOpen = false;
var menu0 = assetsPath.image + '/menu0.png';
var menu1 = assetsPath.image + '/menu1.png';

$(document).ready(function() {
   // Event-Handler für den Button
   $('#menu-btn').on('click', function(e) {
      e.stopPropagation();
      toggeleMenu();
   });

   // Event-Handler für header, main und Footer.
   // So wird die Navigation geschlossen, sobald
   // auf eines dieser Elemente geklickt wird.
   $('header, main, footer').on('click', function() {
      if(menuOpen) {
         toggeleMenu();
      }
   });
});

// Das Menü öffnen bzw. schließen.
function toggeleMenu() {
   if(!menuOpen) {
      $('#main_nav').show('slow');
		$('#menu-btn').attr('src', menu1);
      // Zustand der Navigation merken
      menuOpen = true;
   }
   else {
      $('#main_nav').hide('slow');
		$('#menu-btn').attr('src', menu0);
      // Zustand der Navigation merken
      menuOpen = false;
   }
}
