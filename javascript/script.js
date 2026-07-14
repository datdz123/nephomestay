(() => {
	// javascript/script.js
	(function ($) {
		window.onload = function () {
			$(document).ready(function () {
				menuMobile();
				backToTop();
				toggleContent();
				landingPageEffects();
			});
		};
		function menuMobile() {
      const elements = [".bar__mb", ".header__menu"];
      if (elements.some((el) => $(el).length)) {
        $(".bar__mb").click(function () {
          $(".header__menu").toggleClass("active");
          $(".overlay").toggleClass("active");
          $("html").toggleClass("overflow-hidden");
        });
        $(".overlay").click(function () {
          $(".header__menu").removeClass("active");
          $(".overlay").removeClass("active");
          $("html").removeClass("overflow-hidden");
        });
      }
      $(".header__menu ul li.menu-item-has-children>ul").before(
        `<span class="li-plus"></span>`
      );
    
      if ($(".li-plus").length) {
        $(".li-plus").click(function (e) {
          $(this).toggleClass("clicked");
          $(this).next(".sub-menu").slideToggle(200);
          $(this)
            .parent()
            .siblings()
            .find(".li-plus")
            .removeClass("clicked")
            .siblings(".sub-menu")
            .slideUp();
        });
      }
    }
    
    function backToTop() {
      var $backToTop = $(".back-to-top");
      $backToTop.hide();
    
      $(window).on("scroll", function () {
        if ($(this).scrollTop() > 200) {
          $backToTop.fadeIn();
        } else {
          $backToTop.fadeOut();
        }
      });
    
      $backToTop.on("click", function (e) {
        $("html, body").animate({ scrollTop: 0 }, 50);
      });
    }

    function toggleContent() {
      $('.search-icon').click(function (event) {
          event.stopPropagation();
          let $formSearch = $(this).next();
          $formSearch.toggleClass('active');
      });
  
      $(document).click(function (event) {
          if (!$(event.target).closest('.search-icon,.search-wrapper').length) {
              $('.search-wrapper').removeClass('active');
          }
      });
  }

  function landingPageEffects() {
      const $header = $('header.fixed-landing-header');
      const $logo = $header.find('img');
      if ($header.length) {
          $(window).on('scroll', function () {
              if ($(window).scrollTop() > 50) {
                  $header.addClass('shadow-lg bg-primary/95 py-1 md:py-2').removeClass('bg-primary/90 py-2 md:py-3');
                  $logo.addClass('h-14 md:h-16').removeClass('h-20 md:h-24');
              } else {
                  $header.removeClass('shadow-lg bg-primary/95 py-1 md:py-2').addClass('bg-primary/90 py-2 md:py-3');
                  $logo.addClass('h-20 md:h-24').removeClass('h-14 md:h-16');
              }
          });
      }

      // Gallery Slider Control
      const $slider = $('.gallery-slider');
      const $prevBtn = $('.gallery-prev');
      const $nextBtn = $('.gallery-next');

      if ($slider.length) {
          $prevBtn.on('click', function(e) {
              e.preventDefault();
              const cardWidth = $slider.find('> div').first().outerWidth() + 24;
              $slider.stop().animate({
                  scrollLeft: $slider.scrollLeft() - cardWidth
              }, 400);
          });

          $nextBtn.on('click', function(e) {
              e.preventDefault();
              const cardWidth = $slider.find('> div').first().outerWidth() + 24;
              $slider.stop().animate({
                  scrollLeft: $slider.scrollLeft() + cardWidth
              }, 400);
          });
      }

      if ($('.page-template-front-end-page').length || $('.page-template-front-page').length || $('.home').length || $header.length) {
          const observerOptions = {
              threshold: 0.1
          };

          const observer = new IntersectionObserver((entries) => {
              entries.forEach(entry => {
                  if (entry.isIntersecting) {
                      $(entry.target).addClass('opacity-100 translate-y-0').removeClass('opacity-0 translate-y-10');
                  }
              });
          }, observerOptions);

          $('section > div').each(function () {
              $(this).addClass('transition-all duration-1000 opacity-0 translate-y-10');
              observer.observe(this);
          });
      }
  }
  
	})(jQuery);
})();
