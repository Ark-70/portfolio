$(function(){

  // boolean pour savoir si les skills sont triés ou pas encore
  let notSortedYet = true;
  let $triggerSkills = $('.skills__barscontainer'), $menuBtn = $('.menu__togglebtn'), $menu = $('.menu__container');

/******************START******************/
  chooseDisplayOfMenuAtStart();
  renderSkillsSection();
  animateSkillsIfNeeded();

/*****************EVENTS******************/

  //toggle du menu
  $menuBtn.click(function() {
    // dom+css ready donc on peut faire ceci pour ajouter les transitions:
    // utile pour annuler un mouvement dès l'affichage quand on veut le menu caché au lancement du site
    $menu.addClass('menu__container--ready');
    $menu.toggleClass('menu__container--open');
    $(this).toggleClass('menu__togglebtn--closed').find('.icon').toggleClass('icon-menu');
    $(this).toggleClass('menu__togglebtn--opened').find('.icon').toggleClass('icon-cancel');

  });

  $('.access__item--dys').click(function(){
    $('html').toggleClass('html--dyslexie');
  });

  // La arrow function (ES6) (raccourci de fonction anonyme)
  // La fonction window.onscroll ne peut être utilisée qu'une fois sous peine d'écraser la précédente d'un autre fichier
  $(document).scroll(function(){
    // On retire le menu si on scroll
    $menu.addClass('menu__container--ready');
    $menu.removeClass('menu__container--open');
    $menuBtn.removeClass('menu__togglebtn--opened').find('.icon').removeClass('icon-cancel');
    $menuBtn.addClass('menu__togglebtn--closed').find('.icon').addClass('icon-menu');

    animateSkillsIfNeeded();


  });

  /***************** FUNCTIONS : MENU ******************/

  function chooseDisplayOfMenuAtStart(){
    //But de cette fonction : choisir l'état du menu au lancement du site, selon la taille d'écran de l'utilisateur
    //(pour ne pas cacher le titre à l'utilisateur sans qu'il ne le veuille s'il n'a pas un écran assez grand)
    if (window.matchMedia('(min-device-width: 1199px)').matches) {
      // ici par defaut menu sera ouvert
      console.log("on ouvre");
      $menuBtn.removeClass('menu__togglebtn--closed').find('.icon').removeClass('icon-menu');
      $menuBtn.addClass('menu__togglebtn--opened').find('.icon').addClass('icon-cancel');
      $menu.addClass('menu__container--open');
    }else{
      // ici par defaut menu sera fermé
      $menuBtn.removeClass('menu__togglebtn--opened').find('.icon').removeClass('icon-cancel');
      $menuBtn.addClass('menu__togglebtn--closed').find('.icon').addClass('icon-menu');
    }
  }

/*************** FUNCTIONS : SKILLS ****************/

  function animateSkillsIfNeeded(){
    //Si au scroll, les skills ne sont pas encore triés et qu'on les voit, on les trie
    if(notSortedYet && checkVisible($triggerSkills[0])){
      sortSkillsWithCssOrder();
      notSortedYet = false;
    }
    //les jauges montent/descendent selon si elles passent visibles/non visibles sur l'écran
    ExpandOrRetractSkills(checkVisible($triggerSkills[0]));
  }

  function renderSkillsSection(){
    for (skill of skills){
      $('.devicon-'+skill[0]+'-plain').css("color",skill[2]);
      $('.devicon-'+skill[0]+'-plain').parent().find(".progress-bar").css("background-color",skill[2]);
    }
  }

  function sortSkillsWithCssOrder(){
    //Animation de tri sur les compétences
    let sortedSkills = skills.slice(); //creer une copie
    sortedSkills.sort(function(a, b){return b[1]-a[1]}); //on tri par leur chiffre
    for(skill of skills){
      indexSorted = sortedSkills.indexOf(skill);
      $('.devicon-'+skill[0]+'-plain').parent().css("order", indexSorted+1);
    }
  }

  function ExpandOrRetractSkills(ExpandBool){
    let height = 0;
    for(skill of skills){
      if(ExpandBool) height = skill[1];
      $('.devicon-'+skill[0]+'-plain').prev().find('div').css("height", height+"%");
    }
  }

  function checkVisible(elm) {
    let rect = elm.getBoundingClientRect();
    // let viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);
    viewHeight = window.innerHeight;
    rectquart = (rect.top+rect.bottom)/4;
    rectcenter = (rect.top+rect.bottom)/2;
    //retourne true tant que le centre OU le bas de l'élément est visible
    // return !(rect.bottom < 0 || rectcenter > viewHeight);
    return !(rectquart < 0 || rectcenter > viewHeight);
  }

  /***************** FUNCTIONS : FONT DYSLEXIE ******************/


});
