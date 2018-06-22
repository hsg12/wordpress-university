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

    /* Media for favicon */
    
    var frameFavicon = wp.media({
        title: 'Select or upload favicon',
        button: {
            text: 'Use this media'
        },
        multiple: false // User can select only one image per select
    });

    $('#fu_uploadFaviconBtn').click(function(e){
        e.preventDefault();
        frameFavicon.open();
    });

    frameFavicon.on('select', function(){
        var attachment = frameFavicon.state().get('selection').first().toJSON();
        $('input[name=fu_inputFaviconImg]').val(attachment.url);
    });
    
    /* End Block  */

});
