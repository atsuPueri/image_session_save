<?php
session_start();

if (isset($_POST["btn"])) {
    
    $save_file_name = $_FILES["userFile"]["name"];

    move_uploaded_file($_FILES["userFile"]["tmp_name"], "./tmp/" . $save_file_name);
    $_SESSION["save_file_name"] = $save_file_name;
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