
<?php
$age = 17;
$citizenship = true;
$ID = true;

$eligibleToVote = ($age >= 18) && ($citizenship && $ID) ;

echo "Age: $age<br>";
echo "Citizenship: " . ($citizenship ? "Yes" : "No") . "<br>";
echo "ID: " . ($ID ? "Yes" : "No") . "<br>";

if ($eligibleToVote) {
    echo "You are eligible to vote.<br>";
} else {
    echo "You are not eligible to vote.<br>";
}
?>

<?php




function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;

}

echo '<br/>';

function factorial($number)
{
    if ($number <= 1) {
        return 1;
    }

    return $number * factorial($number - 1);
}



$randomNumber = rand(1, 100);

if (isPrime($randomNumber)) {
    echo "$randomNumber is a prime number.\n";
} else {
    echo "$randomNumber is not a prime number.\n";
}
echo '<br/>';


echo "Factorial of $randomNumber is: " . factorial($randomNumber) . "\n";
echo '<br/>';

echo "Even numbers from 1 to 10: ";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 === 0) {
        echo $i . " ";
    }
}

echo "\n";
echo '<br/>';


?>



