$(document).ready(function() {

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
            $('#top-header').removeClass('mover-header');
        } else {
            // Do things on Nav Open
            $('#site-wrapper').addClass('show-nav');
            $('#top-header').addClass('mover-header');
        }
        //$('#site-wrapper').toggleClass('show-nav');
    }


    $('ul.tabs li a:first').addClass('active');
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


    // When the user scrolls the page, execute myFunction


    // Get the header
    var header = document.getElementById("myHeader");



    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }

});