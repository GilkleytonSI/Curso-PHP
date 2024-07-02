<?php
$lista = [
    'nome' => 'Gilkleyton',
    'idade'=> 31,
    'atributos' => [
        'força' => 60,
        'agilidade' => 80,
        'destreza' => 50
    ],
    'vida' => 1000,
    'mana' => 928
];

echo "NOME: ".$lista['nome']."<br/>";
echo "IDADE: ".$lista['idade']."<br/>";
echo "FORÇA: ".$lista['atributos']['força']."<br/>";
echo "AGILIDADE: ".$lista['atributos']['agilidade']."<br/>";
echo "DESTREZA: ".$lista['atributos']['destreza']."<br/>";
echo "VIDA: ".$lista['vida'];