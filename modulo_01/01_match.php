<?php

$linguagem_atual = 'php';

$melhor_linguagem = match ($linguagem_atual) {
    'java' => 'lenta',
    'php' =>  'pica',
    'csharp' =>  'laele',
    default => 'valor desconhecido'
};

echo "A melhor linguagem é $linguagem_atual";
