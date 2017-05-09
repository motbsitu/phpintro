<?php
$descriptions = [
    'Earth' => 'mostly harmless',
    'Marvin' => 'the paranoid android'
];

$descriptions['Zaphod'] = 'President of the Imperial Galactic Government';

echo $descriptions['Marvin'];

print_r($descriptions);

//embed associated array element in {}
echo "Earth is described as {$descriptions['Earth']}";
