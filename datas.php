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

// on transfère la variable au javascript
?><script>let skills = <?php echo json_encode($skills); ?></script>
