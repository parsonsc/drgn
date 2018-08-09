// Sticky Header 
$(window).on("scroll", function() {
    if($(window).scrollTop() > 100) {
        $(".header").addClass("sticky");
    } else {
       $(".header").removeClass("sticky");
    }
});

function onScrollInit( items, trigger ) {
  items.each( function() {
    var osElement = $(this),
    osAnimationClass = osElement.attr('data-os-animation'),
    osAnimationDelay = osElement.attr('data-os-animation-delay');
  
    osElement.css({
      '-webkit-animation-delay':  osAnimationDelay,
      '-moz-animation-delay':     osAnimationDelay,
      'animation-delay':          osAnimationDelay
    });

    var osTrigger = ( trigger ) ? trigger : osElement;
    
    osTrigger.waypoint(function() {
      osElement.addClass('animated').addClass(osAnimationClass);
      },{
          triggerOnce: true,
          offset: '90%'
    });
  });
}
onScrollInit( $('.os-animation') );
onScrollInit( $('.staggered-animation'), $('.staggered-animation-container') );


$('.owl-recipe').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    navText: ["<img src='wp-content/themes/drgn/static/images/layout/small_arrow_left.png'>","<img src='wp-content/themes/drgn/static/images/layout/small_arrow_left.png'>"],
    items: 1
});


(function() {
  [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
    new CBPFWTabs( el );
  });

})();


(function() {
  var triggerBttn = document.getElementById( 'trigger-overlay' ),
    overlay = document.querySelector( 'div.overlay' ),
    closeBttn = overlay.querySelector( 'button.overlay-close' );
    transEndEventNames = {
      'WebkitTransition': 'webkitTransitionEnd',
      'MozTransition': 'transitionend',
      'OTransition': 'oTransitionEnd',
      'msTransition': 'MSTransitionEnd',
      'transition': 'transitionend'
    },
    transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
    support = { transitions : Modernizr.csstransitions };

  function toggleOverlay() {
    if( classie.has( overlay, 'open' ) ) {
      classie.remove( overlay, 'open' );
      classie.add( overlay, 'close' );
      var onEndTransitionFn = function( ev ) {
        if( support.transitions ) {
          if( ev.propertyName !== 'visibility' ) return;
          this.removeEventListener( transEndEventName, onEndTransitionFn );
        }
        classie.remove( overlay, 'close' );
      };
      if( support.transitions ) {
        overlay.addEventListener( transEndEventName, onEndTransitionFn );
      }
      else {
        onEndTransitionFn();
      }
    }
    else if( !classie.has( overlay, 'close' ) ) {
      classie.add( overlay, 'open' );
    }
  }

  triggerBttn.addEventListener( 'click', toggleOverlay );
  closeBttn.addEventListener( 'click', toggleOverlay );
})();




