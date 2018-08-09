// Sticky Header 
$(window).on("scroll", function() {
    if($(window).scrollTop() > 10) {
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

(function() {
  [].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
    new CBPFWTabs( el );
  });

})();

$('.owl-recipe').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
    navText: ["<img src='wp-content/themes/drgn/static/images/layout/small_arrow_left.png'>","<img src='wp-content/themes/drgn/static/images/layout/small_arrows_right.png'>"],
    items: 1
});


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



 $('.slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: false,
  asNavFor: '.slider-nav-thumbnails',
 });

 $('.slider-nav-thumbnails').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: '.slider',
  dots: true,
  focusOnSelect: true
 });

 // Remove active class from all thumbnail slides
 $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');

 // Set active class to first thumbnail slides
 $('.slider-nav-thumbnails .slick-slide').eq(0).addClass('slick-active');

 // On before slide change match active thumbnail to current slide
 $('.slider').on('beforeChange', function (event, slick, currentSlide, nextSlide) {
  var mySlideNumber = nextSlide;
  $('.slider-nav-thumbnails .slick-slide').removeClass('slick-active');
  $('.slider-nav-thumbnails .slick-slide').eq(mySlideNumber).addClass('slick-active');
});
