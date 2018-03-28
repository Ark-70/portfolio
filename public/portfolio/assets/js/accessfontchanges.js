$(function(){
  // font-size du <HTML>, normalement, 10px, sur quoi on base tous nos textes grâce à rem
  let taillePoliceParDefaut = 62.5; //EN POURCENTAGE
  let taillePolice;
  let pasDuChangement = 2;
  let DEBUGFONTACTIF = false;

  setupFontSize();

  $('.access__item--moins').click(()=>changerTaillePolice(-pasDuChangement));
  $('.access__item--egal').click(()=>changerTaillePolice(0));
  $('.access__item--plus').click(()=>changerTaillePolice(+pasDuChangement));


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

});
