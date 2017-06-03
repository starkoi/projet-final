
$(document).ready();
jQuery(function($){
    $( '.menu-btn' ).click(function(){
        $('.responsive-menu').toggleClass('expand')
    });
    $( 'li.sub-menu').click(function(){
        $('.children').toggleClass('expand')
    });
    $( '.fa-search').click(function(){
        $('#search').toggleClass('expand')
    })

});
