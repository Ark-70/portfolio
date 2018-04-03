$(function(){

  // SKILLS ********
  // boolean pour savoir si les skills sont triés ou pas encore
  let notSortedYet = true;
  let $triggerSkills = $('.skills__barscontainer'), $menuBtn = $('.menu__togglebtn'), $menu = $('.menu__container');
  //FONT SIZE *************
  // font-size du <HTML>, normalement, 10px, sur quoi on base tous nos textes grâce à rem
  let taillePoliceParDefaut = 62.5; //EN POURCENTAGE
  let taillePolice;
  let pasDuChangement = 2;
  let DEBUGFONTACTIF = false;

  //ACCORDEON *************
  //bonne taille de container desc calculée au init seulement
  let animTime = 300;
  let clickPossible = true;
  let currentActiveReal = null;
  let $main = $('main');
  // let resizeCalculPossible = true;
  selectDefault();

/******************START******************/
  chooseDisplayOfMenuAtStart();
  renderSkillsSection();
  animateSkillsIfNeeded();

  setupFontSize();

/*****************EVENTS******************/

  //TOGGLE DU MENU BURGER
  $menuBtn.click(function() {
    // dom+css ready donc on peut faire ceci pour ajouter les transitions:
    // utile pour annuler un mouvement dès l'affichage quand on veut le menu caché au lancement du site
    $menu.addClass('menu__container--ready');
    $menu.toggleClass('menu__container--open');
    $(this).toggleClass('menu__togglebtn--closed').find('.icon').toggleClass('icon-menu');
    $(this).toggleClass('menu__togglebtn--opened').find('.icon').toggleClass('icon-cancel');

  });

  // DYSLEXIE
  $('.access__item--dys').click(function(){
    $('html').toggleClass('html--dyslexie');
  });


  // La arrow function (ES6) (raccourci de fonction anonyme)
  //bouton taille de police
  $('.access__item--moins').click(()=>changerTaillePolice(-pasDuChangement));
  $('.access__item--egal').click(()=>changerTaillePolice(0));
  $('.access__item--plus').click(()=>changerTaillePolice(+pasDuChangement));

  $('.creations__liste .creations__projet').click(function(event){
    //relie les clicks de la liste des creations aux projets correspondants dans l'accordeon
    className = "."+this.className.split(" ").join(".");
    $('.creations__accordeon '+className).click();
  });

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

  /***************** FUNCTIONS : FONT SIZE ******************/

  function setupFontSize() {
    if(typeof localStorage!='undefined') {
    	//Si taillePolice existe dans la session
      if('taillePolice' in localStorage) {
        if(DEBUGFONTACTIF) console.log(localStorage);
        if(DEBUGFONTACTIF) console.log("variable de localStorage = "+localStorage.getItem('taillePolice'));
        taillePolice = localStorage.getItem('taillePolice')+"%";
      //sinon on crée taillePolice à partir du DOM
      }else{
        taillePolice = taillePoliceParDefaut;
        localStorage.setItem('taillePolice',taillePolice);
      }
      // on est bien sûr qu'on manipule un nombre
      taillePolice = parseInt(taillePolice);
      //on applique le changement css au html, quoi qu'il arrive
    	if(DEBUGFONTACTIF) console.log("police du html maintenant défini à "+taillePolice);
    	document.getElementsByTagName('html')[0].style.fontSize = taillePolice+"%";
    } else {
      alert("localStorage n'est pas supporté");
    }
  }


  function changerTaillePolice(variation){
    // taillePolice = (variation!==0)? taillePolice+variation : taillePoliceParDefaut;
    taillePolice = (variation)? taillePolice+variation : taillePoliceParDefaut;

    if(DEBUGFONTACTIF) console.log(variation+" => "+taillePolice);
    saveEtAppliquerTaillePolice();

  }

  function saveEtAppliquerTaillePolice() {
    localStorage.setItem('taillePolice',taillePolice);
    $('html').css('font-size', taillePolice+"%");
  }

  /***************** FUNCTIONS : ACCORDEON CREATIONS ******************/

  function selectDefault(){
    $($('.creations__liste .creations__projet')[0]).addClass('creations__projet--selected');
    $($('.accordeon__titre')[0]).addClass('accordeon__titre--selected');
    $($('.accordeon__contentbox')[0]).addClass('accordeon__contentbox--open');
    $('main').addClass('real__active--speedup');
  }
});
