<?php 
$string = "Lorem ipsum dolor sit amet, aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa consectetur adipisicing elit. Explicabo similique temporibus qui minima numquam at placeat, quis consequatur repellat possimus accusamus porro provident itaque dolorum fugit voluptate incidunt odio rerum.";
// echo wordwrap($string,26);
echo wordwrap($string,26,"\n",true);

echo PHP_EOL;
echo PHP_EOL;

$string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque \n saepe explicabo illo nostrum \n omnis dolor aut pariatur \n qui dolorum provident.";
echo nl2br($string);