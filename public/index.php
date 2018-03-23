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
  <title>Traparic David Portfolio | Étudiant DUT MMI Angoulême Développement et Programmation</title>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

  <!-- <link rel="stylesheet" href="assets/css/accordion.css"> -->
  <link rel="stylesheet" href="portfolio/assets/css/style.css">
  <link rel="stylesheet" href="portfolio/assets/css/pres.css">
  <link rel="stylesheet" href="portfolio/assets/css/skills.css">
  <link rel="stylesheet" href="portfolio/assets/css/realisations.css">

  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" defer></script>
  <script type="text/javascript" src="portfolio/assets/js/matter.min.js" defer></script>
  <script type="text/javascript" src="portfolio/assets/js/skills.js" defer></script>
  <script type="text/javascript" src="portfolio/assets/js/accordeon.js" defer></script>

</head>
<body>
	<header>
		<div class="header__backgroundimg"></div>
		<h1>David</h1>
		<h1>Traparic</h1>
		<!-- <canvas id="mattercanvas"></canvas> -->
	</header>

  <main>
  	<section class="parcours">
  		<div class="container-fluid">
  			<h2><span class="underline">Présentation :</span></h2>
        <div class="profile__container">
          <div class="profile__centeredcontainer">
            <img class="profile__image" src="portfolio/assets/img/profile.jpg" alt="">
            <ul class="profile__txt">
              <li><strong>Status : </strong>Étudiant Bac +2</li>
              <li><strong>Âge : </strong>19 ans</li>
              <li><strong>Domaine : </strong>Programmation & Développement web</li>
              <li><strong>Loisirs : </strong>Rubik's Cube & Musculation</li>
            </ul>
          </div>
        </div>
  		</div>
  	</section>

  	<section class="skills">
  		<div class="container-fluid">
  			<h2><span class="underline">Mes compétences :</span></h2>
        <div class="skills__barscontainer">

          <?php
            foreach ($skills as $skill) {
          ?>
            <div data-toggle="tooltip" title="<?php echo $skill[0] ?>" class="skills_singularskill">
              <div class="progress progress-vertical">
                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $skill[1]?>" aria-valuemin="0" aria-valuemax="100">
                  <span class="sr-only"><?php echo $skill[1] ?>% Complete</span>
                </div>
              </div>
              <i alt="logo <?php echo $skill[0] ?>" class="devicon devicon-<?php echo $skill[0] ?>-plain"></i>
            </div>
          <?php
            }
          ?>

        </div>
  		</div>
  	</section>

  	<section class="creations">
  		<div class="container-fluid">
  			<article class="creations__listescontainer">
          <h2><span class="underline">Mes réalisations :</span></h2>
          <p>À travers différents projets, j'ai pu améliorer certains aspects de mes compétences. Voici une liste non exhaustive des projets que j'ai pu réalisés :</p>
          <h4><span class="underline">Programmation :</span></h4>
          <ul class="creations__liste creations__liste--prog">
            <?php
            foreach ($progReal as $key => $real) {
            ?>
              <li>
                <span class="creations__projet creations__projet--<?php echo $key ?>"><?php echo $real['titre'] ?></span> <em class="creations__langage"><?php echo $real['langage'] ?></em>
              </li>
            <?php
            }
            ?>
          </ul>
          <h4><span class="underline">Développement web :</span></h4>
          <ul class="creations__liste creations__liste--dev">
            <?php
            foreach ($devReal as $key => $real) {
            ?>
              <li>
                <span class="creations__projet creations__projet--<?php echo $key ?>"><?php echo $real['titre'] ?></span> <em class="creations__langage"><?php echo $real['langage'] ?></em>
              </li>
            <?php
            }
            ?>
          </ul>
          <h4><span class="underline">Infographie :</span></h4>
          <ul class="creations__liste creations__liste--dev">
            <?php
            foreach ($infogReal as $key => $real) {
            ?>
              <li>
                <span class="creations__projet creations__projet--<?php echo $key ?>"><?php echo $real['titre'] ?></span> <em class="creations__langage"><?php echo $real['langage'] ?></em>
              </li>
            <?php
            }
            ?>
          </lu>
        </article>

        <article class="creations__accordeon">
          <?php foreach ($allReal as $idReal => $real) { ?>
            <h4 class="accordeon__titre"><span class="creations__projet creations__projet--<?php echo $idReal ?>"><?php echo $real['titre'] ?></span></h4>
            <div class="accordeon__contentbox">
              <div class="accordeon__desc">
                <?php echo $real['texte'] ?>
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
