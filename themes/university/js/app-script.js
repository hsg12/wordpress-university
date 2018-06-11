jQuery(function($){
    var pathname = window.location.pathname;

    // Highlighting sub menu past-events
    if (pathname == '/past-events/') {
        $('ul#menu-main-header-menu li a[href="/events"]').parent('li').addClass('current-menu-item');
    }

    // Highlighting sub menu programs

    if ( pathname.match(new RegExp("/programs/[a-zA-Z-]+")) ) {
        $('ul#menu-main-header-menu li a[href="/programs"]').parent('li').addClass('current-menu-item');
    }

    // Highlighting sub menu events

    if ( pathname.match(new RegExp("/events/[a-zA-Z-]+")) ) {
        $('ul#menu-main-header-menu li a[href="/events"]').parent('li').addClass('current-menu-item');
    }

    //

});






