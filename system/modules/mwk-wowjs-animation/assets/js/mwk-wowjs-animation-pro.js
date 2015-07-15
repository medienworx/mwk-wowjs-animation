$( document ).ready(function() {

    // initialize WOW
    wow = new WOW(
        {
            mobile: true
        });
    wow.init();

    // add listener to element
    $('.wow').appear();

    // check if element listener fires
    $(document.body).on('appear', '.wow', function(event, all_appeared_elements) {
        all_appeared_elements.each(function() {
            if ($(this).attr('class').search('animation-done') == -1) {
                existingClasses = $(this).attr('class');
                newElement = $(this).clone().removeClass();
                $(this).replaceWith(newElement);
                newElement.addClass(existingClasses);
                newElement.addClass('animation-done');
            }
        });
    });
    $(document.body).on('disappear', '.wow', function(event, all_disappeared_elements) {
        all_disappeared_elements.each(function() {
            $(this).removeClass('animation-done');

        });
    });
    $.force_appear();
});
