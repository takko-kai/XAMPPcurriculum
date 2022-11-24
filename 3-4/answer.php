<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name = $_POST['my_name'];

$portnum=$_POST['number'];
$trueportnum=$_POST['correct1'];

$lang=$_POST['language'];

$truelang=$_POST['correct2'];

$com=$_POST['command'];
$truecom=$_POST['correct3'];



//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function result($myselect,$true){
  if($myselect==$true){
  echo "正解！";
}else{
  echo "残念・・・";
}
}
?>
<p><!--POST通信で送られてきた名前を表示--><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php result($portnum,$trueportnum);?>
<p>②の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php result($lang,$truelang);?>
<p>③の答え</p>
<!--作成した関数を呼び出して結果を表示-->
<?php result($com,$truecom);?>