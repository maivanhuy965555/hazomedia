$(document).ready(function() {
  showListContactMobile();
});

//Scroll

$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  if (scroll > 30) {
    $(".header").addClass("header-active");
        $(".scroll-top").addClass("active-scroll"); // Scroll Menu - Mobile
      } else {
        $(".header").removeClass("header-active");
        $(".scroll-top").removeClass("active-scroll");
      }
    });

$(".scroll-top").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});

// carousel

$('.sl-c').owlCarousel({
  loop: true,
  margin: 0,
  nav: false,
  autoplay: true,
  autoplayTimeout: 4000,
  autoplayHoverPause: true,
  smartSpeed: 1000,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
});

$('.sl-pane').owlCarousel({
  loop: true,
  margin: 0,
  nav: false,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  smartSpeed: 1000,
  responsive: {
    0: {
      items: 2
    },
    600: {
      items: 3
    },
    1000: {
      items: 5
    }
  }
});

$('.sl-team').owlCarousel({
  loop: true,
  margin: 25,
  nav: false,
  dots: true,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  smartSpeed: 500,
  responsive: {
    0: {
      items: 2,
      margin: 10,
    },
    600: {
      items: 3
    },
    1000: {
      items: 4
    }
  }
});

$('.sl-dt').owlCarousel({
  loop: true,
  margin: 25,
  nav: false,
  dots: true,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: true,
  smartSpeed: 500,
  responsive: {
    0: {
      items: 2
    },
    600: {
      items: 3
    },
    1000: {
      items: 4
    }
  }
});






// ?jquery mobile

(function($) {
  var $main_nav = $('#main-nav');
  var $toggle = $('.toggle');

  var defaultData = {
    maxWidth: false,
    customToggle: $toggle,
        // navTitle: 'All Categories',
        levelTitles: true,
        pushContent: '#container'
      };

    // add new items to original nav
    $main_nav.find('li.add').children('a').on('click', function() {
      var $this = $(this);
      var $li = $this.parent();
      var items = eval('(' + $this.attr('data-add') + ')');

      $li.before('<li class="new"><a>' + items[0] + '</a></li>');

      items.shift();

      if (!items.length) {
        $li.remove();
      } else {
        $this.attr('data-add', JSON.stringify(items));
      }

      Nav.update(true);
    });

    // call our plugin
    var Nav = $main_nav.hcOffcanvasNav(defaultData);

    // demo settings update

    const update = (settings) => {
      if (Nav.isOpen()) {
        Nav.on('close.once', function() {
          Nav.update(settings);
          Nav.open();
        });

        Nav.close();
      } else {
        Nav.update(settings);
      }
    };

    $('.actions').find('a').on('click', function(e) {
      e.preventDefault();

      var $this = $(this).addClass('active');
      var $siblings = $this.parent().siblings().children('a').removeClass('active');
      var settings = eval('(' + $this.data('demo') + ')');

      update(settings);
    });

    $('.actions').find('input').on('change', function() {
      var $this = $(this);
      var settings = eval('(' + $this.data('demo') + ')');

      if ($this.is(':checked')) {
        update(settings);
      } else {
        var removeData = {};
        $.each(settings, function(index, value) {
          removeData[index] = false;
        });

        update(removeData);
      }
    });
  })(jQuery);


  jQuery(document).ready(function($) {
    $('.main-why .list-icon-ts ul li .text h3').click(function() {
      $(this).next('.text p').slideToggle();
      $(this).parents('.main-why .list-icon-ts ul li').toggleClass('active');
    });

    var elements = $('.sticky');
    Stickyfill.add(elements);

    // search mobile

    $(".search-mobile a").click(function(event) {
      $(".full-search").slideDown("active-search");
    });
    $(".times-search a").click(function() {
      $(".full-search").slideUp("active-search");
    });

    wow = new WOW({
      animateClass: 'animated',
      offset: 100,
      callback: function(box) {
        console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
      }
    });
    wow.init();

  });

  function showListContactMobile() {
    var fixedButton = document.querySelector('.fixedButton-mobile');
    var listContactMobile = document.querySelector('.list__contact-mobile');

    fixedButton.addEventListener('click', function() {
      listContactMobile.classList.toggle('list__contact-mobile--show');
    })
  }

  $(function () {

    var filterList = {

      init: function () {

      // MixItUp plugin
      // http://mixitup.io
      $('#portfoliolist').mixItUp({
        selectors: {
          target: '.portfolio',
          filter: '.filter' 
        },
        load: {
          filter: '.all' // show app tab on first load
        }     
      });               

    }

  };
  
  // Run the show!
  filterList.init();

  $('#filters li:first-child .filter').addClass('active2');
  $('.filter').click(function(){
    $('.filter').removeClass('active2');
    $(this).addClass('active2');
  });

  $('.counter').countUp();
  

  $('.js-pp').click(function(){
    $('.pp-content-footer').addClass('active-pp');
  });
  $('.js-times').click(function(){
    $('.pp-content-footer').removeClass('active-pp');
  });

});

