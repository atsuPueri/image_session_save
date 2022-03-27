<?php

// 送信時
if (isset($_POST{'btn'})) {

    // 画像だろうと中身は文字列として取得できる
    $file_str = file_get_contents($_FILES["userFile"]["tmp_name"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form enctype="multipart/form-data" action="./index.php" method="POST">

        このファイルをアップロード: <input name="userFile" type="file">

        <input type="submit" value="ファイルを送信" name="btn">
    </form>
</body>
</html>