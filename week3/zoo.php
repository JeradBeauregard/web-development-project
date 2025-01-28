<h1>Zoo Management System</h1>
<br/>

<?php

//$hour = date('G');

$hour = ceil(rand(1, 24));
echo $hour . ':00';
echo '<br/>';

if ($hour == 5 || $hour == 6 || $hour == 7 || $hour == 8 || $hour == 9) {
    echo 'Breakfast: "Bananas, Apples, and Oats"';
} elseif ($hour == 12 || $hour == 13 || $hour == 14) {
    echo 'Lunch: "Fish, Chicken, and Vegetables"';
} elseif ($hour == 19 || $hour == 20 || $hour == 21) {
    echo 'Dinner: "Steak, Carrots, and Broccoli"';
} else {
    echo 'The animals are not being fed';
}


?>