<?php

// CONSEGUI FAZER SOZINHO :)
// TO FELIZ!

$num = 3;
$file = 'tabuadade3.txt';

if (file_exists($file)) {
    for ($i = 1; $i <= 1000; $i++) {
        $resultado = "$num x $i = " . $num * $i . PHP_EOL;
        file_put_contents($file, $resultado, FILE_APPEND);
    }
} else {
    echo "Não existe esse arquivo!";
}
