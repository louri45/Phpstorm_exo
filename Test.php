<?php

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

 foreach ($students as $key=>$age){

     echo 'Nom = ' .$key. ', Age = ' .$age. '<br/>';
 }

foreach ($students as $key=>$age){

    $agetot = $agetot+$age;

    $moyenne = $agetot / (count($students));

}

echo '<br/>La moyenne d\'âge du groupe est de ' .$moyenne;


?>