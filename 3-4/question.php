<link rel="stylesheet" href="style.css">
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name = $_POST['my_name'];
//echo $my_name;
//①画像を参考に問題文の選択肢の配列を作成してください。
 $portnums = [80, 22, 20, 21];
 $langs=['PHP', 'Python', 'JAVA', 'HTML'];
 $coms=['join', 'select', 'insert', 'update'];
         
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$trueportnum=$portnums[0];
$truelang=$langs[3];
$truecom=$coms[1];

?>
<p>お疲れ様です!<!--POST通信で送られてきた名前を出力--><?php echo $my_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">

    <h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php
    foreach ($portnums as $portnum) {
    echo "<input type='radio' name='number' value='${portnum}'>${portnum}";
}
?>
    <h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php  
    foreach($langs as $lang){
    echo "<input type='radio' name='language' value='${lang}'>${lang}";
}        
?>
    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php 
    foreach($coms as $com){
    echo "<input type='radio' name='command' value='${com}'>${com}";
}        
?>

<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<?php $_POST['number'] = $portnum;
      $_POST['correct1'] = $trueportnum;
      $_POST['language'] = $lang;
      $_POST['correct2'] = $truelang;
      $_POST['command'] = $com;
      $_POST['correct3'] = $truecom;?>

        <input type="hidden" name="my_name" value="<?php echo $my_name ?>" />
        <input type="hidden" name="correct1" value="<?php echo $trueportnum ?>"  />
        <input type="hidden" name="correct2" value="<?php echo $truelang ?>"  />
        <input type="hidden" name="correct3" value="<?php echo $truecom ?>" />
        <br>
        <input type="submit" value="回答する" />    
</form>


    