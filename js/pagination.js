$(document).ready(function(){

    /* Functions */


    /******************************************************************************************************************/


    //get current Year and Month
    function getDate()
    {
        var result = [];
        var date_Current = new Date();

        result[0] = date_Current.getFullYear();
        result[1] = date_Current.getMonth();

        return result;
    }


    /******************************************************************************************************************/


    //select on news filter current year and month
    function dateSelect(year, month)
    {

        var success_Year = false;
        var success_Month = false;

        //year select if exist
        $('.news-filter-year-item').each(function(){

            if ( Number(year) == Number($(this).text()))
           {
              $(this).addClass('news-filter-year-item-selected');
              success_Year = true;
              return false;
           }
        });

        //month select if exist
        $('.news-filter-month-item').each(function(){

            if ( Number(month+1) == Number($(this).attr('data-id')))
            {
                $(this).addClass('news-filter-month-item-selected');
                success_Month = true;
                return false;
            }
        });

        if (success_Year && success_Month) { return true; } else { return false; }

    }


    /******************************************************************************************************************/


    function year_Get()

    {

        if (!$(this).hasClass('news-filter-year-item-selected'))

        {

            $('.news-filter-year').find('.news-filter-year-item-selected').removeClass('news-filter-year-item-selected');
            $(this).addClass('news-filter-year-item-selected');


            var month = $('.news-filter-month-item-selected').attr('data-id');


            //push year and month to php
            $.ajax({
                type: "POST",
                async: true,
                url: "ajax/news_filter.php",
                data: "year="+$(this).text()+"&month="+month,
                success: function(html) {

                    if (html)
                    {
                        $('.news').animate({ opacity: 0 }, 500, function() {

                            $(this).html(html).animate({ opacity: 1 }, 500);

                            //showmore but click
                            $('.news-show-more-but').on('click', news_Showmore);

                        } );
                    }

                }//success

            });//ajax

        }//if

    }

    /******************************************************************************************************************/


    function month_Get()

    {

        if (!$(this).hasClass('news-filter-month-item-selected'))
        {

            $('.news-filter-month').find('.news-filter-month-item-selected').removeClass('news-filter-month-item-selected');
            $(this).addClass('news-filter-month-item-selected');

            var year = $('.news-filter-year-item-selected').text();

            //push year and month to php
            $.ajax({
                type: 'POST',
                async: true,
                url: 'ajax/news_filter.php',
                data: "year="+year+"&month="+$(this).attr('data-id'),
                success: function(html) {

                    if (html)
                    {
                        $('.news').animate({ opacity: 0 }, 500, function() {

                            $(this).html(html).animate({ opacity: 1 }, 500);

                            //showmore but click
                            $('.news-show-more-but').on('click', news_Showmore);

                        });
                    }

                } //success

            });//ajax

        }//if

    }

    /******************************************************************************************************************/


   function news_Showmore() {

        //hide show-more button
        $('.news-show-more').remove();

        //adding preload image
        $('.news').append("<div id='news-preloader' class='clearfix'><img src='images/gif/preloader-circle.gif' width='64px' height='64px'></div>");


          $.ajax({
               type: 'POST',
               async: true,
               url: 'ajax/news_showmore.php',
               success: function(html) {

                   if (html)
                   {

                       //remove preloader from container
                       $('#news-preloader').fadeOut(300, function(){ $(this).remove() });

                       //insert html to news container
                       $('.news').append(html);


                       //scrolling to latest news
                       $('html, body').animate({
                           scrollTop: '+=300px'
                       }, 500);


                       //add showmore button click event
                       $('.news-show-more-but').on('click', news_Showmore);
                   }
               } //success
           }); //ajax

   }


    /******************************************************************************************************************/

    /* Main code */


    //filter click events
    $('.news-filter-year-item').on('click', year_Get);
    $('.news-filter-month-item').on('click', month_Get);

    //showmore but click
    $('.news-show-more-but').on('click', news_Showmore);


    //init: select date on news filter
    var date_Current = getDate();

    if (!dateSelect(date_Current[0], date_Current[1]))

    {
        alert('Установите верную дату на своем компьютере!');
    }


}); //jQuery