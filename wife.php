<?php
$img_array = glob("https://cdn.jsdelivr.net/gh/Mulsd/image@master/*.{gif,jpg,png}",GLOB_BRACE);
$img = array_rand($img_array); 
header("location:.$img_array[$img]"); 
 ?>
