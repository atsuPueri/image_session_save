<?php
session_start();

// 送信時
if (isset($_POST{'btn'})) {

    $file_str = file_get_contents($_FILES["userFile"]["tmp_name"]);
    $_SESSION["file_str"] = $file_str;
    $_SESSION["file_name"] = $_FILES["userFile"]["name"];

    // MIMEType保存
    $_SESSION["MIME_Type"] = mime_content_type($_FILES["userFile"]["tmp_name"]);
    header("Location:next.php");
    exit;
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