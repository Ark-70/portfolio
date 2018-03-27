<!--

Site trop stylé
https://iamvdo.me/blog/la-cascade-css-inherit-et-initial
https://app.netlify.com/signup#_ga=2.154495422.728589584.1519897243-606316059.1519897243

 -->

<?php require '../app_portfolio/datas.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Portfolio et présentation de David Traparic, étudiant en développement et programmation en 2e année de DUT MMI">
  <meta name="google-site-verification" content="i5-PStLflHEPBHowRL6MStX7or38hI47kd3nO7kqtv0" />
  <title>Traparic David Portfolio | Étudiant DUT MMI Développement & Programmation</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

  <link rel="stylesheet" href="portfolio/assets/css/myfont-codes.css">
  <link rel="stylesheet" href="portfolio/assets/css/style.css">
  <link rel="stylesheet" href="portfolio/assets/css/pres.css">
  <link rel="stylesheet" href="portfolio/assets/css/skills.css">
  <link rel="stylesheet" href="portfolio/assets/css/realisations.css">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-116312672-1"></script> -->
  <script type="text/javascript" defer>
  // on transfère les datas du datas.php au .js
  let skills = <?php echo json_encode($skills)?>,
  allReal = <?php echo json_encode($allReal)?>;
  </script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
  <script type="text/javascript" src="portfolio/assets/js/matter.min.js" defer></script>
  <script type="text/javascript" src="portfolio/assets/js/scrollskillsandmenu.js" defer></script>
  <script type="text/javascript" src="portfolio/assets/js/accordeon.js" defer></script>

</head>
<body>

  <header class="menu__container">
    <a class="menu__togglebtn menu__togglebtn--closed"><i class="icon icon-menu"></i></a>
      <nav class="menu">
        <ul>
          <li><a href="#parcours">Présentation</a></li>
          <li><a href="#skills">Mes compétences</a></li>
          <li><a href="#creations">Mes réalisations</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>
  </header>

	<section class="imgdegarde">
		<div class="garde__backgroundimg"></div>
		<h1>David</h1>
		<h1>Traparic</h1>
	</section>

  <main>
  	<section id="parcours" class="parcours">
  		<div class="section__container">
  			<h2><span class="underline">Présentation :</span></h2>
        <div class="profile__container">
          <div class="profile__centeredcontainer">
            <div class="profile__mask"></div>
            <img class="profile__image" srcset="portfolio/assets/img/profile236.jpg 236w, portfolio/assets/img/profile280.jpg 280w" src="portfolio/assets/img/profile280.jpg" width="280" height="280" alt="Photo David Traparic">
            <ul class="profile__txt">
              <li><strong>Statut : </strong>Étudiant Bac +2</li>
              <li><strong>Âge : </strong>19 ans</li>
              <li><strong>Domaine : </strong>Programmation & Développement web</li>
              <li><strong>Loisirs : </strong>Rubik's Cube & Musculation</li>
            </ul>
          </div>
        </div>
        <p class="pres__txt">Étudiant en 2e année de <span class="pres__important"><abbr title="Métiers du Multimédia et de l'Internet">DUT MMI</abbr></span> à Angoulême, j'ai pu continuer de développer ma passion dans la <span class="pres__important">programmation</span> et découvrir le <span class="pres__important">développement web</span>, ainsi que tous les domaines de la <span class="pres__important">communication numérique</span>, en passant par <span class="pres__important">l'audiovisuel</span> et <span class="pres__important">l'infographie</span.</p>
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
              <i alt="logo <?php echo $skill[0] ?>" class="devicon devicon-<?php echo $skill[0]; ?>-plain"></i>
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
        </div>

  		</div>
  	</section>
  </main>

	<!-- <script src="assets/js/sketch.js"></script> -->
</body>
</html>
