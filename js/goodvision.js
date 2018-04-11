$(document).ready(function(){


    /* Good vision button click */
    /******************************************************************************************************************/

    $(".good-vision").click(


    function()

    {

        $("body").toggleClass("good-vision-style");

        if ($("body").hasClass("good-vision-style"))
        {

            try
            {

                /* 1. Slider stop: completed in slider.js */

                /* hide slider controls */

                $(".slides-fader-controls").hide();


                /* 2. Show [good vision] control panel */

                $(".good-vision-menu-wrapper").addClass('visible');

                //save [good vision mode] state in localstorage
                localStorage.setItem('good-vision', '1');


                /* Recording in localstorage [config] for [good vision mode] */
                // font-size (small(14px),normal(16px),big(20px)):      normal;
                // theme     (white-black,black-white,blue-darkblue):   white-black
                // images    (on,off):                                  off



               /* Font */
                var gvFontSize = localStorage.getItem('good-vision-font-size');

                if (gvFontSize === null)  //if fontsize not saved in localstorage - save it
                {
                    gvFontSize = $('.good-vision-font-items').find('.good-vision-font-item-active').data('fs');
                    localStorage.setItem('good-vision-font-size', gvFontSize);
                }

                $("body").addClass(gvFontSize);



                /* Theme */
                var gvTheme = localStorage.getItem('good-vision-theme');

                if (gvTheme === null)  //if theme not saved in localstorage - save it
                {
                    gvTheme = $('.good-vision-theme-items').find('.good-vision-theme-item-active').data('th');
                    localStorage.setItem('good-vision-theme', gvTheme);
                }

                $("body").addClass(gvTheme);


                /* Images */
                var gvImageOff = localStorage.getItem('good-vision-image');
                var gvImageClass = 'gv-img-off';

                if (gvImageOff === null)
                {
                    localStorage.setItem('good-vision-image', 'on');
                }

                else //else load from localstorage

                {
                    if (gvImageOff == 'off')
                    {
                       $("body").addClass(gvImageClass);
                       $(".good-vision-img-switch-but").text('Включить');
                    }
                    else
                        {
                            $("body").removeClass(gvImageClass);
                            $(".good-vision-img-switch-but").text('Отключить');
                        }
                }

                    }



                catch (e)
                {
                    if (e == QUOTA_EXCEEDED_ERR) {
                        alert('Ошибка в вашем браузере "[localstorage: Превышен лимит]" Вам придется на каждой странице нажимать эту кнопку!');
                    }
                }

        }

        else
        {
            localStorage.setItem('good-vision', '0');

            //when switch off [good vision mode] - clear all classes for <body>
            $("body").removeClass();

            //show slider controls
            $(".slides-fader-controls").show();

            //hide [good vision] control panel
            $(".good-vision-menu-wrapper").removeClass('visible');
        }

    });



    /* Good vision: [font-item] click */
    /******************************************************************************************************************/

    $(".good-vision-font-item").click(

        function ()

        {
            var activeItemClass = "good-vision-font-item-active";
            var activeItem = $(this).parent().find("."+activeItemClass);
            var activeFont = activeItem.data("fs");
            var newFont = $(this).data("fs");

        /* change body font */
            $("body").removeClass(activeFont);
            $("body").addClass(newFont);

        /* change style of font-item-button */
            activeItem.removeClass(activeItemClass);
            $(this).addClass(activeItemClass);

        /* save font in localstorage */
            localStorage.setItem('good-vision-font-size', newFont);

        });



    /* Good vision: [theme-item] click */
    /******************************************************************************************************************/

    $(".good-vision-theme-item").click(

        function ()

        {
            var activeItemClass = "good-vision-theme-item-active";
            var activeItem = $(this).parent().find("."+activeItemClass);
            var activeTheme = activeItem.data("th");
            var newTheme = $(this).data("th");

            /* change body theme */
            $("body").removeClass(activeTheme);
            $("body").addClass(newTheme);

            /* change style of theme-item-button */
            activeItem.removeClass(activeItemClass);
            $(this).addClass(activeItemClass);

            /* save font in localstorage */
            localStorage.setItem('good-vision-theme', newTheme);

        });



    /* Good vision: images control but click */
    /******************************************************************************************************************/

    $(".good-vision-img-switch-but").click(


        function ()

        {

            var activeClass = 'good-vision-img-switch-but-active';
            var imgClass = 'gv-img-off';

            $(this).toggleClass(activeClass);


            if ($(this).hasClass(activeClass))
            {
                $(this).text('Включить');
                $("body").addClass(imgClass);

                localStorage.setItem('good-vision-image', 'off');
            }

            else
                {
                    $(this).text('Отключить');
                    $("body").removeClass(imgClass);

                    localStorage.setItem('good-vision-image', 'on');
                }


        });



    /* Functions */
    /**********************************************************************************************************************/

    /* On load page function */

    function good_vision_On(switcher)

    {
        if (switcher) {

            if (switcher == '1')
            {
                $("body").addClass("good-vision-style");

                //and show [good vision] control panel
                $(".good-vision-menu-wrapper").addClass('visible');



            /* Font init from localstorage */

                var font =  localStorage.getItem('good-vision-font-size');

                if (font)
                {
                    $("body").addClass(font);

                    var activeItemClass = "good-vision-font-item-active";
                    var activeItem = $("."+activeItemClass);
                    var newactiveItem = $(".good-vision-font-items").children('[data-fs="'+font+'"]');

                    activeItem.removeClass(activeItemClass);
                    newactiveItem.addClass(activeItemClass);

                }



            /* Theme init from localstorage */

                var theme =  localStorage.getItem('good-vision-theme');

                if (theme)
                {
                    $("body").addClass(theme);

                    var activeItemClass = "good-vision-theme-item-active";
                    var activeItem = $("."+activeItemClass);
                    var newactiveItem = $(".good-vision-theme-items").children('[data-th="'+theme+'"]');

                    activeItem.removeClass(activeItemClass);
                    newactiveItem.addClass(activeItemClass);

                }



            /* Images init from localstorage */

                    var imgOff =  localStorage.getItem('good-vision-image');
                    var imgOffClass= 'gv-img-off';
                    var imgOffClassActive = 'good-vision-img-switch-but-active';

                    if (imgOff == 'off')
                    {
                        $("body").addClass(imgOffClass);
                        $(".good-vision-img-switch-but").addClass(imgOffClassActive);
                        $("."+imgOffClassActive).text('Включить');

                    }


                return true; //gv ON
            }

            else
            {
                $("body").removeClass("good-vision-style");

                return false; //gv OFF
            }

        }
    }



/* Main code */
/**********************************************************************************************************************/

    /* Good vision mode: on/off */

    var gv_isEnabled = localStorage.getItem('good-vision');

    /* Init parameters and launch [good vision mode] */

    good_vision_On(gv_isEnabled);


}); //jQuery