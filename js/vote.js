$(document).ready(function(){


/* Main code */
/**********************************************************************************************************************/

    if (localStorage.getItem('vote-2018-nnm') !== null)

    {
        $('.vote-btn, #vote-note').remove();
    }


    /* Scroll to element */

    $('.vote-btn').click( function(e){

        e.preventDefault();

        var work_id = this.id;

        $.ajax({
            type: "POST",
            async: true,
            url: "../../ajax/concurs_vote.php",
            data: "id="+work_id,

            success: function(res) {

                if (res)
                {
                    $('#v'+work_id).text('Голосов: '+res);
                    localStorage.setItem('vote-2018-nnm', 'voted');
                    $('.vote-btn').remove();
                    $( "#modal-windows-vote" ).show().animate({
                        top: "0px"
                    }).delay(1000).fadeOut();


                   // alert('Спасибо за Ваш голос!');
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

    });


}); //jQuery