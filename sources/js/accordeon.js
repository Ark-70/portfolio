$(function(){

  //bonne taille de container desc calculée au init seulement
  let animTime = 300;
  let clickPossible = true;
  let currentActiveReal = null;
  let $main = $('main');
  // let resizeCalculPossible = true;
  selectDefault();

  function selectDefault(){
    $($('.creations__liste .creations__projet')[0]).addClass('creations__projet--selected');
    $($('.accordeon__titre')[0]).addClass('accordeon__titre--selected');
    $($('.accordeon__contentbox')[0]).addClass('accordeon__contentbox--open');
    $('main').addClass('real__active--speedup');
  }

  $('.creations__liste .creations__projet').click(function(event){
    //relie les clicks de la liste des creations aux projets correspondants dans l'accordeon
    className = "."+this.className.split(" ").join(".");
    $('.creations__accordeon '+className).click();
  });


  $('.accordeon__titre').click(function(event){
    if(clickPossible) {
      clickPossible = false;
      let indexDuTitreClicked = $(this).index('.accordeon__titre');
      let hauteurDuContenu = $('.accordeon__desc').eq(indexDuTitreClicked).outerHeight();
      // on enlève les class de selected déjà existantes avant de les actualiser
      $('.accordeon__titre').removeClass('accordeon__titre--selected');
      $('.creations__liste span').removeClass('creations__projet--selected');

      // on applique la même classe dans la liste
      $(this).addClass('accordeon__titre--selected');
      className = "."+$(this).find('span')[0].className.split(" ").join(".");
      // on actualise la variable & le fond d'écran du site en fonction

      currentActiveReal = className.split("--")[1];
      $main.removeClass();

      //Si on est sur mobile je n'active pas les background image
      if (window.matchMedia('(min-device-width: 719px)').matches) {
        $main.addClass('real__active--'+currentActiveReal);
      }

      $('.creations__liste '+className).addClass('creations__projet--selected');

      $('.accordeon__contentbox').animate({ height: 0 }, animTime);
      $('.accordeon__contentbox').eq(indexDuTitreClicked).stop().animate({ height: hauteurDuContenu }, animTime);
      // stop() permet de superposer les animations de Collapse de l'un et de Expand de l'autre en faisant croire que les animations précédentes sont terminées

      setTimeout(function(){ clickPossible = true; }, animTime);
    }

  });

});
