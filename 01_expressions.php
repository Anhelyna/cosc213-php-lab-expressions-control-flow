<?php
// 1) Arithmetic & assignment

$a = 10; $b= 3;
$sum = $a + $b;
$prod = $a * $b;

$a += 5;

// 2) Precedence & parentheses (predict before running)

echo 2 + 3 * 4, "\n";
echo (2 + 3) * 4,  "\n";

$name = "Ada";
echo "Hello $name \n"; // interpolation
echo 'Hello ' . $name . "\n"; // concatenation

// 4) Comparison: loose vs strict
$x = "0";
var_dump($x == false); // true
var_dump($x === false); // false

// 5) LOgical
$age = 19; $hasId = true;
if ($age >=19 && $hasId) echo "Entry allowed \n";

// 6) Ternary & null-coalescing 
$score = $_GET['score'] ?? null;
$label = ($score !== null && $score >= 50) ? 'Pass' : 'Fail/NoScore';
echo "Result: $label\n";
echo "5cats" +1, "\n"; // output 6
?>
