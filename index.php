<!--

Site trop stylé
https://iamvdo.me/blog/la-cascade-css-inherit-et-initial
https://app.netlify.com/signup#_ga=2.154495422.728589584.1519897243-606316059.1519897243

 -->

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>portfolio </title>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

  <!-- <link rel="stylesheet" href="assets/css/accordion.css"> -->
  <link rel="stylesheet" href="assets/css/accordeon.css">
  <link rel="stylesheet" href="assets/css/skills.css">
  <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
	<header>
		<div class="header__backgroundimg"></div>
		<h1>David</h1>
		<h1>Traparic</h1>
		<!-- <canvas id="mattercanvas"></canvas> -->
	</header>


	<section class="path">
		<div class="container-fluid">
			<h2><span class="underline">Mon parcours :</span></h2>
			<p>Lorem ibsum</p>
		</div>
	</section>

	<section class="skills">
		<div class="container-fluid">
			<h2><span class="underline">Mes compétences :</span></h2>

      <div class="skills__barscontainer">

      <!-- PATTERN MIS AVEC TABLEAU JS
        <div class="skills_singularskill">
          <div class="progress progress-bar-vertical">
            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="height: 30%;">
              <span class="sr-only">30% Complete</span>
            </div>
          </div>
          <i class="devicon devicon-github-plain"></i>
        </div>
      -->

      </div>
		</div>
	</section>

	<section class="creations">
		<div class="container-fluid">
			<article class="creations__listescontainer">
        <p>À travers différents projets, j'ai pu améliorer certains aspects de mes compétences. Voici une liste non exhaustive des projets que j'ai pu réalisés :</p>
        <h4>Programmation :</h4>
        <ul class="creations__liste creations__liste--prog">
          <li><span class="creations__projet creations__projet--speedup"><label for="speeduplink">SpeedUp</label></span> <em class="creations__langage">-Python puis Javascript</em></li>
          <li><span class="creations__projet creations__projet--dmas">Draw me a Ship</span> <em class="creations__langage">-Python puis Java</em></li>
          <li><span class="creations__projet creations__projet--master">Mastermind</span> <em class="creations__langage">-Javascript + ES6</em></li>
          <li><span class="creations__projet creations__projet--day">A Normal Day</span> <em class="creations__langage">-Unity/C#</em></li>
        </ul>
        <h4>Développement web :</h4>
        <ul class="creations__liste creations__liste--dev">
          <li><span class="creations__projet creations__projet--galimg">Galerie d'images éditable</span> <em class="creations__langage">-PhP + Laravel</em></li>
          <li>Site vitrine promotionnel<em class="creations__langage">-Sass + Mobile First</em></li>
          <li>Ce portfolio ! <em class="creations__langage"></em></li>
          <li>Un petit peu de wordpress ne ferait pas de mal<em class="creations__langage"></em></li>
        </ul>
      </article>

      <article class="creations__accordeon">
        <h4 class="accordeon__titre accordeon__titre--selected"><span class="creations__projet creations__projet--speedup">SpeedUp</span><a href=""><i class="fas-fa github"></i></a></h4>
        <div class="accordeon__contentbox accordeon__contentbox--open">
          <div class="accordeon__desc">
            <p>Destiné à la base à l'apprentissage du clavier par les enfants, <span class="creations__projet creations__projet--speedup">SpeedUp</span> a été créé comme premier exercice de programmation lors de ma spécialité <abbr title="Informatique & Sciences du Numérique">ISN</abbr> au Bac. Il a été plus tard adapté et amélioré par mes soins pour pouvoir être joué directement dans le navigateur grâce à Javascript.</p>
            <a href="dtraparic.mmi-angouleme.com/speedup.html">Jouer ici</a>
          </div>
        </div>
        <h4 class="accordeon__titre"><span class="creations__projet creations__projet--dmas">Draw me a Ship</span></h4>
        <div class="accordeon__contentbox">
          <div class="accordeon__desc">
            <p><span class="creations__projet dmas">Draw me a Ship</span> a été le jeu créé pour la présentation du projet final d'<abbr title="Informatique & Sciences du Numérique">ISN</abbr> qui a reçu la note de 20 à l'épreuve du Bac. Dans ce jeu de Shoot Them Up, vous incarnez un vaisseau qui doit traverser des champs d'astéroides de plus en plus denses à l'aide de votre laser. Un système de monnaie et d'améliorations de votre vaisseau est présent pour vous aider.
            C'est avec ce projet que je me suis initié à la programmation orientée objet.</p>
          </div>
        </div>
        <h4 class="accordeon__titre"><span class="creations__projet creations__projet--master">Mastermind</span></h4>
        <div class="accordeon__contentbox">
          <div class="accordeon__desc">
            <p>Ce <span class="creations__projet master">mastermind</span> était un exercice de mon DUT MMI pour nous initier au Javascript. J'ai pu avec ce jeu m'entraîner sur différents aspects du Javascript comme <abbr title="Ensemble de nouvelles manières d'écriture Javascript facilitant sa lecture et son écriture">ES6</abbr> et les modules.</p>
          </div>
        </div>
        <h4 class="accordeon__titre"><span class="creations__projet creations__projet--galimg">Galerie d'images éditable</span></h4>
        <div class="accordeon__contentbox">
          <div class="accordeon__desc">
            <p>Cet exercice de synthèse sur le PhP permettait de prouver ses acquis sur l'organisation en <abbr title="Modèle-Vue-Controlleur : séparation des parties du code selon leurs finalités">MVC</abbr>, ainsi que l'utilisation d'outils PhP comme le package manager <cite>Composer</cite> et des bibliothèques de <cite>Laravel</cite> comme le moteur de templates <cite>Blade</cite></p>
          </div>
        </div>
      </div>

		</div>
	</section>


	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- <script type="text/javascript" src="assets/js/accordion.js"></script> -->
  <!-- voir depuis inspecteur de code s'il y a pas moyen de pécho le code CSS et JS utile -->
	<script type="text/javascript" src="assets/js/matter.min.js"></script>
  <script type="text/javascript" src="assets/js/accordeon.js"></script>
  <script type="text/javascript" src="assets/js/skills.js"></script>

	<!-- <script src="assets/js/sketch.js"></script> -->
</body>
</html>
