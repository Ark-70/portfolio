$(function(){ // on renomme notre paramêtre JQuery (donné à la fin du fichier) en $

  let animTime = 300;
  let clickPossible = true;
  selectDefault();
  appliquerMaxHeightATous();

  function selectDefault(){
    $($('.creations__liste .creations__projet')[0]).addClass('creations__projet--selected');
    $($('.accordeon__titre')[0]).addClass('accordeon__titre--selected');
    $($('.accordeon__contentbox')[0]).addClass('accordeon__contentbox--open');
  }

  function trouverAccordeonHauteurMax(){
    let maxTmp = 0;
    for (desc of $('.accordeon__desc')) {
      // dans cette forof loop, desc n'est plus un objet jQuery mais JS natif
      maxTmp = Math.max(maxTmp,$(desc).outerHeight());
    }
    console.log(maxTmp);
    return maxTmp;
  }

  function appliquerMaxHeightATous(){
    for (desc of $('.accordeon__desc')){
      //puisque desc est objet js natif
      desc.style.height = trouverAccordeonHauteurMax()+"px";
    }
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
      console.log(indexDuTitreClicked);
      let hauteurDuContenu = $('.accordeon__desc').eq(indexDuTitreClicked).outerHeight();
      console.log(hauteurDuContenu);
      $('.accordeon__titre').removeClass('accordeon__titre--selected');
      $('.creations__liste span').removeClass('creations__projet--selected');

      // on applique la même classe dans la liste
      $(this).addClass('accordeon__titre--selected');
      className = "."+$(this).find('span')[0].className.split(" ").join(".");
      console.log($(this).find('span')[0]);
      $('.creations__liste '+className).addClass('creations__projet--selected');

      // $('.accordeon__desc').stop().animate({ height: 0 }, animTime);
      $('.accordeon__contentbox').animate({ height: 0 }, animTime);
      $('.accordeon__contentbox').eq(indexDuTitreClicked).stop().animate({ height: hauteurDuContenu }, animTime);
      // stop() permet de superposer les animations de Collapse de l'un et de Expand de l'autre en faisant croire que les animations précédentes sont terminées

      setTimeout(function(){ clickPossible = true; }, animTime);
    }

  });

}); // empêche les conflits entre différents $ si jamais un ajoute des bibliothèques
