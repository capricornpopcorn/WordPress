jQuery(document).ready(function($){
    'use strict';

    // Search
    $('.coblog-search').click(function () {
        $('.coblog-header-search').fadeIn(500);
    });
    
    $('.coblog-search-close').click(function(){
        $('.coblog-header-search').fadeOut(500);
    });

    function wpMenuAccordion( selector ){
        var $ele = selector + ' .menu-item-has-children > a';
        $( $ele ).each( function(){
            var text = $( this ).text();
            text = text + '<span class="fas fa-angle-down triangle"></span>';
            $( this ).html( text );
        });
    
        $( document ).on( 'click', $ele + ' span.triangle', function( e ){
            e.preventDefault();
            e.stopPropagation();
    
            $parentLi = $( this ).parent().parent( 'li' );
            $childLi = $parentLi.find( 'li' );
    
            if( $parentLi.hasClass( 'open' ) ){
                /**
                * Closing all the ul inside and 
                * removing open class for all the li's
                */
                $parentLi.removeClass( 'open' );
                $childLi.removeClass( 'open' );
    
                $( this ).parent( 'a' ).next().slideUp();
                $( this ).parent( 'a' ).next().find( 'ul' ).slideUp();
            }else{
    
                $parentLi.addClass( 'open' );
                $( this ).parent( 'a' ).next().slideDown();
            }
        });
    };
    wpMenuAccordion( '.coblog-offcanvas-menu' );

    //offcanvas
    var toggleNav = function () {
        if ($('body').hasClass('coblog-offcanvas-active')) {
          // Nav Close
          $('body').removeClass('coblog-offcanvas-active');
          $('.coblog-close-canvas').removeClass('coblog-offcanvas-close-active');
        } else {
          // Nav Open
          $('body').addClass('coblog-offcanvas-active');
          $('.coblog-close-canvas').addClass('coblog-offcanvas-close-active');
        }
    }

    // Toggle Nav on Click
    $('.coblog-trigger, .coblog-close-canvas').click(function() {        
        toggleNav();
    });


});
