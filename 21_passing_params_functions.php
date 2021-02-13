<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

function greeting($message)
{
    echo $message;
}


greeting("Hi Customer! How are you?");


?>

<?php


function addNumbers($number1, $number2)
{
    $sum = $number1 + $number2;
    echo $sum;
}

echo "<br>";
echo "Adding numbers!";
addNumbers(345, 3462);

?>


</body>
</html>