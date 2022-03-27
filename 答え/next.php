<?php
session_start();


// ファイルの中身を受け取り
$file_str = $_SESSION["file_str"];

// 画像を表示できるようにエンコード
$file_base64 = base64_encode($file_str);

// dataURLという形式に改良
$dataURL = "data:" . $_SESSION["MIME_Type"] . ";base64," . $file_base64;

// データURL: https://developer.mozilla.org/ja/docs/Web/HTTP/Basics_of_HTTP/Data_URIs


if (isset($_POST["btn"])) {
    // 保存するとき
    if ($_POST["btn"] === "1") {
        file_put_contents(__DIR__ . "/" . $_SESSION["file_name"], $file_str);
    } else {
        unset($_SESSION);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        img {
            width: 100px;
        }
    </style>
</head>
<body>
    <img src="<?php echo $dataURL;?>">
    保存しますか
    
    <form action="next.php" method="post">
        <label><button name="btn" value="1">YES</button></label>
        <label><button name="btn" value="0">NO</button></label>
    </form>
</body>
</html>