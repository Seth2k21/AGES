document.addEventListener('DOMContentLoaded', function() {
    // Sélectionnez l'élément où vous voulez afficher la phrase
    var phraseContainer = document.getElementById('phrase-container');

    // Définissez la phrase automatique
    var phrase = '<h2 style="color:#000000; font-size:15px"><span style="color:#3D006A; font-size:35px"">Welcome to <br>Adiyon Group</span> <br>Your trusted partner for <br>innovative and personalized engineering <br>solutions</h2>';

    // Mettez la phrase dans l'élément
    phraseContainer.innerHTML = phrase;
});