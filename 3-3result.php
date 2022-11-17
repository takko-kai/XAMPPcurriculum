<?php
$rnum = $_GET['my_number'];
$select=$rnum[array_rand( $rnum )];
?>
<p><?php echo date("Y/m/d ", time());?>の運勢</p>
<p>選ばれた数字は<?php echo $select; ?></p>
<?php
if($select==0){
  echo "凶";
}elseif($select<=3){
  echo "小吉";
}elseif($select<=6){
  echo "中吉";
}elseif($select<=8){
  echo "吉";
}elseif($select==9){
  echo "大吉";
}
?>
