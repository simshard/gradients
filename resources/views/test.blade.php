<?php
//$str = '0deg, rgb(0, 255, 106) 7.77027027027027%, rgb(211, 211, 224) 100%';

//
// $ex='[
//     {"position":0,"selected":0,"color":"rgb(255, 0, 0)"},
//     {"position":28.79746835443038,"selected":0,"color":"rgb(255, 232, 12)"},
//     {"position":57.59493670886076,"selected":1,"color":"rgb(10, 145, 243)"},
//     {"position":100,"selected":0,"color":"rgb(0, 0, 255)"}
// ]';

$ex='[{"position":0,"selected":0,"color":"rgb(255, 0, 0)"},{"position":58.86075949367089,
"selected":1,"color":"rgb(154, 172, 68)"},{"position":100,
"selected":0,"color":"rgb(115, 115, 207)"}]';
echo $ex;

$json ='[{"position":0,"selected":0,"color":"rgb(255, 0, 0)"},{"position":100,"selected":1,"color":"rgb(0, 255, 193)"}]';

//position  selected color
echo'<pre>';
 echo('<p> original '.$ex.'</p>');
// var_dump(json_decode($ex));


//var_dump($handlers);

// echo ' num handlers'.sizeof($handlers);
 // print_r($handlers[0]);
 // print_r($handlers[1]);

//gp.addHandler(0,  'rgb(255, 0, 0)');
//gp.addHandler(100, 'rgb(0, 0, 255)');
//foreach ($handlers as $k => $v) {echo $k.'='.$v.',';}

//gp.addHandler(0,  'rgb(255, 0, 0)');
$handlers=json_decode($ex,true);
  for ($i=0; $i < sizeof($handlers) ; $i++) {
      echo(
         'gp.addHandler('.
          round($handlers[$i]['position']) .',"'.
          $handlers[$i]['color'] .'");'.'<br>'
        );
    }












/*
echo(sizeof($handlers) );
echo( $handlers[0]['position'] .' ');
echo( $handlers[1]['position'].' ' );
echo( $handlers[0]['selected'] .' ');
echo( $handlers[1]['selected'].' ' );
echo( $handlers[0]['color'] .' ');
echo( $handlers[1]['color'].' ' );

$handlers=json_decode($json );
print_r($handlers[0]);
print_r($handlers[1]);

echo(sizeof($handlers) );
echo( $handlers[0]->position  .' ');
echo( $handlers[1]->position.' ' );
echo( $handlers[0]->selected .' ');
echo( $handlers[1]->selected.' ' );
echo( $handlers[0]->color .' ');
echo( $handlers[1]->color.' <br>' );

foreach ($handlers as $k => $v) {
echo   'obj'.  $position0=$handlers[0]->position.' ';
echo    $selected0=$handlers[0]->selected.' ';
echo    $color0=$handlers[0]->color.' ';
echo    $position1=$handlers[1]->position.' ';
echo    $selected1=$handlers[1]->selected.' ';
echo    $color1=$handlers[1]->color.' <br>';
}

$handlers=json_decode($json,true);
foreach ($handlers as $k => $v) {
echo    'Array'.$position0=$handlers[0]['position'].' ';
echo    $selected0=$handlers[0]['selected'].' ';
echo    $color0=$handlers[0]['color'].' ';
echo    $position1=$handlers[1]['position'].' ';
echo    $selected1=$handlers[1]['selected'].' ';
echo    $color1=$handlers[1]['color'].' ';
}
*/

