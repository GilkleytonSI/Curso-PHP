<?php
$ingredientes = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó',
    'trigo'
];

echo '<h2>Ingredientes</h2>';
//Exemplo 01
// foreach($ingredientes as $chave => $valor){
//     echo "Item: ".( $chave + 1).": ".$valor."<br/>";
// }

//Exemplo 02
// foreach($ingredientes as $valor){
//     echo "Item: ".$valor."<br/>";
// }

//Exemplo 03 usando dentro de <ul>
echo '<ul>';
foreach($ingredientes as $valor){
    echo '<li>'.$valor.'</li>';
}
echo '</ul>';

// print_r($ingredientes);