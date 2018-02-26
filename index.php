<!--

J'ai oublié de push le dernier cours de portfolio en Louet FML

Je dois récupérer :
le soulignement animé des titres des sections
un fix du background

 -->

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>portfolio </title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="assets/css/accordion.css"> -->
  <link rel="stylesheet" href="assets/css/accordeon.css">
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
			<canvas></canvas>
		</div>
	</section>

	<section class="creations">
		<div class="container-fluid">
			<article class="creations__listescontainer">
        <p>À travers différents projets, j'ai pu améliorer certains aspects de mes compétences. Voici une liste non exhaustive des projets que j'ai pu réalisés :</p>
        <h4>Programmation :</h4>
        <ul class="creations__liste creations__liste--prog">
          <li>SpeedUp <em class="creations__langage">-Python puis Javascript</em></li>
          <li>Draw me a Ship <em class="creations__langage">-Python puis Java</em></li>
          <li>Mastermind <em class="creations__langage">-Javascript + ES6</em></li>
          <li>A Normal Day <em class="creations__langage">-Unity/C#</em></li>
        </ul>
        <h4>Développement web :</h4>
        <ul class="creations__liste creations__liste--dev">
          <li>Galerie d'images éditable <em class="creations__langage">-PhP + Laravel</em></li>
          <li>Site vitrine promotionnel<em class="creations__langage">-Sass + Mobile First</em></li>
          <li>Ce portfolio ! <em class="creations__langage"></em></li>
          <li>Un petit peu de wordpress ne ferait pas de mal<em class="creations__langage"></em></li>
        </ul>
      </article>

      <article class="creations__accordeon">
        <h4 class="accordeon__titre accordeon__titre--selected">SpeedUp <a href=""><i class="fas-fa github"></i></a></h4>
        <div class="accordeon__contentbox accordeon__contentbox--open">
          <div class="accordeon__desc">
            <p>Destiné à la base à l'apprentissage du clavier par les enfants, SpeedUp a été créé comme premier exercice de programmation lors de ma spécialité <abbr title="Informatique & Sciences du Numérique">ISN</abbr> au Bac. Il a été plus tard adapté et amélioré par mes soins pour pouvoir être joué directement dans le navigateur grâce à Javascript.</p>
            <a href="dtraparic.mmi-angouleme.com/speedup.html">Jouer ici</a>
          </div>
        </div>
        <h4 class="accordeon__titre">Draw me a Ship</h4>
        <div class="accordeon__contentbox">
          <div class="accordeon__desc">
            <p>Draw me a Ship a été le jeu créé pour la présentation du projet final d'<abbr title="Informatique & Sciences du Numérique">ISN</abbr> qui a reçu la note de 20 à l'épreuve du Bac. Dans ce jeu de Shoot Them Up, vous incarnez un vaisseau qui doit traverser des champs d'astéroides de plus en plus denses à l'aide de votre laser. Un système de monnaie et d'améliorations de votre vaisseau est présent pour vous aider.
            C'est avec ce projet que je me suis initié à la programmation orientée objet.</p>
          </div>
        </div>
        <h4 class="accordeon__titre">Mastermind</h4>
        <div class="accordeon__contentbox">
          <div class="accordeon__desc">
            <p>Ce mastermind était un exercice de mon DUT MMI pour nous initier au Javascript. J'ai pu avec ce jeu m'entraîner sur différents aspects du Javascript comme <abbr title="Ensemble de nouvelles manières d'écriture Javascript facilitant sa lecture et son écriture">ES6</abbr> et les modules.</p>
          </div>
        </div>
        <h4 class="accordeon__titre">Galerie d'images éditable</h4>
        <div class="accordeon__contentbox">
          <div class="accordeon__desc">
            <p>Cet exercice de synthèse sur le PhP permettait de prouver ses acquis sur l'organisation en <abbr title="Modèle-Vue-Controlleur : séparation des parties du code selon leurs finalités">MVC</abbr>, ainsi que l'utilisation d'outils PhP comme le package manager <cite>Composer</cite> et des bibliothèques de Laravel comme le moteur de templates <cite>Blade</cite></p>
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
  <script type="text/javascript" src="assets/js/myScript.js"></script>

  </script>
	<!-- <script src="assets/js/sketch.js"></script> -->
</body>
</html>
