$(function () {
    $('.toggleIcon').on('click', function () {
        $(this).parent('div').toggleClass('backGreen');
        if ($(this).children().hasClass("glyphicon-chevron-down")) {
            $(this).children('.glyphicon-chevron-down').attr('class', 'glyphicon glyphicon-chevron-up');
        } else {
            $(this).find('.glyphicon-chevron-up').attr('class', 'glyphicon glyphicon-chevron-down');
        }
    });
});

