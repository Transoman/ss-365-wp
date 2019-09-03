'use strict';

let svg4everybody = require('svg4everybody'),
  popup = require('jquery-popup-overlay'),
  Swiper = require('swiper');

jQuery(document).ready(function($) {
  // Toggle nav menu
  $('.nav-toggle').on('click', function (e) {
    e.preventDefault();
    $(this).toggleClass('is-active');
    $('.header__nav').toggleClass('open');
    $('.nav-overlay').toggleClass('is-active');
  });

  $('.nav-overlay').on('click', function (e) {
    e.preventDefault();
    $('.nav-toggle').removeClass('is-active');
    $('.header__nav').removeClass('open');
    $('.nav-overlay').removeClass('is-active');
  });

  // Fixed header
  let fixedHeader = function(e) {
    let header = $('.header__bottom');

    if ($(window).width() < 993) {
      $('.header__bottom').removeClass('fixed');
      header = $('.header');
    }
    else {
      $('.header').removeClass('fixed');
      header.removeClass('fixed');
    }

    if (e.scrollTop() > 68) {
      header.addClass('fixed');
    }
    else {
      header.removeClass('fixed');
    }
  };

  // Modal
  $('.modal').popup({
    transition: 'all 0.3s',
    scrolllock: true,
    onclose: function() {
      $(this).find('span.wpcf7-not-valid-tip').remove();
      $(this).find('.wpcf7-response-output').hide();
    }
  });

  new Swiper('.portfolio-slider', {
    spaceBetween: 70,
    autoHeight: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  var contactForm = function() {
    $('.wpcf7').each(function(i, el) {
      var submit = $(this).find('[type="submit"]');

      if (submit.length) {
        var button = '<button type="submit" class="btn"><span class="btn-load"></span><span class="text">' + submit.val() + '</span></button>';
        submit.replaceWith(button);
        $(this).find('.ajax-loader').remove();
      }

    });

    // Loader
    $('.wpcf7 form').on('submit', function () {
      var btn = $(this).find('.btn');

      if (btn.hasClass('btn-link')) {
        btn.addClass("btn-loading");
        btn.find('.text').css('display', 'none');
      } else {
        btn.addClass("btn-loading");
      }
    });

    $('.wpcf7').on('wpcf7spam wpcf7invalid wpcf7mailsent wpcf7mailfailed', function (e) {
      var form = $('.wpcf7');
      $(form).find('.btn').removeClass("btn-loading");
    });
  };

  $('a[href*="#"]')
  // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();

          let headerHeight = 0;

          if ($(window).width() < 993) {
            headerHeight = $('.header').height();
          }
          else {
            headerHeight = $('.header__bottom').height();
          }

          $('.nav-toggle').removeClass('is-active');
          $('.header__nav').removeClass('open');
          $('.nav-overlay').removeClass('is-active');

          $('html, body').animate({
            scrollTop: target.offset().top - headerHeight
          }, 1000);
        }
      }
    });

  contactForm();
  fixedHeader($(this));

  $(window).scroll(function() {
    fixedHeader($(this));
  });

  $(window).resize(function() {
    fixedHeader($(this));
  });

  // SVG
  svg4everybody({});
});