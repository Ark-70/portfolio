(function($){
  // $( ".creations__accordeon" ).accordion();

  let skills = [
    ["git",30,"#F05134"], ["php",60,"#767BB3"], ["css3",50,"#3E95D8"], ["html5",60,"#EF6527"], ["gulp",30,"#CE4646"], ["javascript",70,"#F0DA50"], ["jquery",90,"#1068AD"],
    ["mysql",65,"#00618A"], ["photoshop",30,"#91C4FD"], ["illustrator",40,"#FF7C00"], ["sass",40,"#CC6699"], ["atom",50,"#66595C"], ["bootstrap",30,"#61408D"]
  ];
  let $triggerSkills = $('.skills__barscontainer');


/******************START******************/
  renderSkills();

/*****************EVENTS******************/

// LA PUISSANCE D'ES6 EN UNE LIGNE : arrow function + si visible -> expand, sinon -> retract
  window.onscroll = () => {
    animExpandSkills(checkVisible($triggerSkills[0]));
    if(checkVisible($triggerSkills[0])) sortSkillsWithCssOrder();
  }


/***************FUNCTIONS****************/
  function giveSingleSkillHtml(skillStr, percentage = 30){
    let html = ''+
      '<div class="skills_singularskill">'+
        '<div class="progress progress-bar-vertical">'+
          '<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="'+percentage+'" aria-valuemin="0" aria-valuemax="100">'+
            '<span class="sr-only">'+percentage+'% Complete</span>'+
          '</div>'+
        '</div>'+
        '<i class="devicon devicon-'+skillStr+'-plain"></i>'+
      '</div>';
    return html;
  }

  function renderSkills(){
    for (skill of skills){
      $('.skills__barscontainer').append(giveSingleSkillHtml(skill[0],skill[1]));
      $('.devicon-'+skill[0]+'-plain').css("color",skill[2]);
      $('.devicon-'+skill[0]+'-plain').parent().find(".progress-bar").css("background-color",skill[2]);

    }
    // sortSkillsWithCssOrder();
  }

  function sortSkillsWithCssOrder(){ //devrait faire avec une transition
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
    let viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);
    return !(rect.bottom < 0 || rect.top - viewHeight >= 0);
  }


})(jQuery);
