$(function(){
  // $( ".creations__accordeon" ).accordion();

  // let skills = [];
  let notSortedYet = true;
  let $triggerSkills = $('.skills__barscontainer');
  // console.log($triggerSkills);

/******************START******************/
  renderSkillsSection();

/*****************EVENTS******************/

  //toggle du menu
  $('.menu__togglebtn').click(function() {
    $('.menu__container').toggleClass('menu__container--open');
    $(this).find('.icon').toggleClass('icon-menu');
    $(this).find('.icon').toggleClass('icon-close');
  });

  // La arrow function (ES6) (raccourci de fonction anonyme)
  // La fonction window.onscroll ne peut être utilisée qu'une fois sous peine d'écraser la précédente d'un autre fichier
  window.onscroll = () => {
    // On retire le menu si on scroll
    $('.menu__container').removeClass('menu__container--open');
    $('.menu__togglebtn').find('.icon').removeClass('icon-close');
    $('.menu__togglebtn').find('.icon').addClass('icon-menu');

    //Si au scroll, les skills ne sont pas encore triés et qu'on les voit, on les trie
    if(notSortedYet && checkVisible($triggerSkills[0])){
      sortSkillsWithCssOrder();
      notSortedYet = false;
    }
    //les jauges montent/descendent selon si elles passent visibles/non visibles sur l'écran
    animExpandSkills(checkVisible($triggerSkills[0]));
  }

  window.onscroll();

/***************FUNCTIONS SKILLS****************/

  function renderSkillsSection(){
    for (skill of skills){
      $('.devicon-'+skill[0]+'-plain').css("color",skill[2]);
      $('.devicon-'+skill[0]+'-plain').parent().find(".progress-bar").css("background-color",skill[2]);

    }
  }

  function sortSkillsWithCssOrder(){ //devrait faire avec une transition en les ordonnant
    let sortedSkills = skills.slice(); //creer une copie
    sortedSkills.sort(function(a, b){return b[1]-a[1]}); //on tri par leur chiffre
    for(skill of skills){
      indexSorted = sortedSkills.indexOf(skill);
      $('.devicon-'+skill[0]+'-plain').parent().css("order", indexSorted+1);
    }
  }

  // function renderSortedSkills(){
  //   let sortedSkills = skills.sort(function(a, b){return b[1]-a[1]});
  //   for (skill of sortedSkills) {
  //     $('.skills__barscontainer').append(giveSingleSkillHtml(skill[0],skill[1]));
  //   }
  // }


  function animExpandSkills(ExpandBool){
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


});
