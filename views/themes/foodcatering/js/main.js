AOS.init({
  duration: 100,
  easing: 'slide-up',
  once: true
});

(function ($) {

  'use strict';

  // bootstrap dropdown hover

  // loader
  // var loader = function() {
  //   setTimeout(function() { 
  //     if($('#loader').length > 0) {
  //       $('#loader').removeClass('show');
  //     }
  //   }, 1);
  // };
  // loader();


  $('nav .dropdown').hover(function () {
    var $this = $(this);
    $this.addClass('show');
    $this.find('> a').attr('aria-expanded', true);
    $this.find('.dropdown-menu').addClass('show');
  }, function () {
    var $this = $(this);
    $this.removeClass('show');
    $this.find('> a').attr('aria-expanded', false);
    $this.find('.dropdown-menu').removeClass('show');
  });


  $('#dropdown04').on('show.bs.dropdown', function () {
    console.log('show');
  });

  $('.navbar .dropdown > a').click(function () {
    location.href = this.href;
  });


  //home slider
  $('.home-slider').owlCarousel({
    loop: true,
    autoplay: true,
    margin: 0,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    smartSpeed: 1000,
    nav: true,
    autoplayHoverPause: true,
    items: 1,
    navText: ["<span class='ion-chevron-left'></span>", "<span class='ion-chevron-right'></span>"],
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 1,
        nav: false
      },
      1000: {
        items: 1,
        nav: true
      }
    }
  });

  $('.home-slider-loop-false').owlCarousel({
    loop: false,
    autoplay: true,
    margin: 0,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav: true,
    autoplayHoverPause: true,
    items: 1,
    navText: ["<span class='ion-chevron-left'></span>", "<span class='ion-chevron-right'></span>"],
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 1,
        nav: false
      },
      1000: {
        items: 1,
        nav: true
      }
    }
  });

  //owl carousel
  var majorCarousel = $('.js-carousel-1');
  majorCarousel.owlCarousel({
    loop: true,
    autoplay: true,
    stagePadding: 7,
    margin: 20,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    smartSpeed: 1000,
    nav: true,
    autoplayHoverPause: true,
    items: 3,
    navText: ["<span class='ion-chevron-left'></span>", "<span class='ion-chevron-right'></span>"],
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 2,
        nav: false
      },
      1000: {
        items: 3,
        nav: true,
        loop: false
      }
    }
  });

  //owl carousel
  var major2Carousel = $('.js-carousel-2');
  major2Carousel.owlCarousel({
    loop: true,
    autoplay: true,
    stagePadding: 7,
    margin: 20,
    animateOut: 'fadeOut',
    animateIn: 'fadeIn',
    nav: true,
    autoplayHoverPause: true,
    items: 4,
    navText: ["<span class='ion-chevron-left'></span>", "<span class='ion-chevron-right'></span>"],
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 3,
        nav: false
      },
      1000: {
        items: 4,
        nav: true,
        loop: false
      }
    }
  });


  $('.centernonloop').owlCarousel({
    center: true,
    items: 1,
    loop: false,
    margin: 30,
    smartSpeed: 1000,
    dots: true,
    responsive: {
      600: {
        items: 2
      },
      900: {
        items: 3
      }
    }
  });

  $('.centernonloop2').owlCarousel({
    items: 1,
    loop: true,
    margin: 0,
    autoplay: true,
    smartSpeed: 1000,
    dots: true,
  });



  var contentWayPoint = function () {
    var i = 0;
    $('.element-animate').waypoint(function (direction) {

      if (direction === 'down' && !$(this.element).hasClass('element-animated')) {

        i++;

        $(this.element).addClass('item-animate');
        setTimeout(function () {

          $('body .element-animate.item-animate').each(function (k) {
            var el = $(this);
            setTimeout(function () {
              var effect = el.data('animate-effect');
              if (effect === 'fadeIn') {
                el.addClass('fadeIn element-animated');
              } else if (effect === 'fadeInLeft') {
                el.addClass('fadeInLeft element-animated');
              } else if (effect === 'fadeInRight') {
                el.addClass('fadeInRight element-animated');
              } else {
                el.addClass('fadeInUp element-animated');
              }
              el.removeClass('item-animate');
            }, k * 100);
          });

        }, 100);

      }

    }, { offset: '95%' });
  };
  contentWayPoint();


  function initIsotope(isotope) {
    var filters = [];

    // filter functions
    var filterFns = {
      // show if number is greater than 50
      numberGreaterThan50: function () {
        var number = $(this).find('.number').text();
        return parseInt(number, 10) > 50;
      },
      // show if name ends with -ium
      ium: function () {
        var name = $(this).find('.name').text();
        return name.match(/ium$/);
      }
    };

    var $grid = $(isotope.grid).isotope({
      itemSelector: isotope.item,
      layoutMode: isotope.layout,
      cellsByRow: {
        rowHeight: isotope.cellsbyrow_height
      }
    });

    if (isotope.selectType === 'button') {
      $(isotope.tabButtons).on('click', function () {
        //$('.options li a.active').removeClass('active');

        $(this).toggleClass('active');
        var filter = $(this).attr('data-filter');

        $grid.isotope({ filter: '.' + filter });
      });
    }
    else if (isotope.selectType === 'select') {
      $(isotope.selector).on('change', function () {
        // get filter value from option value
        var filterValue = this.value;
        // use filterFn if matches value
        filterValue = filterFns[filterValue] || filterValue;
        $grid.isotope({ filter: '.' + filterValue });
      });
    }

  }

  function initElementAdder(item) {
    if (document.getElementById(item.target.parentId) != null) {
      var element = document.getElementById(item.target.parentId).getElementsByClassName(item.target.child);
      var children = element[0].children;
      var i = 0;

      do {
        var text = document.createTextNode(("0" + (i + 1)).slice(-2));

        var node = document.createElement(item.element);
        node.className = item.classes;
        node.appendChild(text);

        var place = children[i].getElementsByClassName(item.target.place);

        place[0].appendChild(node);

        i++;
      } while (i < children.length);
    }
  }
  
  function addClass(classAdder) {
    $.each( classAdder, function( key, item ) {
      $(item.value).addClass(item.classes);
    });
  }

  $(document).ready(function () {
    const settings = {
      elementAdder: {
        target: {
          parentId: "rev_slider_1",
          child: "tp-bullets",
          place: "tp-bullet-title"
        },
        element: 'h6',
        classes: 'count f_r_bl t12 c_ffffff',
        text: '[counter]'
      },
      classAdder: [
        {
          value: '.navbar-nav li',
          classes: 'nav-item'
        },
        {
          value: '.navbar-nav li a',
          classes: 'nav-link'
        }
      ],
      isotope: [
        {
          selectType: 'button',
          tabButtons: '.btn.all, .btn.meal, .btn.pizza, .btn.dessert, .btn.fish, .btn.meat, .btn.burger, .btn.wine',
          //itemSelector: '.products .item',
          layout: 'fitRows',
          cellsbyrow_height: 344,
          grid: '.grid',
          selector: '.products .choices',
          item: '.products .item',
        }
      ],
    };

    addClass(settings.classAdder);
    initIsotope(settings.isotope[0]);
    initElementAdder(settings.elementAdder);
  });
 

})(jQuery);