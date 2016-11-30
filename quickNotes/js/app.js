$('textarea').css('height', $(window).height() - 130);
$('textarea').keyup(function () {
    $.post('updateDiary.php', {diary: $('textarea').val()});
});