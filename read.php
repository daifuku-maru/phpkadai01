<html>
<head>
<meta charset="utf-8">
<title>アンケート</title>
</head>
<body>
<?php
// ファイルを変数に格納
$filename = 'data/data.csv';
// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');
// whileで行末までループ処理
while (!feof($fp)) {
// fgetsでファイルを読み込み、変数に格納
$txt = fgets($fp);
// ファイルを読み込んだ変数を出力
echo $txt.'<br>';
}
// fcloseでファイルを閉じる
fclose($fp);
?>

<ul>
    <li><a href="index.php">index.php</a></li>
</ul>

</body>
</html>