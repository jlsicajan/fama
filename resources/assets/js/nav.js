function close_menu_sm(){
    $('.menu-sm').css('display', 'none');
    $('.open-menu-sm').css('display', 'block');
    $('.close-menu-sm').css('display', 'none');
}

function open_menu_sm(){
    $('.menu-sm').css('display', 'flex');
    $('.open-menu-sm').css('display', 'none');
    $('.close-menu-sm').css('display', 'block');
}

$(document).ready(function(){
    $( '.dropdown-menu a.dropdown-toggle' ).on( 'click', function ( e ) {
        var $el = $( this );
        var $parent = $( this ).offsetParent( ".dropdown-menu" );
        if ( !$( this ).next().hasClass( 'show' ) ) {
            $( this ).parents( '.dropdown-menu' ).first().find( '.show' ).removeClass( "show" );
        }
        var $subMenu = $( this ).next( ".dropdown-menu" );
        $subMenu.toggleClass( 'show' );

        $( this ).parent( "li" ).toggleClass( 'show' );

        $( this ).parents( 'li.nav-item.dropdown.show' ).on( 'hidden.bs.dropdown', function ( e ) {
            $( '.dropdown-menu .show' ).removeClass( "show" );
        } );

        if ( !$parent.parent().hasClass( 'navbar-nav' ) ) {
            $el.next().css( { "top": $el[0].offsetTop, "left": $parent.outerWidth() - 4 } );
        }

        return false;
    } );

    $('.open-menu-sm').unbind('click').click(open_menu_sm);

    $('.close-menu-sm').unbind('click').click(close_menu_sm);
});