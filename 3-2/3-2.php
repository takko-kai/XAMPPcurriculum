<?php
//step1:フルーツと単価の連想配列を作成
$fruits = ["りんご" =>150 , "みかん" =>75 , "もも" =>1500 ];
foreach ($fruits as $key=>$value) {
    $value=$value*2;
    echo $key."は".$value."円です。";
    echo '<br>';
}
?>