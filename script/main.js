
$(document).ready();
jQuery(function($){
    $( '.menu-btn' ).click(function(){
        $('.responsive-menu').toggleClass('expand')
    });
    $( '.sub-menu').click(function(){
        $('.children').toggleClass('expand')
    });
    $( '.fa-search').click(function(){
        $('#barre_de_recherche').toggleClass('expand');
    })

});
