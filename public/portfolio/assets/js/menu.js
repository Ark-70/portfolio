$(function(){


  $('.menu__togglebtn').click(function() {
    $('.menu__container').toggleClass('menu__container--open');
    $(this).find('.icon').toggleClass('icon-menu');
    $(this).find('.icon').toggleClass('icon-close');
  });

  window.onscroll = function() {
    $('.menu__container').removeClass('menu__container--open');
    $('.menu__togglebtn').find('.icon').removeClass('icon-close');
    $('.menu__togglebtn').find('.icon').addClass('icon-menu');
  };

});
