<?php
// CONTROL STRUCTURES

// IF STATEMENTS
// RULES:
// -> Standard charge of shs. 20,000
// -> If cart value is greater than a million, charge nothing
// -> If cart value is greater than shs. 500,000, charge shs. 10,000

$cart = 20000;
$charge = 20000;

if ($cart > 1000000) {
    $charge = 0;
} elseif ($cart > 500000) {
    $charge = 10000;
} else {
    $charge = 20000;
}

echo "Charge: shs. " . $charge . "\n";

// FOR-EACH LOOP
// Looping over PHP arrays 
$books = [
    'calculus' => 2000,
    'physics' => 3000,
    'chemistry' => 4000
];

$total = 0;
foreach ($books as $book => $cost) {
    echo $book . ": shs. " . $cost . "\n";
    $total += $cost;
}

echo "Total cost: shs. " . $total . "\n";


// STUDENSTS MARKS

$students=[
"kasasa"=>70,
"Trevor"=>80,
"James"=>60,
"Opio"=>40

];
$total = 0 ."\n";

foreach($students as $name => $marks){
    echo $name.": ".$marks."\n";
    $total += $marks;
}
echo "Total marks: ". $total . "";

//WHILE LOOP

$emails=[
    'kasasa@gmail.com',
    'trevor@gmail.com',
    'james@gmail.com',
    'opio@gmail.com'
];

$counter = 0;
$amount = 3;

while($counter <= $amount){
    echo "Processing email: ". $emails[$counter]. "\n";
    $counter++;
}