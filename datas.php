<?php

$skills = [
  [ "jquery",       90,     "#1068AD" ],
  [ "javascript",   70,     "#F0DA50" ],
  [ "php",          57.5,   "#767BB3" ],
  [ "html5",        50,     "#EF6527" ],
  [ "mysql",        45,     "#00618A" ],
  [ "css3",         40,     "#3E95D8" ],
  [ "git",          36.66,  "#F05134" ],
  [ "sass",         33.33,  "#CC6699" ],
  [ "gulp",         30,     "#CE4646" ],
  [ "atom",         27.5,   "#66595C" ],
  [ "illustrator",  25,     "#FF7C00" ],
  [ "photoshop",    22.5,   "#91C4FD" ],
  [ "bootstrap",    20,     "#61408D" ]
];

shuffle($skills);

$progReal = array(
  "speedup"=>[
    "titre"=>"SpeedUp",
    "langage"=>"-Python puis Javascript",
    "texte"=>"<p>Destiné à la base à l'apprentissage du clavier par les enfants, <span class='creations__projet creations__projet--speedup'>SpeedUp</span> a été créé comme premier exercice de programmation lors de ma spécialité <abbr title='Informatique & Sciences du Numérique'>ISN</abbr> au Bac. Il a été plus tard adapté et amélioré par mes soins pour pouvoir être joué directement dans le navigateur grâce à Javascript.</p>
    <a href='dtraparic.mmi-angouleme.com/speedup.html'>Jouer ici</a>"
  ],
  "dmas"=>[
    "titre"=>"Draw me a Ship",
    "langage"=>"-Python puis Java",
    "texte"=>"<p><span class='creations__projet creations__projet--dmas'>Draw me a Ship</span> a été le jeu créé pour la présentation du projet final d'<abbr title='Informatique & Sciences du Numérique'>ISN</abbr> qui a reçu la note de 20 à l'épreuve du Bac. Dans ce jeu de Shoot Them Up, vous incarnez un vaisseau qui doit traverser des champs d'astéroides de plus en plus denses à l'aide de votre laser. Un système de monnaie et d'améliorations de votre vaisseau est présent pour vous aider.
    C'est avec ce projet que je me suis initié à la programmation orientée objet.</p>"
  ],
  "master"=>[
    "titre"=>"Mastermind",
    "langage"=>"-Javascript + ES6",
    "texte"=>"<p>Ce <span class='creations__projet creations__projet--master'>mastermind</span> était un exercice de mon DUT MMI pour nous initier au Javascript. J'ai pu avec ce jeu m'entraîner sur différents aspects du Javascript comme <abbr title='Ensemble de nouvelles manières d'écriture Javascript facilitant sa lecture et son écriture'>ES6</abbr> et les modules.</p>"
  ],
  "day"=>[
    "titre"=>"A Normal Day",
    "langage"=>"-Unity/C#",
    "texte"=>"<p>Cet exercice de synthèse sur le PhP permettait de prouver ses acquis sur l'organisation en <abbr title='Modèle-Vue-Controlleur : séparation des parties du code selon leurs finalités'>MVC</abbr>, ainsi que l'utilisation d'outils PhP comme le package manager <cite>Composer</cite> et des bibliothèques de <cite>Laravel</cite> comme le moteur de templates <cite>Blade</cite></p>"
  ]
);

$devReal = array(
  "galimg"=>[
    "titre"=>"Galerie d'images éditable",
    "langage"=>"-PhP + Laravel",
    "texte"=>"<p>Cet exercice de synthèse sur le PhP permettait de prouver ses acquis sur l'organisation en <abbr title='Modèle-Vue-Controlleur : séparation des parties du code selon leurs finalités'>MVC</abbr>, ainsi que l'utilisation d'outils PhP comme le package manager <cite>Composer</cite> et des bibliothèques de <cite>Laravel</cite> comme le moteur de templates <cite>Blade</cite></p>"
  ],
  "choco"=>[
    "titre"=>"Site vitrine chocolaterie",
    "langage"=>"-HTML5 + CSS3",
    "texte"=>""
  ],
  "gans"=>[
    "titre"=>"Site vitrine mobile first",
    "langage"=>"-Sass + Mobile First",
    "texte"=>""
  ]
);

$infogReal = array(
  "perso"=>[
    "titre"=>"Autoportrait vectoriel",
    "langage"=>"-Illustrator",
    "texte"=>""
  ]
);

$allReal = array_merge($progReal, $devReal, $infogReal);

// on transfère la variable au javascript
?><script>
let skills = <?php echo json_encode($skills)?>,
progReal = <?php echo json_encode($progReal)?>,
devReal = <?php echo json_encode($devReal)?>,
infogReal = <?php echo json_encode($infogReal)?>;
</script>
