<?php
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}

$name = $_POST["name"];
$mail = $_POST["mail"];
$str = date(",");

//File書き込み
$file = fopen("data/data.txt","a","name","mail");	// ファイル読み込み
fwrite($file, $str."name",$str."mail");
fclose($file);


?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
<?php echo h($name); ?>
<?php echo h($str);?>
<?php echo h($mail); ?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>