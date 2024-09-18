<?php

echo __DIR__;

echo "<br>";
$tamanho = filesize('teste.txt');

echo $tamanho . ' bytes';

echo "<br>";
$info = pathinfo('teste.txt');
print_r($info);
