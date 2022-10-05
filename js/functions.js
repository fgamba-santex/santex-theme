/**
 * Theme functions file
 *
 * Contains handlers for navigation, accessibility, header sizing
 * footer widgets and Featured Content slider
 *
 */
 function sendContact( ) { 
    var email  =  jQuery("#form-field-email").val();
    var name   =  jQuery("#form-field-name").val();
    var message =  jQuery("#form-field-message").val();
	var company =  jQuery("#form-field-company").val();
	var telephone =  jQuery("#form-field-telephone").val();
	 
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var html = "";
	if (!filter.test(email ) || email == "" ) {
		html += "<p>Email is not valid.</p>";
	}
	if (name == "") {
		html += "<p>Name is required</p>";
	}
	if (message == "") {
		html += "<p>Message is required</p>";
	}
	if (html !== "") {
		jQuery("#success").css({"color":"#ff0000", "padding":"10px"});
		jQuery("#success").html(html);
		return false;
	}
	//disable submit button and pop up the shadow
	jQuery("#submit").prop("disabled", true);
	jQuery(".modalHalfChild").css("position", "relative");
	jQuery("#shadow").css( {"position": "absolute", "width": "100%", "height": "100vw", "background": "rgba(211,211,211, 0.6)",  "top": "0", "left": "0", "z-index": "2" });
	jQuery("#shadow").show();
	const url = window.location.href + "wp-json/email/name";
	 
	var data =  { 
			   email  :  jQuery("#form-field-email").val() ,
			   name   :  jQuery("#form-field-name").val() ,
			   message :  jQuery("#form-field-message").val(),
               company :  jQuery("#form-field-company").val(),
               telephone : jQuery("#form-field-telephone").val() 			   
			};  
	jQuery.post({
	    url: url,
		data: data, 
		success: function(data){ console.log("success: " + data);
		  jQuery("#shadow").hide();
          jQuery("#success").css({"color":"#ff0000", "padding":"10px"});		
		  jQuery("#success").html("<p >Email sent successfully, we will be in touch very soon! </p>");
	      jQuery("#form-field-email").val("") ;
		  jQuery("#form-field-name").val("");
		  jQuery("#form-field-message").val("");
          jQuery("#form-field-company").val("");
          jQuery("#form-field-telephone").val("");
		  jQuery("#submit").prop("disabled", false);
		  const width = $( window ).width();
		  setTimeout(()=> {jQuery(".modalHalfClose").click() }, 3000); 
	    },
		error: function(xhr, status, thrownError){
			console.log("Error"  +  " - " + thrownError, this.props.url, status );
			 
		}
    }) 
	.done( function(data ) {   
	 
	        
		  jQuery("#shadow").hide();
          jQuery("#success").css({"color":"#ff0000", "padding":"10px"});		
		  jQuery("#success").html("<p >Email sent successfully, we will be in touch very soon! </p>");
	      jQuery("#form-field-email").val("") ;
		  jQuery("#form-field-name").val("");
		  jQuery("#form-field-message").val("");
          jQuery("#form-field-company").val("");
          jQuery("#form-field-telephone").val("");
		  jQuery("#submit").prop("disabled", false);
		  const width = $( window ).width();
		    if (width > 550) { 
		      setTimeout(()=> {jQuery("#modalHalfWrapper").hide() },  3000); 
		    } else {
			  jQuery(".modalHalfClose").click();
		    }
		 
	    })
	.always( function(data) {  
		  jQuery("#shadow").hide();
          jQuery("#success").css("color","#ff0000");		
		  jQuery("#success").html("<p >Email sent successfully, we will be in touch very soon! </p>");
	      jQuery("#form-field-email").val("") ;
		  jQuery("#form-field-name").val("");
		  jQuery("#form-field-message").val("");
          jQuery("#form-field-company").val("");
          jQuery("#form-field-telephone").val("");
		  jQuery("#submit").prop("disabled", false);
		  const width = $( window ).width();
		    if (width > 550) { 
		      setTimeout(()=> {jQuery("#modalHalfWrapper").hide() },  3000); 
		    } else {
			  jQuery(".modalHalfClose").click();
		    }
		 
	    }); 		
 }
  
