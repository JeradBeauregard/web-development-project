<h1>FizzBuzz</h1>
<br/>

<?php

$num = ceil(rand(1,100));
echo 'the random number is ' .$num;
echo '<br/>';

if($num%3== 0 && $num%5 == 0){
    echo 'FizzBUzz';
} elseif($num%3 == 0){
    echo 'Fizz';
} elseif($num%5 == 0){
    echo 'Buzz';
} else{
    echo 'The Magic Number is ' .$num;
}


?>