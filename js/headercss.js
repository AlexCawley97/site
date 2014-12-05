$(document).ready(function() {

    var $nav_li = $('.nav-li');
    var $nav_a = $('nav-a');


    $nav_li.mouseenter(function() {
        if( !$(this).hasClass('active') ) {
            $(this).css('background-color', '#ff6347').css('flex-grow', 2);
        }
    }).mouseleave(function () {
        if( !$(this).hasClass('active') ) {
            $(this).css('background-color', 'rgba(220, 220, 220, 0.7)').css('flex-grow', 1);
        }
    }); // end mousleave

}); // end ready
