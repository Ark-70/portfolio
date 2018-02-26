// pas besoin de ready puisque on met déjà les scripts après le body donc -> autoexécutante
(function($){ // on renomme notre paramêtre JQuery (donné à la fin du fichier) en $

  let animTime = 300;
  let clickPossible = true;
  appliquerMaxHeightATous();

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

  $('.accordeon__titre').click(function(event){
    if(clickPossible) {
      clickPossible = false;
      let indexDuTitreClicked = $(this).index('.accordeon__titre');
      console.log(indexDuTitreClicked);
      let hauteurDuContenu = $('.accordeon__desc').eq(indexDuTitreClicked).outerHeight();
      console.log(hauteurDuContenu);
      $('.accordeon__titre').removeClass('accordeon__titre--selected');
      $(this).addClass('accordeon__titre--selected');

      // $('.accordeon__desc').stop().animate({ height: 0 }, animTime);
      $('.accordeon__contentbox').animate({ height: 0 }, animTime);
      console.log($('.accordeon__contentbox'));
      console.log($('.accordeon__contentbox').eq(indexDuTitreClicked));
      $('.accordeon__contentbox').eq(indexDuTitreClicked).stop().animate({ height: hauteurDuContenu }, animTime);
      // stop() permet de superposer les animations de Collapse de l'un et de Expand de l'autre en faisant croire que les animations précédentes sont terminées

      setTimeout(function(){ clickPossible = true; }, animTime);
    }

  });

})(jQuery); // empêche les conflits entre différents $ si jamais un ajoute des bibliothèques
