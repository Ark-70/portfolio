<?php

$skills = [
  //ID, %, Couleur, mobile
  [ "jquery",       90,     "#1068AD", 1 ],
  [ "javascript",   70,     "#F0DA50", 1 ],
  [ "php",          57.5,   "#767BB3", 1 ],
  [ "html5",        50,     "#EF6527", 1 ],
  [ "mysql",        45,     "#00618A", 1 ],
  [ "css3",         40,     "#3E95D8", 1 ],
  // [ "wordpress",    36.66,  "#21759b", 1 ],
  [ "wordpress",    36.66,  "#787878", 1 ],
  [ "git",          33.33,  "#F05134", 1 ],
  [ "sass",         30,     "#CC6699", 1 ],
  [ "gulp",         27.5,   "#CE4646", 0 ],
  [ "atom",         25,     "#66595C", 0 ],
  [ "illustrator",  23,     "#FF7C00", 0 ],
  [ "photoshop",    21,     "#91C4FD", 0 ],
  [ "bootstrap",    19,     "#61408D", 0 ]
];

shuffle($skills);
$allReal = [
  "Programmation"=>[
    "speedup"=>[
      "titre"=>"SpeedUp",
      "langage"=>"-Python puis Javascript",
      "texte"=>"<p>Destiné à la base à l'apprentissage du clavier par les enfants, <span class='creations__projet creations__projet--speedup'>SpeedUp</span> a été créé comme premier exercice de programmation lors de ma spécialité <span class='creations__projet creations__projet--speedup'><abbr title='Informatique & Sciences du Numérique'>ISN</abbr></span> au Bac. Il a été plus tard adapté et amélioré par mes soins pour pouvoir être joué directement dans le navigateur grâce à <span class='creations__projet creations__projet--speedup'>Javascript</span>.</p>
      <a href='dtraparic.mmi-angouleme.com/speedup.html'>Jouer ici</a>"
    ],
    "dmas"=>[
      "titre"=>"Draw me a Ship",
      "langage"=>"-Python puis Java",
      "texte"=>"<p><span class='creations__projet creations__projet--dmas'>Draw me a Ship</span> a été le jeu créé pour la présentation du projet final d'<span class='creations__projet creations__projet--dmas'><abbr title='Informatique & Sciences du Numérique'>ISN</abbr></span> qui a reçu la note de 20 à l'épreuve du Bac. Dans ce jeu de <span class='creations__projet creations__projet--dmas'>Shoot Them Up</span>, vous incarnez un vaisseau qui doit traverser des champs d'<span class='creations__projet creations__projet--dmas'>astéroides</span> de plus en plus denses à l'aide de votre laser. Un système de monnaie et d'améliorations de votre vaisseau est présent pour vous aider.
      C'est avec ce projet que je me suis initié à la programmation orientée objet.</p>"
    ],
    "master"=>[
      "titre"=>"Mastermind",
      "langage"=>"-Javascript + ES6",
      "texte"=>"<p>Ce <span class='creations__projet creations__projet--master'>mastermind</span> était un exercice de mon DUT MMI pour nous initier au <span class='creations__projet creations__projet--master'>Javascript</span>. J'ai pu avec ce jeu m'entraîner sur différents aspects du Javascript comme <span class='creations__projet creations__projet--master'><abbr title='Ensemble de nouvelles manières d'écriture Javascript facilitant sa lecture et son écriture'>ES6</abbr></span> et les modules.</p>"
    ],
    "day"=>[
      "titre"=>"A Normal Day",
      "langage"=>"-Unity/C#",
      "texte"=>"<p>Ce projet tutoré de jeu vidéo devait être un <span class='creations__projet creations__projet--day'>serious-game</span> contre le <span class='creations__projet creations__projet--day'>harcèlement</span>. Ce projet a pu me permettre de me mettre dans un contexte professionnel du monde du jeu vidéo. Le framework <span class='creations__projet creations__projet--day'>Unity</span> étant assez compliqué et chronophage à prendre en main, j'ai pu me confronter aux difficultés qu'il pose.</p>"
    ]
  ],
  "Développement web"=>[
    "galimg"=>[
      "titre"=>"Galerie d'images éditable",
      "langage"=>"-PhP + Laravel",
      "texte"=>"<p>Cet exercice de synthèse sur le PhP permettait de prouver ses acquis sur l'organisation en <span class='creations__projet creations__projet--galimg'><abbr title='Modèle-Vue-Controlleur : séparation des parties du code selon leurs finalités'>MVC</abbr></span>, ainsi que l'utilisation d'outils PhP comme le package manager <span class='creations__projet creations__projet--galimg'><cite>Composer</cite></span> et des bibliothèques de <span class='creations__projet creations__projet--galimg'><cite>Laravel</cite></span> comme le moteur de templates <span class='creations__projet creations__projet--galimg'><cite>Blade</cite></span></p>"
    ],
    "choco"=>[
      "titre"=>"Site vitrine chocolaterie",
      "langage"=>"-HTML5 + CSS3",
      "texte"=>"<p>Ce site est le résultat de l'un des premiers gros <span class='creations__projet creations__projet--choco'>projets web non fictifs</span> de la formation MMI : Alliant toute la <span class='creations__projet creations__projet--choco'>communication</span> théorique et numérique, le <span class='creations__projet creations__projet--choco'>webdesign</span>, la création de <span class='creations__projet creations__projet--choco'>charte graphique</span>, le <span class='creations__projet creations__projet--choco'>maquettage</span> de site web et son <span class='creations__projet creations__projet--choco'>développement</span>, ce projet nous a permis de nous tester sur nos acquis.</p>"
    ],
    "gans"=>[
      "titre"=>"Site vitrine mobile first",
      "langage"=>"-Sass + Mobile First",
      "texte"=>"<p>Basé sur un site original très attrayant mais aussi techniquement très pauvre, le but de ce projet était de redesigner un site avec des conventions de codage tirées du milieu front-end professionnel. De l'automatisation de traitement sur le code avec <span class='creations__projet creations__projet--gans'>GulpJs</span> au préprocesseur css Sass en passant par la convention css de nommage <span class='creations__projet creations__projet--gans'>BEM (.block__element--modifier)</span>, tous étaient de la partie. Sans oublier le fameux <span class='creations__projet creations__projet--gans'>Git</span>, couplé avec <span class='creations__projet creations__projet--gans'>netlify</span></p>"
    ]
  ],
  "Infographie"=> [
    "hawaii"=>[
      "titre"=>"Autoportrait vectoriel",
      "langage"=>"-Illustrator",
      "texte"=>"Regardez, c'est beau"
    ],
    "piracy"=>[
      "titre"=>"Vive /r/Piracy",
      "langage"=>"-Illustrator",
      "texte"=>"Ça aussi c'est pas dégueu"
      //C'EST ICI QU'A ÉTÉ OUBLIÉE UNE IDÉE DE SECTION
    ]
  ]
];

$allRealFlat = array_merge($allReal["Programmation"], $allReal["Développement web"], $allReal["Infographie"]);