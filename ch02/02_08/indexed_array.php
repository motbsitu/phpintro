<?php
//traditional way
// $characters = array('Arthur Dent', 'Ford Prefect', 'Zaphod Beeblebrox');
//
// print_r($characters);

//shorthand
$characters = ['Arthur Dent', 'Ford Prefect', 'Zaphod Beeblebrox'];


$characters[] = 'Marvin';
$characters[] = 'Slartibartfast';

print_r($characters) . '<br />';

echo $characters[1];
