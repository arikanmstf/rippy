$(function () {
    // Toggle when click an item element
    $('.navigation').on('click', '.title', function (e) {
        $(this).parent().find('.itemMembers').toggle();
    });
});
