<?php
$rnum= $_GET['my_number'];
$arr1 = str_split($rnum);
$select=array_rand($arr1,1);
?>
<p><?php echo date("Y/m/d ", time());?>の運勢</p>
<p>選ばれた数字は<?php echo $arr1[$select]; ?></p>
<?php
if($arr1[$select]==0){
  echo "凶";
}elseif($arr1[$select]<=3){
  echo "小吉";
}elseif($arr1[$select]<=6){
  echo "中吉";
}elseif($arr1[$select]<=8){
  echo "吉";
}elseif($arr1[$select]==9){
  echo "大吉";
}
?>
