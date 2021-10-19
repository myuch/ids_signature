jQuery(document).ready(function ($) {

    $('#hamburger').on('click', function(){
        $('.modalMenu').fadeIn();
    });

    $('.modalMenu-close').on('click', function(){
        $('.modalMenu').fadeOut();
    });

});
  

