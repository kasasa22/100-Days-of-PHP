<?php
//CONTROL-STRUCTURES

//IF-STATEMENTS
//RULES
//->Standard charge of shs.20000
//-> cart greater than a million charge nothing
//->cart greater than shs.500000 charge sh.10000

$cart = 20000;
$charge=20000;

if ($cart > 1000000) {
    $charge=0;
}
elseif ($cart > 500000) {
    $charge=10000;
}
else{
    $charge=20000;

}
echo $charge;

//FOR - EACH LOOP
