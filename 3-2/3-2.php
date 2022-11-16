<?php
//step1:フルーツと単価の連想配列を作成
$fruits = ["りんご" =>150 , "みかん" =>30 , "もも" =>500 ];

//配列の0:リンゴ、1:みかん、2:桃の順に個数を配列で作成
$fruitsv = [2, 5, 6];

function goukei($tanka, $kosu){
    $ans = $tanka * $kosu;
    return $ans;
   }
   
   //繰り返し構文
   $i = 0;
   foreach ($fruits as $key => $value) {
       if($i>=3){break;}
   
    $price = goukei($value, $fruitsv[$i]);
    echo "${key}は, ${price}円です。";
    echo '<br>';
    $i++;
   }

?>

