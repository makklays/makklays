

$(document).ready(function() {

    $('.btn-package').on('click', function () {

        var id_package = $(this).attr('id-package');
        //alert('click by package = ' + id_package);

        location.href = '/package/' + id_package;

        return false;
    });

});