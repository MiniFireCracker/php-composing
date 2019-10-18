<?php

//var_dump(__DIR__);
$content = file(__DIR__ . DIRECTORY_SEPARATOR . 'cs_figures.csv');
//echo file_get_contents($content);
 // print_r($content);
// $fichier = __DIR__ . DIRECTORY_SEPARATOR . 'cs_figures.csv';
 //$truc = fopen($fichier, 'r');
// echo fread($truc, 6000);
// fclose($truc);
var_dump($content);

foreach( $content as $key => $piece_of_info ){
  //dump(explode(",", trim($piece_of_info)));
   $content[$key] = explode(",", trim($piece_of_info));
};

function dump ($variable){
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}
dump($piece_of_info);



//$tronches = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . cs_figures.csv);
//$cards = explode (PHP_EOL,$tronches);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body>
<h1>Computer science figures</h1>

<div class="ui link cards" >
<?php foreach($content as $piece_of_info): ?>
  
<div class="ui card">
  <div class="image">
    <img src="<?= $piece_of_info[7] ?>">
  </div>
  <div class="content">
    <a class="header"><?= $piece_of_info[0] ?></a>
    <div class="meta">
      <span class="date"> 
          <?php $title= $piece_of_info[2]; foreach($title as $detail): ?>
                        <?= $detail ?></span>
<?php endforeach; ?>
    </div>
    <div class="description">
    <?= $piece_of_info[3] ?>
    </div>
  </div>
  <div class="extra content">
   <p> <?= $piece_of_info[1] ?></p>
  </div>
</div>

    <?php endforeach;?>
</div>
</body>
</html>