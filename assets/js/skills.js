(function($){
  // $( ".creations__accordeon" ).accordion();

  let skills = [["git",30], ["php",60], ["css3",50], ["html5",60], ["gulp",30], ["javascript",70], ["jquery",90], ["mysql",65], ["photoshop",30], ["illustrator",40], ["sass",40], ["atom",50], ["bootstrap",30]];



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
    }
    sortSkillsWithCssOrder();
  }

  function sortSkillsWithCssOrder(){ //devrait faire avec une transition
    let sortedSkills = skills.slice(); //creer une copie
    sortedSkills.sort(function(a, b){return b[1]-a[1]}); //on tri par leur chiffre
    for(skill of skills){
      indexSorted = sortedSkills.indexOf(skill);
      console.log($('.devicon-'+skill[0]+'-plain').prev());
      $('.devicon-'+skill[0]+'-plain').parent().css("order", indexSorted+1);
      $('.devicon-'+skill[0]+'-plain').prev().find('div').css("height", skill[1]+"%");
    }
  }

  function renderSortedSkills(){
    let sortedSkills = skills.sort(function(a, b){return b[1]-a[1]});
    for (skill of sortedSkills) {
      $('.skills__barscontainer').append(giveSingleSkillHtml(skill[0],skill[1]));
    }
  }

  renderSkills();



})(jQuery);
