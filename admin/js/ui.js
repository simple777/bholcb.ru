$(document).ready(function(){

/* Submit events */
/**********************************************************************************************************************/

    /* News insert */

    $('#admin-insert-news').submit(function (e) {

        //отменяем стандартное действие при отправке формы
        e.preventDefault();

        //берем из формы метод передачи данных
        var m_method=$(this).attr('method');

        //получаем адрес скрипта на сервере, куда нужно отправить форму
        var m_action=$(this).attr('action');

        //получаем данные, введенные пользователем в формате input1=value1&input2=value2...,
        //то есть в стандартном формате передачи данных формы
        var m_data=$(this).serialize();

        $.ajax({
            type: m_method,
            url: m_action,
            data: m_data,
            success:

                function(res)
                {
                    alert(res);
                }
        }); //ajax

    }); //submit

    /* Person insert */

    $('#admin-insert-person').submit(function (e) {

        //отменяем стандартное действие при отправке формы
        e.preventDefault();

        //берем из формы метод передачи данных
        var m_method=$(this).attr('method');

        //получаем адрес скрипта на сервере, куда нужно отправить форму
        var m_action=$(this).attr('action');

        //получаем данные, введенные пользователем в формате input1=value1&input2=value2...,
        //то есть в стандартном формате передачи данных формы
        var m_data=$(this).serialize();

        $.ajax({
            type: m_method,
            url: m_action,
            data: m_data,
            success:

                function(res)
                {
                    alert(res);
                }
        }); //ajax

    }); //submit



/* Controls */
/**********************************************************************************************************************/

    /* Make dir */

    $('#but-make-dir').on('click', function() {

        var category = $('#category').text();


        switch (category)
        {
            case 'news':
                {
                    var dir_name = $("#title-eng").val()+'/';
                    var dir_name_ru = $("#title").val();
                    break;
                }

            case 'person':
                {
                    var dir_name = $("#name_eng").val()+'/';
                    var dir_name_ru = $("#name").val();
                    break;
                }
        }



        $.ajax({
            type: "POST",
            async: true,
            url: "../admin/ajax/dir_make.php",
            data: "dir_name="+dir_name+"&dir_name_ru="+dir_name_ru+'&category='+category,
            success: function(html) {

                if (html)
                {
                    //get path from returned html

                    var arr = html.split('::');

                    $("#path").val(arr[1]);
                    $("#url").val(arr[2]);

                    alert(html);
                }

            }//success

        });//ajax

    });



/**********************************************************************************************************************/



    /* Images prepare */

    $('#images-prepare').on('click', function() {


        var dir_path = $("#path").val();
        var dir_url = $("#url").val();


        if ( dir_path != '' )
            {

                //1. Show preloader

                    $('#images-preview').text('');

                    $('#preloader_h').show();

                //2. Ajax query



                    $.ajax({
                        type: "POST",
                        async: true,
                        url: "../admin/ajax/img_prepare.php",
                        data: "dir_path="+dir_path+"&dir_url="+dir_url,

                        success: function(res) {

                            $('#preloader_h').hide();

                            var img_alt = $('#title').val();

                            if (res)
                            {

                                $('#images-preview').text('');

                                //get path from returned html

                                var pathes_array = res.split('::');

                                //images count for record in db

                                $('#img-count').val(pathes_array[pathes_array.length-1]);


                                //separate gallery and main&prev folders

                                var gallery_array = new Array();
                                var main_array = new Array();
                                var thumb_array = new Array();

                                var k = 0;
                                var j = 0;
                                var t = 0;

                                $.each(pathes_array, function(index, value)
                                {

                                    if (value.indexOf('gallery') !== -1)
                                        {
                                            gallery_array[k] =  value;
                                            k++;
                                        }
                                        else if (value.indexOf('main') !== -1 || value.indexOf('prev') !== -1)
                                            {
                                                main_array[j] = value;
                                                j++;
                                            }

                                            else if (value.indexOf('thumb') !== -1)
                                                {
                                                    thumb_array[t] = value;
                                                    t++;
                                                }

                                });

                                //genereta html for gallery

                                var i = 0;

                                $('#gallery-html').val("<div class='gallery-wrapper'> \n \t <div class='gallery'> \n");

                                while (i < gallery_array.length)
                                {
                                    var gallery_html =
                                        "\t \t <a href='"+gallery_array[i]+"'>\n" +
                                            "\t \t \t <img src='"+thumb_array[i]+"' title='"+img_alt+" "+(i+1)+"' alt='"+img_alt+"'> \n" +
                                        "\t \t </a>\n";

                                    $('#gallery-html').val($('#gallery-html').val() + gallery_html);

                                    if (i == gallery_array.length - 1)
                                    {
                                        $('#gallery-html').val($('#gallery-html').val() + '\t </div> \n </div> \n');
                                    }

                                    i++;
                                }

                                //output filenames and previews for main images

                                $.each(main_array, function(index, value)
                                {
                                    var image_str = "<div class='images-preview-wrapper clearfix'>" +
                                            "<img src='"+value+"' width='50px' class='minimized'>" +
                                            "<div class='images-preview-text'>"+value+"</div>" +
                                        "</div>";

                                    $('#images-preview').append(image_str);
                                });

                            }

                        },//success

                        error: function (jqXHR, exception) {
                            var msg = '';
                            if (jqXHR.status === 0) {
                                msg = 'Not connect.\n Verify Network.';
                            } else if (jqXHR.status == 404) {
                                msg = 'Requested page not found. [404]';
                            } else if (jqXHR.status == 500) {
                                msg = 'Internal Server Error [500].';
                            } else if (exception === 'parsererror') {
                                msg = 'Requested JSON parse failed.';
                            } else if (exception === 'timeout') {
                                msg = 'Time out error.';
                            } else if (exception === 'abort') {
                                msg = 'Ajax request aborted.';
                            } else {
                                msg = 'Uncaught Error.\n' + jqXHR.responseText;
                            }
                            alert(msg);
                        }

                    });//ajax
            }

    });


/**********************************************************************************************************************/


    /* Clear all fields of the form */

    $('#but-clr-all').on('click', function() {

        $('.forclear').val('');
    });



/* Change events */
/**********************************************************************************************************************/

    $('#name').keypress(function(e) {

        var key = e.which;

        if(key == 13)  // the enter key code
        {
            e.preventDefault();

            var name = $('#name').val().split(' ');

            $('#f_name').val(name[0]);
            $('#s_name').val(name[1]);
            $('#t_name').val(name[2]);

        }

    });

}); //jQuery