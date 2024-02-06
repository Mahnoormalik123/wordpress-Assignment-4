<?php
// Function to check a number using if-else statement
$number = 7; //Assign a number to variable
    if ($number == 6) { //check number
       echo "The number is $number";//print
    } elseif ($number == 7) { 
        echo "The number is $number";
    } elseif ($number == 8) {
        echo "The number is $number";
    } else {
        echo "The number is $number";
    }

// Function to check a number using switch-case statement
$number= 48;
    switch ($number) {
        case 1:
             echo "The number is {$number}";
            break;
        case 2:
             echo "The number is {$number}";
            break;
        case 3:
             echo "The number is {$number}";
            break;
        default:
         echo "The number is {$number}";
            
    }

// Print table of 2 using for loop
$number2 = 2;
echo "Table of 2 :<br>";
for ($i = 1; $i <= 10; $i++) {
    $result = $number2 * $i;
    echo "$number2*$i = $result <br>";
}

?>
