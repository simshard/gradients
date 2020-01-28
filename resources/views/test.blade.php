<?php
//$str = '0deg, rgb(0, 255, 106) 7.77027027027027%, rgb(211, 211, 224) 100%';

$json ='[{"position":0,"selected":0,"color":"rgb(255, 0, 0)"},{"position":100,"selected":1,"color":"rgb(0, 255, 193)"}]';


echo'<pre>';
echo('<p>'.$json.'</p>');
var_dump(json_decode($json));

