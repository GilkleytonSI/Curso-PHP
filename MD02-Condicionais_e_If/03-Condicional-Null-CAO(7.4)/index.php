<?php
//$nome = 'Gilkleyton';
//$sobrenome = 'Rodrigues';


$nomeCompleto = $nome ?? 'Visitante';
//$nomeCompleto = $nome;
//$nomeCompleto .= isset($sobrenome) ? $sobrenome : '';
$nomeCompleto .= $sobrenome ?? '';

echo $nomeCompleto;