( function( $ ) {
    var body    = $( 'body' ),
        _window = $( window ),
        nav, button, menu;

    nav = $( '#primary-navigation' );
    button = $( '#menu-toggle' );
    menu = nav.find( '.nav-menu' );


    menu.find('a').on('click', function (e) {

        if($( window ).width() > 782) {
            return;
        }
        nav.toggleClass( 'toggled-on' );
        button.toggleClass('menu-toggle-active');
        $("#menu-toggle-icon").toggleClass('fa-times');
        $("#menu-toggle-icon").toggleClass('icon_menu_mobile');
        if ( nav.hasClass( 'toggled-on' ) ) {
            $( '#menu-toggle' ).attr( 'aria-expanded', 'true' );
            menu.attr( 'aria-expanded', 'true' );

        } else {
            $( '#menu-toggle' ).attr( 'aria-expanded', 'false' );
            menu.attr( 'aria-expanded', 'false' );

        }

    });

    // Enable menu toggle for small screens.
    ( function() {
        if ( ! nav.length || ! button.length ) {
            return;
        }

        // Hide button if menu is missing or empty.
        if ( ! menu.length || ! menu.children().length ) {
            button.hide();
            return;
        }

        button.on( 'click.twentyfourteen', function() {
            nav.toggleClass( 'toggled-on' );
            button.toggleClass('menu-toggle-active');
            $("#menu-toggle-icon").toggleClass('fa-times');
            $("#menu-toggle-icon").toggleClass('icon_menu_mobile');
            if ( nav.hasClass( 'toggled-on' ) ) {
                $( this ).attr( 'aria-expanded', 'true' );
                menu.attr( 'aria-expanded', 'true' );

            } else {
                $( this ).attr( 'aria-expanded', 'false' );
                menu.attr( 'aria-expanded', 'false' );

            }
        } );
    } )();


    /*
     * Makes "skip to content" link work correctly in IE9 and Chrome for better
     * accessibility.
     *
     * @link http://www.nczonline.net/blog/2013/01/15/fixing-skip-to-content-links/
     */
    _window.on( 'hashchange.twentyfourteen', function() {
        var hash = location.hash.substring( 1 ), element;

        if ( ! hash ) {
            return;
        }

        element = document.getElementById( hash );

        if ( element ) {
            if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) ) {
                element.tabIndex = -1;
            }

            element.focus();

            // Repositions the window on jump-to-anchor to account for header height.
            window.scrollBy( 0, -80 );
        }
    } );

    $( function() {
        // Search toggle.
        $( '.search-toggle' ).on( 'click.twentyfourteen', function( event ) {
            var that    = $( this ),
                wrapper = $( '#search-container' ),
                container = that.find( 'a' );

            that.toggleClass( 'active' );
            wrapper.toggleClass( 'hide' );

            if ( that.hasClass( 'active' ) ) {
                container.attr( 'aria-expanded', 'true' );
            } else {
                container.attr( 'aria-expanded', 'false' );
            }

            if ( that.is( '.active' ) || $( '.search-toggle .screen-reader-text' )[0] === event.target ) {
                wrapper.find( '.search-field' ).focus();
            }
        } );

        /*
         * Fixed header for large screen.
         * If the header becomes more than 48px tall, unfix the header.
         *
         * The callback on the scroll event is only added if there is a header
         * image and we are not on mobile.
         */
        if ( _window.width() > 781 ) {
            var mastheadHeight = $( '#masthead' ).height(),
                toolbarOffset, mastheadOffset;

            if ( mastheadHeight > 48 ) {
                body.removeClass( 'masthead-fixed' );
            }

            if ( body.is( '.header-image' ) ) {
                toolbarOffset  = body.is( '.admin-bar' ) ? $( '#wpadminbar' ).height() : 0;
                mastheadOffset = $( '#masthead' ).offset().top - toolbarOffset;

                _window.on( 'scroll.twentyfourteen', function() {
                    if ( _window.scrollTop() > mastheadOffset && mastheadHeight < 49 ) {
                        body.addClass( 'masthead-fixed' );
                    } else {
                        body.removeClass( 'masthead-fixed' );
                    }
                } );
            }
        }

        // Focus styles for menus.
        $( '.primary-navigation, .secondary-navigation' ).find( 'a' ).on( 'focus.twentyfourteen blur.twentyfourteen', function() {
            $( this ).parents().toggleClass( 'focus' );
        } );
    } );
	 

//     document.addEventListener( 'wpcf7mailsent', function( event ) {
//         if($('.survey-form-container').length) {
//             console.log(event);
//         } else {
//             window.location.href = "http://santexgroup.rds.land/thank-you-contact-home";
//         }
//
//
//     }, false );

    // document.addEventListener( 'wpcf7mailsent', function( event ) {
    //     window.location.href = "http://santexgroup.rds.land/thank-you-contact-home";
    // }, false );


} )( jQuery );
