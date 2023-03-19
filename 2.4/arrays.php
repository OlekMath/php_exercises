<?php


// $guitars = array('Vela', 'Explorer', 'Strat'); //old way
//traditional array
$guitars1 = ['Vela', 'Explorer', 'Strat'];

/*
echo $guitars[0];
echo(' ');
print_r($guitars);
*/

//print_r($guitars);
/*
if (isset($guitars1[3]) ) {
    echo $guitars1[3];
} else {
    echo 'Guitar does not exists';
}
*/

//associative array
$guitars2 = [
    'prs' => 'Vela',
    'gibson' => 'Explorer',
    'fender' => 'Strat',
    'Prs' => 'Single Cut'
];

echo $guitars2['prs'];

if (isset($guitars2['Prs']) ) {
    echo $guitars2['Prs'];
} else {
    echo 'Guitar does not exists';
}