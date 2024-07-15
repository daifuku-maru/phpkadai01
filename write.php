<?php
    // ファイルを開く（書き込みモード）
    $file = fopen("data/data.csv", "w");

    // データを書き込む
    fwrite($file, $_POST['name']);
    fwrite($file, $_POST['mail']);
    fwrite($file, $_POST['comment']);

    // ファイルを閉じる
    fclose($file);
?>