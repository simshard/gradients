<?php
$str = '0deg, rgb(0, 255, 106) 7.77027027027027%, rgb(211, 211, 224) 100%';

//

$chars = preg_split('/(%,)/', $str, -1, PREG_SPLIT_OFFSET_CAPTURE);

echo('<p>'.$str.'</p>');
echo '<pre>';
print_r($chars);

