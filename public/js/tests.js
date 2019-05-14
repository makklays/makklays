
$(document).ready(function() {

    // click on image
    $('.ch-block').on('click', function () {
        var choi = $(this).attr('choo');

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        // sent data to site
        $.ajax({
            type: "POST",
            url: '/test-data/' + choi,
            //data: {choice: choi, param:"valu"},
            beforeSend: function () {
                // preloader
                $('#id-loader-test').css('display', 'block');
            },
            complete: function () {
                // complete
            },
            error: function (jqXHR, textStatus, errorThrown) {
                // Error
                alert('Error!');
                console.log(textStatus, errorThrown);
            },
            success: function (response) {
                // success
                //alert(response.result);
                location.href = '/test-result';
            },
            dataType: 'json'
        });

        return false;
    });
});