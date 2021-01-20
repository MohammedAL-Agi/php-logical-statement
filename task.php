
<?php
echo "==============Q1==============" . "<br>";
$x = 300;
if ($x <= 50) {
	echo "Rs." . $x * 2.50 . "/unit <br>";
} elseif ($x > 50 && $x <= 150) {
	echo  "Rs." . $x * 5.00 . "/unit <br>";
} elseif ($x > 151 && $x <= 250) {
	echo  "Rs." . $x * 6.20 . "/unit <br>";
} else {
	echo "Rs." . $x * 7.50 . "/unit <br>";
}
echo "<br>";

echo "==============Q2==============" . "<br>";

$operator = array("Addition", "Subtraction", "Multiplication", "Division");
$a = 2;
$b = 3;
switch ($operator[3]) {
	case $operator[0]:
		echo $a + $b;
		break;
	case $operator[1]:
		echo $a - $b;
		break;
	case $operator[2]:
		echo $a * $b;
		break;
	case $operator[3]:
		echo $a / $b;
		break;
}
echo "<br>"."<br>";


echo "==============Q3==============" . "<br>";

function check($age) {

	if($age < 18){
		echo "Your not eligible to vote";
	}else{
		echo "You are eligible to vote";
	}
}
check(18);

echo "<br>"."<br>";


echo "==============Q4==============" . "<br>";

$y = 0;
if($y === 0 ){
	echo "This number $y is equal to zero";
}elseif($y < 0){
	echo "This number $y is negative";
}elseif($y > 0){
	echo "This number $y is positive";
}else {
	echo "Please enter a number";
}
echo "<br>"."<br>";

echo "==============The End==============" . "<br>";
