<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

$nl = (php_sapi_name === 'cli') ? PHP_EOL : "<br>\n"
//1) for - print multiples of 7 up to 70
for ($i =7; $i <= 70; $i += 7){
if (php_spi_name() === 'cli')
echo $i . ' ';
}else {
echo "<span style=\"display:inline-block;width:40px;\"$i</span>";
}
echo $nl;

//2) while - sum numbers until > 100
$sum =0; $n =1;
while($sum <= 100){
$sum += $n;
$n++;
}
echo "First n where sum > 100 is $n, sum=$sum". $nl;

//3) do...while - ensure at least one iteration
$count = 0;
do {$count++;
}while ($count < 1);
"do...while ran $count time(s)" . $nl;

//4) foreach - iterate associative array
$cart = ['pen' => 1.2, 'notebook' =>2.5, 'bag' =>12.0, 'gum'=>0.5];
$subtotal = 0.0;
foreach ($cart as $item=>$price){
if($price < 1.0) continue;
$subtotal += $price;
echo "Subtotal (skip <1): $subtotal" . $nl;

//5 Challenge - FzzBuzz 1..30, skip 13*/
for ($i =1; $i <= 30; $i++){
if ($i === 13) continue;
$out = '';
if($i % 3 === 0) $out .= 'Fizz';
if($i % 5 === 0) $out .= 'Buzz';
echo ($out !== '' ? $out : $i) . $nl;
}

if(php_sapi_name() !== 'cli'){
echo "<h2>Multiplication Table (1-10)</h2>\n";
echo "<table border = '1' cellpadding='6' cellspacing='0' style='border-collapse; text-align:centr;'>\n"
echo "<tr><th></th>";
for ($h =1; $h <=10; $r++){
echo "<tr><th>$r</th>";
for ($c =1; $c <=10; $c++){
echo "<td>" . ($r*$c) ."</td>";
}
echo "</tr> \n";
}
echo "</table>\n";
}

}
}
?>
</body>
</html>
