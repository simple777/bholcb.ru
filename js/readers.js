$(document).ready(function(){


    $('.content-line-block-header').hover(

        function ()
        {
            var elem = $(this).parent().parent().parent().parent();

            elem.find('.content-line-block-text').css('opacity', '1');
            elem.find('.content-line-block-bg').css('opacity', '.2');
        },

        function ()
        {
            var elem = $(this).parent().parent().parent().parent();

            elem.find('.content-line-block-text').css('opacity', '0');
            elem.find('.content-line-block-bg').css('opacity', '1');
        }

    );
});