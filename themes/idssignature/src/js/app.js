jQuery(document).ready(function ($) {

    $('#hamburger').on('click', function(){
        $('.modalMenu').fadeIn();

        if($(window).width() <= 991){
            $('#hamburger').hide();
            $('#hamburger-close').show();
        }
    });

    if($(window).width() <= 991){
        $('.modalMenu_menu span').on('click', function(){
            $('.modalMenu').hide();
            $('#hamburger').show();
            $('#hamburger-close').hide();
        });
    };

    $('#hamburger-close').on('click', function(){
        $(this).hide();
        $('#hamburger').show();
        $('.modalMenu').fadeOut();
    });

    $('.modalMenu-close').on('click', function(){
        $('.modalMenu').fadeOut();
    });

});
  

