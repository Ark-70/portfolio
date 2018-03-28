<!--

Site créé par David Traparic
Creative Commons BY-NC-SA
Dernière update : 28/03/2018
Site trop stylé
https://iamvdo.me/blog/la-cascade-css-inherit-et-initial
https://app.netlify.com/signup#_ga=2.154495422.728589584.1519897243-606316059.1519897243

DOM Général :

head
body
  header.menu
  section.imgdegarde
  main
    section.presentation
    section.competences
    section.creations
  footer

 -->

<?php require '../app_portfolio/datas.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Portfolio et présentation de David Traparic, étudiant en développement et programmation en 2e année de DUT MMI">
  <meta name="google-site-verification" content="i5-PStLflHEPBHowRL6MStX7or38hI47kd3nO7kqtv0" />
  <title>Traparic David Portfolio | Étudiant DUT MMI Développement & Programmation</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

  <script type="text/javascript">
  // on transfère les datas du datas.php au .js
  let skills = <?php echo json_encode($skills)?>,
  allReal = <?php echo json_encode($allReal)?>;
  </script>
  <link rel="stylesheet" href="portfolio/assets/css/myfont-codes.css">
  <link rel="stylesheet" href="portfolio/assets/css/style.css">
  <link rel="stylesheet" href="portfolio/assets/css/pres.css">
  <link rel="stylesheet" href="portfolio/assets/css/skills.css">
  <link rel="stylesheet" href="portfolio/assets/css/realisations.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
  <script src="portfolio/assets/js/scrollskillsandmenu.js" defer></script>
  <script src="portfolio/assets/js/accordeon.js" defer></script>
  <script src="portfolio/assets/js/changefontsize.js" defer></script>

