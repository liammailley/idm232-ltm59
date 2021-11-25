<?php // Functions and Math

// Example of how variables work when doing math

     function calculateTip($total, $percentage) {
          $total = $total * $percentage;
          return $total;
     }

     $finalValue = calculateTip(100, 0.20);
     echo $finalValue; // will output 20

// Example of if a variable is pre-set (what if you always tip 20%?)

     function calculateTip($total, $percentage = 0.20) {
          $total = $total * $percentage;
          return $total;
     }

     $finalValue = calculateTip(100);
     echo $finalValue; // will output 20

// Example of if a variable is pre-set but you want to override it

     function calculateTip($total, $percentage = 0.20) {
          $total = $total * $percentage;
          return $total;
     }

     $finalValue = calculateTip(100);
     echo $finalValue; // will output 20
     $finalValue50 = calculateTip(100, 0.50);
     echo $finalValue50; // will output 50

?>




<?php // If Statements

// The basics of if statements

     $personOneAge = 32;
     $personTwoAge = 14;
     $drinkingAge = 21;

     if ($personOneAge > $drinkingAge) {
          echo 'You can drink my man';
     } else {
          echo 'You can not drink bro';
     } // this will give a Yes

     if ($personTwoAge > $drinkingAge) {
          echo 'You can drink my man';
     } else {
          echo 'You can not drink bro';
     } // this will give a No

// Now let's add a function to the mix

     $personOneAge = 32;
     $personTwoAge = 14;
     $drinkingAge = 21;

     function canYouDrink($age, $ageLimit = 21) {
          if ($age > $ageLimit) {
               echo 'You can drink my man';
          } else {
               echo 'You can not drink bro';
          }
     }

     canYouDrink($personOneAge); // will give a yes
     canYouDrink($personTwoAge); // will give a no

?>



<?php // Super Globals 

var_dump($_SESSION);

?>