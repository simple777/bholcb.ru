$(document).ready(function(){


/* Main code */
/**********************************************************************************************************************/

    /* Button go to top */

    $("#back-top").hide();

    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 1200) {
                $('#back-top').fadeIn();
            } else {
                $('#back-top').fadeOut();
            }
        });

        $('#back-top a').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 500);
            return false;
        });
    });


    /* Scroll to element */

    $('.go_to').click( function(){

        var scroll_el = $(this).data('goto');

        if ($(scroll_el).length != 0) {
            $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 500); // анимируем скроолинг к элементу scroll_el
        }
        return false;
    });



}); //jQuery