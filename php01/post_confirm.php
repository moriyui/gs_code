<?php
$name = $_POST["name"];
$name = $_POST["mail"];
if($name==""){
    $name ="未入力です"
}
if($mail==""){
    $mail ="未入力です"
}

?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前：<?php echo $name; ?>
EMAIL：<?php echo $mail; ?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>