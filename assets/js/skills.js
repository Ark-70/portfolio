$(function(){
  // $( ".creations__accordeon" ).accordion();

  // let skills = [];
  let notSortedYet = true;
  let $triggerSkills = $('.skills__barscontainer');
  // console.log($triggerSkills);

/******************START******************/
  renderSkillsSection();

/*****************EVENTS******************/

// LA PUISSANCE D'ES6 EN UNE LIGNE : arrow function + si visible -> expand, sinon -> retract
  window.onscroll = () => {
    if(notSortedYet && checkVisible($triggerSkills[0])){
      sortSkillsWithCssOrder();
      notSortedYet = false;
    }
    animExpandSkills(checkVisible($triggerSkills[0])); //les jauges montent/descendent selon si elles sont visibles
  }

  window.onscroll();

/***************FUNCTIONS****************/

  function renderSkillsSection(){
    // shuffle(skills);
    for (skill of skills){
      // $('.skills__barscontainer').append(giveSingleSkillHtml(skill[0],skill[1]));
      // console.log($('.devicon-'+skill[0]+'-plain'));
      $('.devicon-'+skill[0]+'-plain').css("color",skill[2]);
      $('.devicon-'+skill[0]+'-plain').parent().find(".progress-bar").css("background-color",skill[2]);

    }
    // sortSkillsWithCssOrder();
  }

  function sortSkillsWithCssOrder(){ //devrait faire avec une transition en les ordonnant
    let sortedSkills = skills.slice(); //creer une copie
    sortedSkills.sort(function(a, b){return b[1]-a[1]}); //on tri par leur chiffre
    for(skill of skills){
      indexSorted = sortedSkills.indexOf(skill);
      $('.devicon-'+skill[0]+'-plain').parent().css("order", indexSorted+1);
    }
  }

  function renderSortedSkills(){
    let sortedSkills = skills.sort(function(a, b){return b[1]-a[1]});
    for (skill of sortedSkills) {
      $('.skills__barscontainer').append(giveSingleSkillHtml(skill[0],skill[1]));
    }
  }


  function animExpandSkills(ExpandBool){ //ZERG RUSH INTO B2 EXPAND
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
