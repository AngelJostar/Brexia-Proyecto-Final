$(function() {
    // Toggle Nav on Click
    $('.toggle-nav').click(function() {
        // Calling a function in case you want to expand upon this.
        toggleNav();
    });
});

function toggleNav() {
    if ($('#site-wrapper').hasClass('show-nav')) {
        // Do things on Nav Close
        $('#site-wrapper').removeClass('show-nav');
    } else {
        // Do things on Nav Open
        $('#site-wrapper').addClass('show-nav');
    }
    //$('#site-wrapper').toggleClass('show-nav');
}


$(document).ready(function() {
    $('ul.tabs li a:first').addClass('active')
    $('.secciones article').hide();
    $('.secciones article:first').show();

    $('ul.tabs li a').click(function() {
        $('ul.tabs li a').removeClass('active');
        $(this).addClass('active');
        $('.secciones article').hide();

        var activeTab = $(this).attr('href');
        $(activeTab).show();
        return false;
    });

});