</head>
<body>

  <!-- MENU ET BOUTON BURGER -->
  <header class="menu__container">
    <a class="menu__togglebtn menu__togglebtn--closed"><i class="icon icon-menu"></i></a>
      <nav class="menu">
        <div class="menu__logotitlecontainer">
          <?xml version="1.0" encoding="utf-8"?>
          <!-- image vectorielle de mon logo inline comme ça sinon, on ne peut pas lui appliquer de style facilement -->
          <svg class="menu__logo" width="300" height="300" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          	 viewBox="0 0 179.1 151.5" style="enable-background:new 0 0 179.1 151.5;" xml:space="preserve">
            <path d="M178.7,58.3c-0.4-2-1.3-4.1-2.6-6.4c-1.9-3.3-4.2-5.9-7-8c-2.8-2.1-5.9-3.5-9.1-4.4l0,0c-0.8-0.3-1.6-0.5-2.4-0.7
            	c-1.1-0.2-5.7-0.6-8.9-0.6c-8.1,0-15.1,2.4-21,7.1c-5.9,4.8-10.3,11.5-13.3,20.2c-2,5.9-3.2,12.2-4,18.5c-0.8,1.2-1.7,2.3-2.7,3.3
            	c-1.6,1.6-3.3,2.7-5.2,3.5c-1.9,0.8-3.8,1.1-5.7,1.1H90V54c0-1.7,0.5-3.3,1.2-4.8c0.6-1.5,2-2.5,3.7-3.2c1.1-0.4,2.5-0.8,4.7-1.2
            	c2.2-0.4,4.4-0.7,5.4-0.7v-6H59v6c1,0.1,3.1,0.4,5.1,1c2,0.5,3.6,1.1,5,1.8c1.8,0.8,3.2,1.9,3.8,3.2c0.6,1.3,1.1,2.9,1.1,4.7v37.3
            	h-6.8c-2,0-3.8-0.3-5.7-1.1c-1.8-0.8-3.6-2-5.3-3.6c-2.7-2.6-4.6-5.5-5.7-8.7c-1.1-3.2-2.4-7.2-3.9-11.8c-1.2-3.9-2.7-7.9-4.4-12
            	c-1.7-4.1-4-7.6-6.9-10.5c-2.2-2.2-4.6-3.8-7.3-5c-2.7-1.2-5.7-1.8-9.1-1.8c-2.3,0-4.3,0.3-6.1,0.9c-1.7,0.6-3.1,1.3-4.2,2.3
            	c-1.1,1.1-1.9,2.2-2.4,3.3c-0.5,1.2-0.7,2.4-0.7,3.8c0,2.2,0.7,4.2,2,6.1c1.3,1.9,3.4,2.9,6.3,2.9c2.1,0,3.6-0.3,4.7-0.8
            	c1.1-0.5,2.1-1.3,3.2-2.5c0.8-0.8,1.6-2,2.5-3.5c0.9-1.6,1.6-2.9,2.2-4.1c1.5,0.9,2.7,2.2,3.8,3.6c1.1,1.5,2,3,2.8,4.8
            	c0.7,1.6,1.4,3.5,2.1,5.8c0.7,2.3,1.3,4.3,1.8,6.1c0.7,2.4,1.5,4.6,2.2,6.8c0.7,2.2,1.7,4.4,2.8,6.6c1.2,2.4,2.3,4.6,3.8,6.6
            	c1.5,2.1,3.2,4,5.2,5.9v1.1c-5,1.5-10,4-13.8,7.5c-3.8,3.5-7,8.2-9.6,14.1c-1.5,3.4-3.1,6.9-4.8,10.5c-1.7,3.6-3.2,6.8-4.3,9.4
            	c-1.4,3-2.8,5.2-4.2,6.6c-1.4,1.4-3.2,2.3-5.5,2.7c-1.5,0.3-3.1,0.5-4.6,0.6C2.7,144.8,2,145,0,145.1v6h31.1
            	c1.8-5,3.8-10.5,6.1-16.2c2.3-5.7,4.5-10.9,6.6-15.5c3.7-8.2,7.3-13.7,10.7-16.3s8.2-4,14.3-4H74v36.7c0,1.9-0.6,3.5-1.3,4.9
            	c-0.7,1.3-2,2.4-3.5,3c-1,0.4-2.6,0.7-4.9,1c-2.3,0.2-4.3,0.4-5.3,0.5v6h46v-6c-1-0.1-3.2-0.3-5.5-0.9c-2.3-0.5-3.8-1-4.6-1.3
            	c-1.7-0.8-3.1-2-3.8-3.3c-0.7-1.4-1.1-2.9-1.1-4.7V99.1h5.3c6,0,9.3,1.7,12.3,5c0.9,1,1.9,2.2,2.8,3.6c1.1,12.3,3.8,22.9,8.2,29.9
            	c5.8,9.3,14.4,13.9,25.7,13.9c5.3,0,10.3-0.3,14.7-1c4.4-0.7,9-1.7,13-3v-23.4h-6.9c-1.4,6-2.9,9.5-4.5,12.2
            	c-1.6,2.8-3.5,4.8-5.9,6.1c-2.3,1.3-5.3,1.9-9,1.9c-4.8,0-8.9-1.9-12.2-5.7c-3.3-3.8-5.8-9.4-7.5-16.9c-1.7-7.5-2.5-16.5-2.5-27.1
            	c0-9.1,0.8-17,2.3-23.7c0.5-1.5,0.9-2.8,1.2-3.9c0.5-1.6,1.1-3.6,1.9-6c0-0.1,0.1-0.3,0.1-0.4c1.7-4,3.7-7.2,6-9.6
            	c3.6-3.7,7.7-5.6,12.3-5.6c3.1,0,5.7,0.6,7.9,1.8c2.2,1.2,4.1,3.2,5.8,5.9c-0.1,0.2-0.3,0.4-0.4,0.6c-0.9,1.5-1.6,3.1-2,4.6
            	c-0.5,1.5-0.6,3.1-0.4,4.7c0.2,1.6,0.7,3.3,1.7,5c0.9,1.6,1.9,2.7,2.9,3.3c1,0.6,2.2,1,3.5,1.2c1.1,0.2,2.3,0.2,3.6-0.1
            	c1.3-0.3,2.5-0.8,3.7-1.4c1.4-0.8,2.6-1.8,3.5-3.1c0.9-1.2,1.5-2.6,1.8-4.2C179.2,62.1,179.1,60.3,178.7,58.3z"/>
            <g>
            	<path d="M54.3,27.2c-1.9-0.4-3.1-3.2-0.4-4.2c1.3-0.5,10.6-1.2,16.6-2.6c6.3-1.5,11.7-2.9,17-5.1c5-2,9.7-4.3,13.4-6.5
            		c3.9-2.3,6.9-5.3,10.3-7.8c2.8-2,6.5-1,7.6,0.8c1.3,2.4,0.7,5.3-0.4,7.3c-1.3,2.3-4.3,5.4-8,7.9c-2.2,1.5-5.2,2.5-8.5,3.8
            		c-3.3,1.3-6.3,2.1-10.4,3c-4.2,0.9-8.1,1.9-12.5,2.5c-4.3,0.5-8.3,1.3-12.7,1.3C61.8,27.8,57.3,27.8,54.3,27.2z"/>
            </g>
          </svg>
          <h4 class="titreportfolio titreportfolio--mini">David Traparic</h4>
        </div>
        <ul>
          <li><a href="#parcours">Présentation</a></li>
          <li><a href="#skills">Mes compétences</a></li>
          <li><a href="#creations">Mes réalisations</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="menu__cv icon icon-file-pdf" title="télécharger le CV"><a href=""></a></i>
        <div class="access">
          <a class="access__item access__item--moins">A-</a>
          <a class="access__item access__item--egal">A=</a>
          <a class="access__item access__item--plus">A+</a>
          <a class="access__item access__item--dysl">Dyslexie</a>
        </div>
      </nav>
  </header>

  <!-- TITRE PRINCIPAL -->
	<section class="imgdegarde">
		<div class="garde__backgroundimg"></div>
		<h1 class="titreportfolio">David</h1>
    <h1 class="titreportfolio">Traparic</h1>
    <i class="garde__mouse"></i>
	</section>

  <!-- LE VRAI CONTENU / TOUTES LES SECTIONS -->
  <main>
  	<section id="parcours" class="parcours">
  		<div class="section__container">
  			<h2><span class="underline">Présentation :</span></h2>
        <div class="profile__container">
          <div class="profile__centeredcontainer">
            <div class="profile__mask"></div>
            <img class="profile__image" src="portfolio/assets/img/profile280.jpg" srcset="portfolio/assets/img/profile236.jpg 236w, portfolio/assets/img/profile280.jpg 280w"  width="280" height="280" sizes="280px" alt="Photo David Traparic">
            <ul class="profile__txt">
              <li><strong>Statut : </strong>Étudiant Bac +2</li>
              <li><strong>Âge : </strong>19 ans</li>
              <li><strong>Domaine : </strong>Programmation & Développement web</li>
              <li><strong>Loisirs : </strong>Rubik's Cube & Musculation</li>
            </ul>
          </div>
        </div>
        <p class="pres__txt">Étudiant en 2e année de <span class="pres__important"><abbr title="Métiers du Multimédia et de l'Internet">DUT MMI</abbr></span> à Angoulême, j'ai pu continuer de développer ma passion dans la <span class="pres__important">programmation</span> et découvrir le <span class="pres__important">développement web</span>, ainsi que tous les domaines de la <span class="pres__important">communication numérique</span>, en passant par <span class="pres__important">l'audiovisuel</span> et <span class="pres__important">l'infographie</span>.</p>
  		</div>
  	</section>

  	<section id="skills" class="skills">
  		<div class="section__container">
  			<h2><span class="underline">Mes compétences :</span></h2>
        <div class="skills__barscontainer">

          <?php
            foreach ($skills as $skill) {
          ?>
            <div data-toggle="tooltip" title="<?php echo $skill[0] ?>" class="skills__singularskill<?php if (!$skill[3]) { echo ' mobileOptional'; } ?>">
              <div class="progress progress-vertical">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $skill[1]?>" aria-valuemin="0" aria-valuemax="100">
                  <span class="sr-only"><?php echo $skill[1] ?>% Complete</span>
                </div>
              </div>
              <i class="devicon devicon-<?php echo $skill[0]; ?>-plain"></i>
            </div>
          <?php
            }
          ?>

        </div>
  		</div>
  	</section>

    <section id="qualites" class="qualites">

    </section>

  	<section id="creations" class="creations">
  		<div class="section__container">
  			<article class="creations__listescontainer">
          <h2 class="creations__titre"><span class="underline">Mes réalisations :</span></h2>
          <p>À travers différents projets, j'ai pu améliorer certains aspects de mes compétences. Voici une liste non exhaustive des projets que j'ai pu réalisés :</p>
          <?php
          foreach ($allReal["fr"] as $DomainTitle => $reals):
          ?>
            <h4 class="creations__soustitre"><span class="underline"><?php echo $DomainTitle ?> :</span></h4>
            <ul class="creations__liste">
            <?php
            foreach ($reals as $key => $real):
            ?>
              <li>
                <span class="creations__projet creations__projet--<?php echo $key ?>"><?php echo $real['titre'] ?></span> <em class="creations__langage"><?php echo $real['langage'] ?></em>
              </li>
            <?php
            endforeach;
            ?>
            </ul>
          <?php
          endforeach;
          ?>
        </article>

        <article class="creations__accordeon">
          <?php foreach ($allRealFlat as $idReal => $real) { ?>
            <div class="accordeon__singlecreation">
              <h4 class="accordeon__titre"><span class="creations__projet creations__projet--<?php echo $idReal ?>"><?php echo $real['titre'] ?></span></h4>
              <div class="accordeon__contentbox">
                <div class="accordeon__desc">
                  <?php echo $real['texte'] ?>
                </div>
              </div>
          </div>
          <?php } ?>
        </article>

  		</div>
  	</section>
  </main>

  <footer class="footer">
    <a href="#">mentions légales</a>
  </footer>
</body>
</html>
