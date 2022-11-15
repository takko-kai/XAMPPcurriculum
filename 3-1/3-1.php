<?php
$num=1;
while($num<=100){ 
   if($num%3==0 && $num%5!==0){
    echo "Fizz!";
    echo '<br>';
  }elseif($num%5==0 && $num%3!==0){
    echo "Buzz!";
    echo '<br>';
   }elseif($num%3==0 && $num%5==0){
    echo "FizzBuzz!!";
    echo '<br>';
   }else{
    echo $num;  
    echo '<br>';
    }
    $num++; 
   }
?>